
$(document).ready(function () {

    triggerInput();

    $('#bill_date').datepicker("setDate", "today");
    $(".input-select2").select2();

    customerFetch();

    if (globalData !== '') {
        setTimeout(() => {
            $('#pos_customer').val(globalData.customer_id).trigger('change');
            //console.log(globalOrders);
            $.each(globalOrders, function (key, val) {

                prodObj.push({ productId: val.product_id, name: val.product_name, unitPrice: val.price, quantity: val.quantity, subTotal: val.sub_total });
            });
            dynamicHtml();
            console.log(prodObj);
        }, 1000);
    }

})
function triggerInput() {
    $('.numeric').on('input', function (event) {
        this.value = this.value.replace(/[^0-9]/g, '');
    });
}

var productRow = '';
var prodObj = [];
var multiPayObj = [];
let count = 1;

$('#pos_category').change(function () {
    var SelectedValue = $('option:selected', this).val();
    var prodOptions = '<option value="">Please select</option>';

    if (SelectedValue == "") {
        $('#pos_product').html('<option value="">Select category first</option>');
        return false;
    }
    $.ajax({
        url: base_url + 'admin/fetch_data_array',
        type: 'post',
        data: { id: SelectedValue, tbl_name: 'products' },
        dataType: 'json',
        success: function (res) {
            console.log(res);
            if (res.status == 1) {
                $.each(res.data, function (key, value) {
                    prodOptions += '<option value="' + value.id + '">' + value.product_name + '</option>';
                });
                $('#pos_product').html(prodOptions);
            } else {
                prodOptions = '<option value="">Please select</option>';
                $('#pos_product').html(prodOptions);
            }
        }
    });

});

$("#pos_product").change(function () {
    var SelectedValue = $('option:selected', this).val();

    $.ajax({
        url: base_url + 'payments/get_data',
        type: 'post',
        data: { id: SelectedValue, tbl_name: 'products' },
        dataType: 'json',
        success: function (res) {

            if (res.status == 1) {
                var prodData = res.data;
                //let dynamicRowHTML = '<tr> <td>' + prodData.product_name + '</td> <td>' + prodData.price + '</td> <td>' + prodData.price + '</td> <td>' + prodData.price + '</td> <td class="text-center"><button class="btn btn-danger btn-xs" onclick="deleteFunc(this);" data-id="' + prodData + '"><i class="fa fa-close"></i></button></td> </tr>';
                var subTotal = parseInt(prodData.sell_price * 1);
                prodObj.push({ productId: prodData.id, name: prodData.product_name, unitPrice: prodData.sell_price, quantity: 1, subTotal: subTotal });

            } else {
                console.log("empty");
            }

            dynamicHtml();
        }
    });

})


function dynamicHtml() {
    $('#product_tbody').empty();

    if (prodObj.length > 0) {
        $.each(prodObj, function (key, value) {

            var dynamicRowHTML = '<tr class="qtyBox"> <input type="hidden" class="prodId" value="' + key + '"/> <td>' + value.name + '</td> <td><input value="' + value.unitPrice + '" class="form-control numeric unit_price" maxlength="6"></td> <td class="text-center quantity-td"><div class="input-group"> <span class="input-group-btn"> <button type="button" class="btn btn-primary decrement"><i class="fa fa-minus"></i></button></span> <input type="text" name="pos_qty" value="' + value.quantity + '" class="form-control text-center numeric pos_qty" maxlength="2" > <span class="input-group-btn "><button type="button" class="btn btn-primary increment"><i class="fa fa-plus"></i></button></span></div></td > <td class="text-right"><span class="sub_total">' + numberWithCommas(value.subTotal) + '</span></td> <td class="text-center"><button class="btn btn-danger btn-xs" onclick="deleteFunc(' + key + ');" ><i class="fa fa-close"></i></button></td> </tr > ';
            $('#product_tbody').append(dynamicRowHTML);

        });
        fetchNetAmt();
    }
    triggerInput();
}

