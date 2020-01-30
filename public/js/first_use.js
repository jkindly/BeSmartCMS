$(function () {

    var firstUse = {};

    $('#btn-start').click(function() {
        $('#first-configuration-container').load('templates/first_use/page_name.tpl');
    });

    $('#first-configuration-container').on('click', '#btn-page-name', function() {

        if ( !$('#page-name-input').val() ) {
            $('#page-name-input').addClass('red-border');
            return;
        }
        firstUse['pageName'] = $('#page-name-input').val();
        $('#first-configuration-container').load('templates/first_use/user.tpl');
    });

    $('#first-configuration-container').on('click', '#btn-user', function() {
        var valid = false;
        $('input').each(function() {
            var element = $(this);
            if (!element.val()) {
                $(element).addClass('red-border');
                valid = true;
            } else {
                $(element).removeClass('red-border');
            }
        });
        // if (!isEmail($('#user-email-input').val())) return;

        // if (valid) return;

        firstUse['userFirstName'] = $('#user-first-name-input').val();
        firstUse['userLastName'] = $('#user-last-name-input').val();
        firstUse['userLogin'] = $('#user-login-input').val();
        firstUse['userPassword'] = $('#user-password-input').val();
        firstUse['userPasswordRepeat'] = $('#user-password-repeat-input').val();
        firstUse['userEmail'] = $('#user-email-input').val();
        $('#first-configuration-container').load('templates/first_use/database.tpl');

    });

    $('#first-configuration-container').on('click', '#btn-end', function() {
        const btn = $('#btn-end');
        const message = $('.alert');
        var valid = false;
        $('input').each(function() {
            var element = $(this);
            if (!element.val()) {
                $(element).addClass('red-border');
                valid = true;
            } else {
                $(element).removeClass('red-border');
            }
        });
        firstUse['dbHost'] = $('#db-host-input').val();
        firstUse['dbName'] = $('#db-name-input').val();
        firstUse['dbLogin'] = $('#db-login-input').val();
        firstUse['dbPassword'] = $('#db-password-input').val();

        if (valid) return;

        message.html('');
        btn.removeClass('btn btn-danger');
        btn.addClass('loading');
        btn.prop("disabled", true);

        $.ajax({
            url : "app/ajax/check_database_ajax.php",
            method : 'post',
            //contentType: 'application/json',
            data : {firstUse: JSON.stringify(firstUse)},
            dataType : "json"
        })
        .done(function(res) {
            if (res['status'] == 'success') {
                message.addClass('show alert-success').append(res['message']);
            } else {
                message.addClass('alert-danger show').append(res['message']);
            }
        })
        .fail(function(data) {
            console.log('error ' + data);
        })
        .always(function() {
            btn.removeClass("loading");
            btn.addClass('btn btn-danger');
            btn.prop("disabled", false);
        });
    });

});

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}