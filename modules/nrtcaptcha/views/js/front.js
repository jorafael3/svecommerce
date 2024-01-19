$(document).ready(function () {
    if(nrt_captcha_version == 3) {
        grecaptcha.ready(function() {
            grecaptcha.execute(captcha_site_key, {action: "submitMessage"}).then(function(token) {
                $('form').prepend("<input type='hidden' name='g-recaptcha-response' value='" + token + "'>");
            });
        });
    }
    prestashop.on('submitCompleteNrtForm', function (e) {
        if(nrt_captcha_version == 3) {
            grecaptcha.ready(function() {
                grecaptcha.execute(captcha_site_key, {action: "submitMessage"}).then(function(token) {
                    $('form [name=g-recaptcha-response]').val(token);
                });
            });
        } else {
            grecaptcha.ready(function() {
                grecaptcha.reset();
            });
        }
    });
});
