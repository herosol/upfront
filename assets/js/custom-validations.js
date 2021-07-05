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

    $('#frmModelSignup').validate({
        errorElement: 'div',
        rules: {
            dp_image: {
                required: true,
            },
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
            phone: {
                required: true
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
            },
            gallery_images: {
                required: true
            },
            bio: {
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

    $('#frmModelProfileSettings').validate({
        errorElement: 'div',
        rules: {
            fname: {
                required: true,
            },
            lname: {
                required: true,
            },
            mem_phone: {
                required: true
            },
            mem_dob: {
                required: true
            },
            mem_sex: {
                required: true
            },
            mem_country: {
                required: true
            },
            mem_state: {
                required: true
            },
            mem_city: {
                required: true
            },
            mem_zip: {
                required: true
            },
            mem_address1: {
                required: true
            },
            mem_about: {
                required: true
            },
            mem_rate: {
                required: true
            },
            skills: {
                required: true
            },
            languages: {
                required: true
            },
            bio: {
                required: true
            },
            eye_color: {
                required: true
            },
            skin_color: {
                required: true
            },
            hair_color: {
                required: true
            },
            hair_length: {
                required: true
            },
            shoe_size: {
                required: true
            },
            height: {
                required: true
            },
            weight: {
                required: true
            },
            chest_bust: {
                required: true
            },
            cup: {
                required: true
            },
            waist: {
                required: true
            },
            hip_inseam: {
                required: true
            },
            ethnicity: {
                required: true
            },
            jacket_size: {
                required: true
            },
            body_type: {
                required: true
            }
        },
        messages: {

        },
        errorPlacement: function(error, element) {}
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

    $('#frmChangeEmail').validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        errorPlacement: function() {
            return false; // suppresses error message text
        }
    });

});