$(document).on('input', '.unit_price', function () {

    var quanInput = $(this).closest('.qtyBox').find('.pos_qty').val();
    var prodId = $(this).closest('.qtyBox').find('.prodId').val();
    var currentVal = parseInt(quanInput);

    var unitPriceInput = $(this).closest('.qtyBox').find('.unit_price').val();
    var subInput = $(this).closest('.qtyBox').find('.sub_total');

    if (!isNaN(unitPriceInput)) {
        var subTotal = parseInt(unitPriceInput * currentVal);
        subInput.text(numberWithCommas(subTotal));
        updateUnitPrice(prodId, unitPriceInput, subTotal);
    }
    fetchNetAmt();
});

function updateUnitPrice(prodId, unitVal, subTotal) {
    var objIndex = prodId;
    prodObj[objIndex].unitPrice = unitVal;
    prodObj[objIndex].subTotal = subTotal;
}

$(document).on('click', '.increment', function () {

    var quanInput = $(this).closest('.qtyBox').find('.pos_qty');
    var prodId = $(this).closest('.qtyBox').find('.prodId').val();
    var currentVal = parseInt(quanInput.val());

    var unitPriceInput = $(this).closest('.qtyBox').find('.unit_price').val();
    var subInput = $(this).closest('.qtyBox').find('.sub_total');

    if (!isNaN(currentVal)) {
        var qtyVal = currentVal + 1;
        quanInput.val(qtyVal);

        var subTotal = parseInt(unitPriceInput * qtyVal);
        subInput.text(numberWithCommas(subTotal));
        qtyIncDec(prodId, qtyVal, subTotal);
    }

})

$(document).on('click', '.decrement', function () {

    var quanInput = $(this).closest('.qtyBox').find('.pos_qty');
    var prodId = $(this).closest('.qtyBox').find('.prodId').val();
    var currentVal = parseInt(quanInput.val());

    var unitPriceInput = $(this).closest('.qtyBox').find('.unit_price').val();
    var subInput = $(this).closest('.qtyBox').find('.sub_total');

    if (!isNaN(currentVal) && currentVal > 1) {
        var qtyVal = currentVal - 1;
        quanInput.val(qtyVal);

        var subTotal = parseInt(unitPriceInput * qtyVal);
        subInput.text(numberWithCommas(subTotal));
        qtyIncDec(prodId, qtyVal, subTotal);
    }

})

$(document).on('input', '#net_discount', function () {

    var percentageVal = $(this).val();
	
	if(percentageVal != 0)
		netDiscountCal(percentageVal);

})

function netDiscountCal(percentageVal) {

    var grossInputVal = $("#gross_amount").val();

    if (percentageVal == "") {
        $(".discount_amount").text('0.00');
        $("#discount_amount").val('');
        var grossVal = parseFloat(grossInputVal).toFixed(2);
        $("#total_payable").val(grossVal);
        $(".net_amount, .total_payable").text(numberWithCommas(grossVal));
        return false;
    }
    if ((isNaN(percentageVal))) {
        alertify.error("Invalid Number!");
        return false;
    }
    if (parseFloat(percentageVal) >= 0 && parseFloat(percentageVal) <= 100) {
        var grossAmount = discountAmt = 0;
        discountAmt = (percentageVal / 100) * grossInputVal;
        $("#discount_amount").val(discountAmt);
        $(".discount_amount").text(discountAmt.toFixed(2));

        grossAmount = parseFloat(grossInputVal - discountAmt);
        $("#total_payable").val(grossAmount);
        grossAmount = grossAmount.toFixed(2);
        $(".net_amount, .total_payable").text(numberWithCommas(grossAmount));
        return true;

    } else {
        $(this).val('');
        $(".discount_amount").text('0.00');
        $("#discount_amount").val('');
        $("#total_payable").val(grossInputVal);
        var grossVal = parseFloat(grossInputVal).toFixed(2);
        $(".net_amount, .total_payable").text(numberWithCommas(grossVal));
        alertify.error("Enter number between 0 to 100!");
        return false;
    }
}

$(document).on('input', '#discount_amount', function () {
    var disVal = $(this).val();
    discountCal(disVal);
})

