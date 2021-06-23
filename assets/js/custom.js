$(document).ready(function() {
    $(document).on('submit', '.frmAjax', function(e) {
        e.preventDefault();
        var frmbtn = $(this).find("button[type='submit']");
        // var frmIcon = $(this).find("button[type='submit'] i.spinner");
        var frmMsg = $(this).find("div.alertMsg:first");
        var frm = this;

        // frmbtn.attr("disabled", true);
        frmMsg.hide();
        // frmIcon.removeClass("hidden");
        $.ajax({
                url: $(this).attr('action'),
                data: new FormData(frm),
                processData: false,
                contentType: false,
                dataType: 'JSON',
                method: 'POST'
            })
            .done(function(rs) {
                console.log(rs);
                frmMsg.html(rs.msg).slideDown(500);
                if (rs.scroll_to_msg)
                    $('html, body').animate({ scrollTop: frmMsg.offset().top - 300 }, 'slow');
                if ((typeof recaptcha !== 'undefined') && recaptcha)
                    grecaptcha.reset();
                if (rs.status == 1) {
                    setTimeout(function() {
                        if (rs.frm_reset) {
                            frm.reset();
                            if ((typeof recaptcha !== 'undefined') && recaptcha)
                                grecaptcha.reset();
                        }
                        if (rs.hide_msg)
                            frmMsg.slideUp(500);
                        frmIcon.addClass("hidden");
                        if (rs.redirect_url) {
                            window.location.href = rs.redirect_url;
                        } else {
                            frmbtn.attr("disabled", false);
                        }

                    }, 1500);
                } else {
                    setTimeout(function() {
                        if (rs.hide_msg)
                            frmMsg.slideUp(500);
                        frmbtn.attr("disabled", false);
                        frmIcon.addClass("hidden");
                        if (rs.redirect_url)
                            window.location.href = rs.redirect_url;
                    }, 1500);
                }
            })
            .fail(function(rs) {
                console.log(rs);
                // alert('Network error has occurred please try again!');
            })
            .always(function() {
                needToConfirm = false;
            });
    });
});