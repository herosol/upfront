$(document).ready(function() {
    $.validator.addMethod("pwcheck", function(value, element) {
        /*if (value.length<8) {
            $(element).data('error', "Password must contains atleast 8 character");
            return false;
        }*/
        if (!(/[a-z]/.test(value))) {
            $(element).data('error', "Password must contains atleast 1 small letter");
            return false;
        }
        if (!(/[A-Z]/.test(value))) {
            $(element).data('error', "Password must contains atleast 1 capital letter");
            return false;
        }
        if (!(/\d/.test(value))) {
            $(element).data('error', "Password must contains atleast 1 number");
            return false;
        }
        if (!(/([!,%,&,@,#,$,^,*,?,_,~])/.test(value))) {
            $(element).data('error', "Password must contains atleast 1 special character");
            return false;
        }
        $(element).data('error', "");
        return true;
    }, function(params, element) {
        return $(element).data('error');
    });

    $('#frmLogin').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
            }
        },
        errorPlacement: function() {
            return false; // suppresses error message text
        }
    });

    $('#frmSignup').validate({
        errorElement: 'div',
        rules: {
            fname: {
                required: true,
            },
            lname: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8,
                pwcheck: true,
            },
            cpassword: {
                required: true,
                equalTo: '#password'
            },
            confirm: {
                required: true
            }
        },
        messages: {
            password: {
                required: "Password required!",
                minlength: "Password must be at least 8 characters.",
            },
            cpassword: {
                required: "Confirm password required!",
                equalTo: "Confirm password must be the as the password!"
            }
        },
        errorPlacement: function(error, element) {
            if ($.inArray(element.attr('id'), ['password', 'cpassword']) !== -1 && error.text() != 'This field is required.') {
                error.addClass('alert alert-danger alert-sm')
                error.appendTo(element.parents('form').find("div.alertMsg:first").show());
                $("html, body").animate({ scrollTop: (element.parents('form').find("div.alertMsg:first").offset().top - 300) }, "slow");
            }
            return false;
        }
    });

    $('#frmForgot').validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        errorPlacement: function() {
            return false; // suppresses error message text
        }
    })

    $('#frmReset').validate({
        errorElement: 'div',
        rules: {
            pswd: {
                required: true,
                minlength: 8,
                pwcheck: true
            },
            cpswd: {
                required: true,
                minlength: 8,
                pwcheck: true,
                equalTo: '#pswd'
            }
        },
        messages: {
            pswd: {
                required: "Password required!",
                minlength: "Password must be at least 8 characters.",
            },
            cpswd: {
                required: "Confirm password required!",
                equalTo: "Confirm password must be the same as the password!"
            }
        },
        errorPlacement: function(error, element) {
            if ($.inArray(element.attr('id'), ['password', 'cpassword']) !== -1 && error.text() != 'This field is required.') {
                error.addClass('alert alert-danger alert-sm')
                error.appendTo(element.parents('form').find("div.alertMsg:first").show());
                $("html, body").animate({ scrollTop: (element.parents('form').find("div.alertMsg:first").offset().top - 300) }, "slow");
            }
            return false;
        }
    });
});