/*
 *  Document   : formsValidation.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Forms Validation page
 */

var FormsValidation = function () {

    return {
        init: function () {
            /*
             *  Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation
             */

            /* Initialize Form Validation */
            $('#form-validation').validate({
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
                    val_username: {
                        required: true,
                        minlength: 3
                    },
                    val_email: {
                        required: true,
                        email: true
                    },
                    val_password: {
                        required: true,
                        minlength: 5
                    },
                    val_confirm_password: {
                        required: true,
                        equalTo: '#val_password'
                    },
                    val_bio: {
                        required: true,
                        minlength: 5
                    },
                    val_skill: {
                        required: true
                    },
                    val_website: {
                        required: true,
                        url: true
                    },
                    val_digits: {
                        required: true,
                        digits: true
                    },
                    val_number: {
                        required: true,
                        number: true
                    },
                    val_range: {
                        required: true,
                        range: [1, 1000]
                    },
                    val_terms: {
                        required: true
                    }
                },
                messages: {
                    val_username: {
                        required: 'Please enter a username',
                        minlength: 'Your username must consist of at least 3 characters.!'
                    },
                    val_email: 'Please enter a valid email address',
                    val_password: {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long'
                    },
                    val_confirm_password: {
                        required: 'Please provide a password',
                        minlength: 'Your password must be at least 5 characters long',
                        equalTo: 'Please enter the same password as above'
                    },
                    val_bio: 'Don\'t be shy, share something with us :-)',
                    val_skill: 'Please select a skill!',
                    val_website: 'Please enter your website!',
                    val_digits: 'Please enter only digits!',
                    val_number: 'Please enter a number!',
                    val_range: 'Please enter a number between 1 and 1000!',
                    val_terms: 'You must agree to the service terms!'
                }
            });


            $('#category-validation').validate({
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
                    category_store: {
                        required: true
                    },
                    category_name: {
                        required: true,
                        minlength: 2
                    }
                },
                messages: {
                    category_store: 'Please select the store.!',
                    category_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 2 characters.!'
                    }
                }
            });

            $('#category-update-validation').validate({
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
                    category_store: {
                        required: true
                    },
                    category_name: {
                        required: true,
                        minlength: 2
                    }
                },
                messages: {
                    category_store: 'Please select the store.!',
                    category_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 2 characters.!'
                    }
                }
            });

            $('#brand-validation').validate({
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
                    brand_store: {
                        required: true
                    },
                    brand_name: {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    brand_store: 'Please select the store.!',
                    brand_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    }
                }
            });

            $('#brand-update-validation').validate({
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
                    brand_store: {
                        required: true
                    },
                    brand_name: {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    brand_store: 'Please select the store.!',
                    brand_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    }
                }
            });

            $('#product-validation').validate({
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
                    product_store: {
                        required: true
                    },
                    product_type: {
                        required: true
                    },
                    product_name: {
                        required: true,
                        minlength: 3
                    },
                    category_name: {
                        required: true
                    },
                    price: {
                        required: true,
                        range: [1, 999999]
                    },
                    cost_price: {
                        required: true,
                        range: [1, 999999]
                    },
                    sell_price: {
                        required: true,
                        range: [1, 999999]
                    }
                },
                messages: {
                    product_store: 'Please select the store.!',
                    product_type: 'Please select a product type.!',
                    product_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    category_name: 'Please select a category.!',
                    price: 'Please enter price.!',
                    cost_price: 'Please enter cost price.!',
                    sell_price: 'Please enter selling price.!'
                }
            });

            $('#product-update-validation').validate({
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
                    product_store: {
                        required: true
                    },
                    product_type: {
                        required: true
                    },
                    product_name: {
                        required: true,
                        minlength: 3
                    },
                    category_name: {
                        required: true
                    },
                    price: {
                        required: true,
                        range: [1, 999999]
                    },
                    cost_price: {
                        required: true,
                        range: [1, 999999]
                    },
                    sell_price: {
                        required: true,
                        range: [1, 999999]
                    }
                },
                messages: {
                    product_store: 'Please select the store.!',
                    product_type: 'Please select a product type.!',
                    product_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    category_name: 'Please select a category.!',
                    price: 'Please enter price.!',
                    cost_price: 'Please enter cost price.!',
                    sell_price: 'Please enter selling price.!'
                }
            });

            $('#staff-validation').validate({
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
                    staff_store: {
                        required: true
                    },
                    staff_full_name: {
                        required: true,
                        minlength: 3
                    },
                    staff_phone_number: {
                        required: true
                    },
                    staff_user_name: {
                        required: true
                    },
                    staff_password: {
                        required: true
                    },
                    staff_address: {
                        required: true
                    }
                },
                messages: {
                    staff_store: 'Please select the store.!',
                    staff_full_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    staff_phone_number: 'Please enter phone number.!',
                    staff_user_name: 'Please enter user name.!',
                    staff_password: 'Please enter password.!',
                    staff_address: 'Please enter address.!'
                }
            });

            $('#staff-update-validation').validate({
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
                    staff_store: {
                        required: true
                    },
                    staff_full_name: {
                        required: true,
                        minlength: 3
                    },
                    staff_phone_number: {
                        required: true
                    },
                    staff_user_name: {
                        required: true
                    },
                    staff_password: {
                        required: true
                    },
                    staff_address: {
                        required: true
                    }
                },
                messages: {
                    staff_store: 'Please select the store.!',
                    staff_full_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    staff_phone_number: 'Please enter phone number.!',
                    staff_user_name: 'Please enter user name.!',
                    staff_password: 'Please enter password.!',
                    staff_address: 'Please enter address.!'
                }
            });

            $('#stock-validation').validate({
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
                    stock_product_id: {
                        required: true
                    },
                    supplier_name: {
                        required: true,
                        minlength: 3
                    },
                    supplier_phone: {
                        required: true,
                        digits: true
                    },
                    stock_number: {
                        required: true,
                        digits: true
                    }
                },
                messages: {
                    stock_product_id: 'Please select a product.!',
                    supplier_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    supplier_phone: 'Please enter the phone number.!',
                    stock_number: 'Please enter the stock number.!'
                }
            });

            $('#stock-update-validation').validate({
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
                    update_stock_number: {
                        required: true,
                        digits: true
                    }
                },
                messages: {
                    update_stock_number: 'Please enter the stock number.!'
                }
            });

            $('#customer-validation').validate({
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
                        required: true
                    }
                },
                messages: {
                    customer_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    customer_phone: 'Please enter phone number.!'
                },
                submitHandler: function (form) {
                    //console.log(form);
                    addCustomer();
                }
            });

            $('#customer-update-validation').validate({
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
                        required: true
                    }
                },
                messages: {
                    customer_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    customer_phone: 'Please enter phone number.!'
                }
            });

            $('#assginRole-validation').validate({
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
                    staff_role_type: {
                        required: true
                    }
                },
                messages: {
                    staff_role_type: 'Please select the role type.!'
                }
            });

            $('#store-validation').validate({
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
                    store_name: {
                        required: true,
                        minlength: 3
                    },
                    store_address: {
                        required: true
                    }
                },
                messages: {
                    store_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    store_address: 'Please enter store address.!'
                }
            });
            $('#store-update-validation').validate({
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
                    store_name: {
                        required: true,
                        minlength: 3
                    },
                    store_address: {
                        required: true
                    }
                },
                messages: {
                    store_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    store_address: 'Please enter store address.!'
                }
            });

            $('#supplier-validation').validate({
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
                    new_supplier_name: {
                        required: true,
                        minlength: 3
                    },
                    new_supplier_phone: {
                        required: true
                    }
                },
                messages: {
                    new_supplier_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    new_supplier_phone: 'Please enter phone number.!'
                }
            });
            $('#supplier-update-validation').validate({
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
                    new_supplier_name: {
                        required: true,
                        minlength: 3
                    },
                    new_supplier_phone: {
                        required: true
                    }
                },
                messages: {
                    new_supplier_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    new_supplier_phone: 'Please enter phone number.!'
                }
            });

            $('#product-modal-validation').validate({
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
                    product_name: {
                        required: true,
                        minlength: 3
                    },
                    category_name: {
                        required: true
                    },
                    price: {
                        required: true,
                        range: [1, 999999]
                    },
                    cost_price: {
                        required: true,
                        range: [1, 999999]
                    },
                    sell_price: {
                        required: true,
                        range: [1, 999999]
                    }
                },
                messages: {
                    product_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    },
                    category_name: 'Please select a category.!',
                    price: 'Please enter price.!',
                    cost_price: 'Please enter cost price.!',
                    sell_price: 'Please enter selling price.!'
                },
                submitHandler: function (form) {
                    addProduct();
                }
            });

            $('#role-validation').validate({
                errorClass: 'help-block animation-slideDown',
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    role_name: {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    role_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    }
                }
            });

            $('#role-update-validation').validate({
                errorClass: 'help-block animation-slideDown',
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    role_name: {
                        required: true,
                        minlength: 3
                    }
                },
                messages: {
                    role_name: {
                        required: 'Please enter a name.!',
                        minlength: 'Name must contain at least 3 characters.!'
                    }
                }
            });

            $('#update-password').validate({
                errorClass: 'help-block animation-slideDown',
                errorElement: 'div',
                errorPlacement: function (error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function (e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function (e) {
                    e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                    e.closest('.help-block').remove();
                },
                rules: {
                    user_password: {
                        required: true,
                        minlength: 5
                    },
                    user_confirm_password: {
                        required: true,
                        equalTo: '#user_password'
                    }
                },
                messages: {
                    user_password: {
                        required: 'Please provide a password.!',
                        minlength: 'Your password must be at least 5 characters long.!'
                    },
                    user_confirm_password: {
                        required: 'Please provide a password.!',
                        minlength: 'Your password must be at least 5 characters long.!',
                        equalTo: 'Please enter the same password as above.!'
                    }
                },
                submitHandler: function (form) {
                    updatePassword();
                }
            });
            // Initialize Masked Inputs
            // a - Represents an alpha character (A-Z,a-z)
            // 9 - Represents a numeric character (0-9)
            // * - Represents an alphanumeric character (A-Z,a-z,0-9)
            $('#masked_date').mask('99/99/9999');
            $('#masked_date2').mask('99-99-9999');
            $('#masked_phone').mask('(999) 999-9999');
            $('#masked_phone_ext').mask('(999) 999-9999? x99999');
            $('#masked_taxid').mask('99-9999999');
            $('#masked_ssn').mask('999-99-9999');
            $('#masked_pkey').mask('a*-999-a999');
        }
    };
}();