function discountCal(percentageVal){
	
	var grossInputVal = $("#gross_amount").val();

    if (percentageVal == "") {
        $(".discount_amount").text('0.00');
        var grossVal = parseFloat(grossInputVal).toFixed(2);
        $("#total_payable").val(grossVal);
        $(".net_amount, .total_payable").text(numberWithCommas(grossVal));
        return false;
    }
    if ((isNaN(percentageVal))) {
        alertify.error("Invalid Number!");
        return false;
    }
    if (parseFloat(percentageVal) != 0) {
		console.log(percentageVal);
        var grossAmount = discountAmt = 0;
        discountAmt = percentageVal;
        //$(".discount_amount").text(discountAmt.toFixed(2));

        grossAmount = parseFloat(grossInputVal - discountAmt);
		console.log(grossAmount);
        $("#total_payable").val(grossAmount);
        grossAmount = grossAmount.toFixed(2);
        $(".net_amount, .total_payable").text(numberWithCommas(grossAmount));
        return true;

    } else {
        $(this).val('');
        $(".discount_amount").text('0.00');
        $("#total_payable").val(grossInputVal);
        var grossVal = parseFloat(grossInputVal).toFixed(2);
        $(".net_amount, .total_payable").text(numberWithCommas(grossVal));
        alertify.error("Enter number between 0 to 100!");
        return false;
    }
	
}


/* $(document).on('change', '#round_off', function () {
    var roundVal = $(this).val();
    if (roundVal != '')
        roundOffCal(roundVal);
})

function roundOffCal(rndVal) {

    var netAmt = $("#total_payable").val();
    var payableAmt = (netAmt - rndVal);

    $("#total_payable").val(payableAmt);
    var finalAmt = payableAmt.toFixed(2);
    $(".net_amount, .total_payable").text(numberWithCommas(finalAmt));
} */


function qtyIncDec(prodId, qtyVal, subTotal) {
    var objIndex = prodId;
    prodObj[objIndex].quantity = qtyVal;
    prodObj[objIndex].subTotal = subTotal;
    fetchNetAmt();
}

function deleteFunc(id) {
    const index = prodObj.indexOf(id);
    if (index == -1) {
        prodObj.splice(id, 1);
    }
    dynamicHtml();
    fetchNetAmt();
}


function fetchNetAmt() {
    var netAmount = 0;
    var quantity = 0;

    if (prodObj.length !== 0) {
        $.each(prodObj, function (key, value) {
            netAmount = parseInt(netAmount) + parseInt((value.unitPrice * value.quantity));
            quantity = parseInt(quantity) + parseInt(value.quantity);
        });
    } else {
        $("#net_discount").val('');
        $("#total_quantity").val('');
    }
    $("#gross_amount").val(netAmount);
    $("#total_payable").val(netAmount);
    $("#total_quantity").val(quantity);

    netAmount = netAmount.toFixed(2);

    $(".net_amount, .gross_amount, .total_payable").text(numberWithCommas(netAmount));
    setTimeout(() => {
        $("#net_discount").trigger("input");
    }, 500);
}


function saveCash(saleType) {

    var billDate = $("#bill_date").val();
    var customerId = $("#pos_customer").val();
    var discountVal = $("#net_discount").val();
    var discountAmount = $("#discount_amount").val();
    var grossVal = $("#gross_amount").val();
    var totalPayable = $('#total_payable').val();
    var totalQty = $('#total_quantity').val();

    var balanceAmt = $("#balance_amount").val();

    if (customerId == 0) {
        alertify.error("Please select the customer!");
        return;
    }

    if (prodObj.length == 0) {
        alertify.error("Please select at least one product!");
        return;
    }

    $.ajax({
        url: base_url + 'payments/addPos',
        type: 'post',
        data: {
            customerId: customerId,
            saleType: saleType,
            billDate: billDate,
            grossVal: grossVal,
            discountVal: discountVal,
            discountAmount: discountAmount,
            totalPayable: totalPayable,
            totalQty: totalQty,
            balanceAmt: balanceAmt,
            multiPayData: multiPayObj,
            data: prodObj
        },
        dataType: 'json',
        success: function (res) {

            if (res.status == 200) {
                alertify.success(res.message);
                setTimeout(() => {
                    if (res.data !== "") {
                        window.open(base_url + 'invoice/' + res.data.id, '_blank');
                    }
                }, 1500);

                setTimeout(() => {
                    window.location.href = base_url + 'payments';
                }, 3000);
            }
            else {
                alertify.error(res.message);
            }
        }
    });
}


