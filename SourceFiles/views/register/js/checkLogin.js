/**
 * Created by Jacek on 2016-01-04.
 */
$(document).ready(function(){
    $('.email-registration').keydown(function() {
        if ($('.email-registration').val().length < 3) {
            $('.email-correct').hide();
            $('.wrong-email').show();
        } else {
            // using ajax
            $('.wrong-email').hide();
            $.ajax({
                method: "POST",
                url: "register/checkEmail",
                data: {email: $('#email').val()}
            })
                .done(function() {
                    $('.email-correct').show();
                });

            //$.getJSON('register/checkLogin', {username: $('#username').val()}, function () {
            //    $('.login-correct').show();
            //});
        }
    });

    $('.password-registration').keydown(function() {
        if ($('.password-registration').val().length < 2) {
            $('.correct-passwd').hide();
            $('.wrong-passwd').show();
        } else {
            $('.wrong-passwd').hide();
            $('.correct-passwd').show();
        }
    });

});
