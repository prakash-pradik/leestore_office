var base_url = "";

$(document).ready(function () {

    alertify.set('notifier', 'position', 'top-right');
    startTime();
    base_url = document.getElementById("base_url").value; //$('#base_url').val();

})

function startTime() {
    const today = new Date();
    let hours = checkTime(today.getHours());
    let minutes = checkTime(today.getMinutes());
    let seconds = checkTime(today.getSeconds());
    let ampm = hours >= 12 ? 'PM' : 'AM';

    hours = hours % 12;
    hours = hours ? hours : 12;
    hours = checkTime(hours);

    let day = checkTime(today.getUTCDate());
    let month = checkTime(today.getUTCMonth() + 1); // months from 1-12
    let year = today.getUTCFullYear();

    document.getElementById('time_txt').innerHTML = day + "-" + month + "-" + year + " " + hours + ":" + minutes + ":" + seconds + " " + ampm;
    setTimeout(startTime, 1000);
}

function checkTime(i) {
    if (i < 10) { i = "0" + i };  // add zero in front of numbers < 10
    return i;
}

$('#stock_category').change(function () {
    var SelectedValue = $('option:selected', this).val();
    var prodOptions = '<option value="">Please select</option>';
    $.ajax({
        url: base_url + 'admin/fetch_data_array',
        type: 'post',
        data: { id: SelectedValue, tbl_name: 'products' },
        dataType: 'json',
        success: function (res) {

            if (res.status == 1) {
                $.each(res.data, function (key, value) {
                    prodOptions += '<option value="' + value.id + '">' + value.product_name + '</option>';
                });
                $('#stock_product_id').html(prodOptions);
            } else {
                prodOptions = '<option value="">Please select</option>';
                $('#stock_product_id').html(prodOptions);
            }
        }
    });

});


function getStats(filter, value) {

    $.ajax({
        url: base_url + 'admin/getDashboardStats',
        type: 'post',
        data: { filter: filter },
        dataType: "json",
        success: function (res) {
            var stats = res.data;
            $("#filter_name").text(value);
            if (stats.order_count) {
                $("#order_count_span").text(stats.order_count);
            }
            if (stats.order_total !== null) {
                var ordTotal = parseFloat(stats.order_total).toFixed(2);
                $("#order_total_span").text(numberWithCommas(ordTotal));
            } else {
                $("#order_total_span").text('0.00');
            }

            if (stats.stores_count) {
                $("#total_conv_rate").text(stats.stores_count);
            }
        }
    });
}

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}


function updatePassword() {
    var passwrd = $("#user_password").val();
    $.ajax({
        url: base_url + 'admin/update_password',
        type: 'post',
        data: { password: passwrd },
        dataType: "json",
        success: function (res) {

            if (res.status == 200) {
                alertify.success(res.message);
            } else {
                alertify.error(res.message);
            }

        }
    });
}