function updateCash(saleType) {
    var orderId = $("#order_id").val();
    var billDate = $("#bill_date").val();
    var customerId = $("#pos_customer").val();
    var discountVal = $("#net_discount").val();
    var discountAmount = $("#discount_amount").val();
    var grossVal = $("#gross_amount").val();
    var totalPayable = $('#total_payable').val();

    if (customerId == 0) {
        alertify.error("Please select the customer!");
        return;
    }

    if (prodObj.length == 0) {
        alertify.error("Please select at least one product!");
        return;
    }

    $.ajax({
        url: base_url + 'payments/updatePos',
        type: 'post',
        data: {
            orderId: orderId,
            customerId: customerId,
            saleType: saleType,
            billDate: billDate,
            grossVal: grossVal,
            discountVal: discountVal,
            discountAmount: discountAmount,
            totalPayable: totalPayable,
            data: prodObj
        },
        dataType: 'json',
        success: function (res) {

            if (res.status == 200) {
                alertify.success(res.message);
                setTimeout(() => {
                    window.location.href = base_url + 'sales_list/week';
                }, 3000);
            }
            else {
                alertify.error(res.message);
            }
        }
    });
}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function deleteSalesData(mythis) {
    var id = $(mythis).data('id');
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: base_url + 'admin/delete_by_id',
                type: 'post',
                data: { id: id, tbl_name: 'orders' },
                success: function (res) {

                    $(mythis).parent().parent().parent().remove();

                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });

                    setTimeout(() => {
                        location.reload();
                    }, 3000);
                }
            });
        }
    });
}

function customerFetch() {
    var cusOptions = [{ id: '0', text: 'Please select' }];
    $.ajax({
        url: base_url + 'customers/get_all',
        type: 'get',
        dataType: 'json',
        success: function (res) {
            if (res.length !== 0) {
                $.each(res, function (key, value) {
                    cusOptions.push({ id: value.id, text: value.name + ' - ' + value.phone_number });
                });
                $('#pos_customer').html('').select2({ data: cusOptions });
            }
        }
    });
}

function addCustomer() {
    var customer_name = $("#customer_name").val();
    var customer_phone = $("#customer_phone").val();
    var customer_address = $("#customer_address").val();

    $.ajax({
        url: base_url + 'customers/insert_customer_ajax',
        type: 'post',
        data: {
            customer_name: customer_name,
            customer_phone: customer_phone,
            customer_address: customer_address
        },
        dataType: 'json',
        success: function (res) {

            if (res.status == 200) {
                $('#modal-new-customer').modal('toggle');
                alertify.success(res.message);
				
				if(res.status_type == 'success'){
					$("#pos_customer").append('<option selected="selected" value="' + res.customer_id + '">' + customer_name + ' - ' + customer_phone + '</option>');
				}
				
                setTimeout(() => {
                    $("#pos_customer").val(res.customer_id);
                }, 1000);
            } else {
                alertify.error(res.message);
            }
        }
    });
}

