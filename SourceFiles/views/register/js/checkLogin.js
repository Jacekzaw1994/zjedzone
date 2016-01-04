/**
 * Created by Jacek on 2016-01-04.
 */
$(document).ready(function(){
    $('.login-registration').keydown(function() {
        if ($('.login-registration').val().length < 3) {
            $('.login-correct').hide();
            $('.wrong-login').show();
        } else {
            // using ajax
            $('.wrong-login').hide();
            $.ajax({
                method: "POST",
                url: "register/checkLogin",
                data: {username: $('#username').val()}
            })
                .done(function() {
                    $('.login-correct').show();
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
