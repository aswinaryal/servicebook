$(document).ready(function () {
    $("form").submit(function (event) {
        event.preventDefault();
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password_confirm = $('#password-confirm').val();

        console.log(firstname+lastname+email+password+password_confirm);
    });
});