function addProduct() {
    var product_store = $("#product_store").val();
    var product_type = $("#product_type").val();
    var product_name = $("#product_name").val();
    var category_name = $("#modal_category_name").val();
    var brand_id = $("#brand_id").val();
    var imei_number1 = $("#imei_number1").val();
    var imei_number2 = $("#imei_number2").val();
    var serial_number = $("#serial_number").val();
    var price = $("#price").val();
    var cost_price = $("#cost_price").val();
    var sell_price = $("#sell_price").val();

    $.ajax({
        url: base_url + 'products/insert_product_ajax',
        type: 'post',
        data: {
            product_store: product_store,
            product_type: product_type,
            product_name: product_name,
            category_name: category_name,
            brand_id: brand_id,
            imei_number1: imei_number1,
            imei_number2: imei_number2,
            serial_number: serial_number,
            price: price,
            cost_price: cost_price,
            sell_price: sell_price
        },
        dataType: 'json',
        success: function (res) {

            if (res.status == 200) {
                $('#modal-new-product').modal('toggle');
                alertify.success(res.message);
                $("#pos_product").append('<option  value="' + res.customer_id + '">' + product_name + '</option>');
                setTimeout(() => {
                    $("#pos_product").val(res.customer_id);
                }, 1000);
            } else {
                alertify.error(res.message);
            }
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    myFunction();
});

function myFunction() { }

function getProduct(value) {
    console.log(value);
    var value1 = '20001';
    $.ajax({
        url: base_url + 'products/getProductData',
        type: 'post',
        data: { barcode: value },
        dataType: 'json',
        success: function (res) {
            if (res.status == 1) {
                var prodData = res.data;
                var subTotal = parseInt(prodData.price * 1);
                console.log(prodObj.length);
                prodObj.push({ productId: prodData.id, name: prodData.product_name, unitPrice: prodData.price, quantity: 1, subTotal: subTotal });

                setTimeout(() => {
                    dynamicHtml();
                    $("#product_barcode").val('');
                }, 500);

            } else {
                console.log("No products");
            }
        }
    });
}

$("#product_barcode").change(function () {
    var barVal = $(this).val();
    if (barVal !== "") {
        getProduct(barVal);
    }
})

$(".sell_price, .cost_price").keyup(function () {
    getMargin();
})


function getMargin() {
    var cprice = $(".cost_price").val();
    var sprice = $(".sell_price").val();
    if (!(sprice) || !(cprice)) {
        $('.margin_val').val('');
    } else {
        var margin = parseFloat(sprice) - parseFloat(cprice);
        var marginper = (parseFloat(margin) * 100) / parseFloat(cprice);
        $('.margin_val').val(marginper.toFixed(2));
    }
}

$(document).on('input', '#cash_pay', function () {
    var payableAmt = $("#total_payable").val();
    var cashPay = $(this).val();
    var upiPay = $("#upi_pay").val();

    if (upiPay == "")
        upiPay = 0;

    var finalAmt = 0;
    if (!isNaN(cashPay)) {
        var multiPay = parseFloat(cashPay) + parseFloat(upiPay)
        finalAmt = (payableAmt - multiPay).toFixed(2);

        if (payableAmt < multiPay) {
            alertify.error("Payment Amount Exceeds.!");
            $(".balance_amount").addClass('text-danger');
        } else {
            $(".balance_amount").removeClass('text-danger');
        }
    }
    $("#balance_amount").val(finalAmt);
    $(".balance_amount").text(numberWithCommas(finalAmt));
});
$(document).on('input', '#upi_pay', function () {
    var payableAmt = $("#total_payable").val();
    var upiPay = $(this).val();
    var cashPay = $("#cash_pay").val();

    if (cashPay == "")
        cashPay = 0;

    var finalAmt = 0;
    if (!isNaN(upiPay)) {
        var multiPay = parseFloat(cashPay) + parseFloat(upiPay)
        finalAmt = (payableAmt - multiPay).toFixed(2);

        if (payableAmt < multiPay) {
            alertify.error("Payment Amount Exceeds.!");
            $(".balance_amount").addClass('text-danger');
        } else {
            $(".balance_amount").removeClass('text-danger');
        }
    }
    $("#balance_amount").val(finalAmt);
    $(".balance_amount").text(numberWithCommas(finalAmt));
});

function openMultiPayModal() {
    var customerId = $("#pos_customer").val();
    if (customerId == 0) {
        alertify.error("Please select the customer!");
        return;
    }
    if (prodObj.length == 0) {
        alertify.error("Please select at least one product!");
        return;
    }
    $("#modal-multipay").modal('toggle');
}

function saveMultipay() {
    multiPayObj = [];
    var cashPayVal = $("#cash_pay").val();
    var upiPayVal = $("#upi_pay").val();

    multiPayObj.push({ payMode: 'cash', payAmount: cashPayVal }, { payMode: 'upi', payAmount: upiPayVal });
    $("#modal-multipay").modal('toggle');
    saveCash('multipay');
}