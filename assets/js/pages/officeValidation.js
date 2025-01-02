/*
 *  Document   : OfficeValidation.js
 *  Description: Custom javascript code used in Forms Validation page
 */

var OfficeValidation = function () {

    return {
        init: function () {
            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

            /* Initialize Form Validation */
            $('#income-validation').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    income_user_name: {
                        required: true,
                        minlength: 3
                    },
                    income_amt_value: {
                        required: true,
                        digits: true
                    }
                },
                messages: {
                    income_user_name: {
                        required: 'Please enter a name',
                        minlength: 'Your name must consist of at least 3 characters'
                    },
                    income_amt_value: 'Please enter only digits!'
                }
            });

            $('#income-validation-old').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    old_user_id: {
                        required: true
                    },
                    old_income_amt: {
                        required: true,
                        digits: true
                    }
                },
                messages: {
                    old_user_id: 'Please select a user!',
                    old_income_amt: 'Please enter only digits!'
                }
            });

            $('#user-validation').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    user_name: {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    user_name: {
                        required: 'Please enter a name',
                        minlength: 'Your name must consist of at least 3 characters'
                    }
                }
            });

            $('#sale-income-validation').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    emp_id: {
                        required: true
                    },
                    sale_desc: {
                        required: true,
                        minlength: 3
                    },
                    sale_amt: {
                        required: true,
                        digits: true
                    },
                    amount_mode: {
                        required: true
                    }
                },
                messages: {
                    emp_id: 'Please select a sales person!',
                    sale_desc: {
                        required: 'Please enter a description',
                        minlength: 'Description must consist of at least 3 characters'
                    },
                    sale_amt: 'Please enter only digits!',
                    amount_mode: 'Please select a mode of payment!',
                }
            });

            $('#sale-exp-validation').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    emp_id: {
                        required: true
                    },
                    sale_desc: {
                        required: true,
                        minlength: 3
                    },
                    sale_amt: {
                        required: true,
                        digits: true
                    },
                    amount_mode: {
                        required: true
                    }
                },
                messages: {
                    emp_id: 'Please select a sales person!',
                    sale_desc: {
                        required: 'Please enter a description',
                        minlength: 'Description must consist of at least 3 characters'
                    },
                    sale_amt: 'Please enter only digits!',
                    amount_mode: 'Please select a mode of payment!',
                }
            });

            $('#buy-validation').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    customer_name: {
                        required: true,
                        minlength: 3
                    },
                    customer_phone: {
                        required: true,
                        digits: true
                    },
                    phone_name: {
                        required: true
                    },
                    phone_details: {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    customer_name: {
                        required: 'Please enter a name',
                        minlength: 'Your name must consist of at least 3 characters'
                    },
                    customer_phone: 'Please enter valid phone number!',
                    phone_name: 'Please enter phone model!',
                    phone_details: 'Please enter something about phone!'
                }
            });

            $('#sell-validation').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    customer_name: {
                        required: true,
                        minlength: 3
                    },
                    customer_phone: {
                        required: true,
                        digits: true
                    },
                    phone_name: {
                        required: true
                    },
                    phone_details: {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    customer_name: {
                        required: 'Please enter a name',
                        minlength: 'Your name must consist of at least 3 characters'
                    },
                    customer_phone: 'Please enter valid phone number!',
                    phone_name: 'Please enter phone model!',
                    phone_details: 'Please enter something about phone!'
                }
            });

            $('#update-validation').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    customer_name: {
                        required: true,
                        minlength: 3
                    },
                    customer_phone: {
                        required: true,
                        digits: true
                    },
                    phone_name: {
                        required: true
                    },
                    phone_details: {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    customer_name: {
                        required: 'Please enter a name',
                        minlength: 'Your name must consist of at least 3 characters'
                    },
                    customer_phone: 'Please enter valid phone number!',
                    phone_name: 'Please enter phone model!',
                    phone_details: 'Please enter something about phone!'
                }
            });
			
			$('#booking-view-validation').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    // You can use the following if you would like to highlight with green color the input after successful validation!
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    booking_name: {
                        required: true,
                        minlength: 3
                    },
                    booking_phone: {
                        required: true
                    },
                    booking_details: {
                        required: true
                    }
                },
                messages: {
                    booking_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    booking_phone: 'Please enter phone number.!',
                    booking_details: 'Please enter details.!'
                },
                submitHandler: function (form) {
                    //console.log(form);
                    deliverBooking();
                }
            });
        }
    };
}();