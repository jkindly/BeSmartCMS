$(function () {

    var firstUse = {};
    $('#btn-start').click(function() {
        loadWithFade('templates/first_use/page_name.tpl');
    });

    $('#first-configuration-container').on('click', '#btn-page-name', function() {
        var btn = $('#btn-page-name');
        if ( !$('#page-name-input').val() ) {
            btn.prop("disabled", true);
            $('#page-name-input').addClass('red-border').effect('shake', function() {
                btn.prop("disabled", false);
            });
            return;
        }
        firstUse['pageName'] = $('#page-name-input').val();
        loadWithFade('templates/first_use/user.tpl');
    });

    $('#first-configuration-container').on('click', '#btn-user', function() {
        var btn = $('#btn-user');
        var valid = true;
        $('input').each(function() {
            var element = $(this);
            if (!element.val()) {
                $(element).addClass('red-border');
                btn.prop("disabled", true);
                $(element).addClass('red-border').effect('shake', function() {
                    btn.prop("disabled", false);
                });
                valid = false;
            } else {
                $(element).removeClass('red-border');
            }
        });
        // if (!isEmail($('#user-email-input').val())) return;
        // if (!valid) return;

        firstUse['userFirstName'] = $('#user-first-name-input').val();
        firstUse['userLastName'] = $('#user-last-name-input').val();
        firstUse['userLogin'] = $('#user-login-input').val();
        firstUse['userPassword'] = $('#user-password-input').val();
        firstUse['userEmail'] = $('#user-email-input').val();

        loadWithFade('templates/first_use/database.tpl');
    });

    $('#first-configuration-container').on('click', '#btn-end', function() {
        const btn = $('#btn-end');
        const message = $('.alert');
        var valid = true;
        $('input').each(function() {
            var element = $(this);
            if (!element.val()) {
                btn.prop("disabled", true);
                $(element).addClass('red-border').effect('shake', function() {
                    btn.prop("disabled", false);
                });
                valid = false;
            } else {
                $(element).removeClass('red-border');
            }
        });
        firstUse['dbHost'] = $('#db-host-input').val();
        firstUse['dbName'] = $('#db-name-input').val();
        firstUse['dbLogin'] = $('#db-login-input').val();
        firstUse['dbPassword'] = $('#db-password-input').val();

        if (!valid) return;
        message.hide();
        message.html('');
        btn.removeClass('btn btn-danger');
        btn.addClass('loading');
        btn.prop("disabled", true);

        $.ajax({
            url : "app/ajax/first_use/check_database_ajax.php",
            method : 'post',
            data : {firstUse: JSON.stringify(firstUse)},
            dataType : "json"
        })
        .done(function(res) {
            if (res['status'] === 'success') {
                message.append(res['message']).removeClass('alert-danger').addClass('alert-success').show();
                btn.attr('id', 'final-step-btn').html('Zakończ konfigurację');
            } else {
                message.append(res['message']).removeClass('alert-success').addClass('alert-danger').show().effect('shake');
                btn.html('Spróbuj ponownie');
            }
        })
        .fail(function() {
            message.append('Wystąpił niespodziewany błąd.<br> Skontaktuj się z pomocą techniczną.').removeClass('alert-success').addClass('alert-warning').show().effect('shake');
            btn.html('Spróbuj ponownie');
        })
        .always(function() {
            btn.removeClass("loading");
            btn.addClass('btn btn-danger');
            btn.prop("disabled", false);
        });
    });

    $('#first-configuration-container').on('click', '#final-step-btn', function() {
        var btn = $('#final-step-btn');
        const message = $('.alert');
        message.hide();
        message.html('');
        $.ajax({
            url : "app/ajax/first_use/final_step_ajax.php",
            method : 'post',
            data : {firstUse: JSON.stringify(firstUse)},
            dataType : "json"
        })
        .done(function(res) {
            if (res['status'] === 'success') {
                message.append(res['message']).removeClass('alert-danger').addClass('alert-success').show();
                btn.attr('id', 'final-step-btn').html('Zakończ konfigurację');
            } else {
                message.append(res['message']).removeClass('alert-success').addClass('alert-danger').show().effect('shake');
                btn.html('Spróbuj ponownie');
            }
        })
        .fail(function() {
            message.append('Wystąpił niespodziewany błąd.<br> Skontaktuj się z pomocą techniczną.').removeClass('alert-success').addClass('alert-warning').show().effect('shake');
            btn.html('Spróbuj ponownie');
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

function loadWithFade(template) {
    const container = $('#first-configuration-container');
    container.fadeOut('slow', function(){
        container.load(template, function(){
            container.fadeIn('slow');
        });
    });
}