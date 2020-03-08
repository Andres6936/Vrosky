$(document).ready(function () {
    // Prevents the default action from being triggered
    $('#contact form').on('submit', function (e) {
        e.preventDefault();

        let $form = $(e.currentTarget);
        let $email = $form.find('#contact-email');
        let $button = $form.find('button[type=submit]');

        if ($email.val().indexOf('@') === -1) {
            vaca = $email.closest('form-group');
            $email.closest('.form-group').addClass('border-danger');
        } else {
            $form.find('.form-group').addClass('border-success').removeClass('border-danger');
            $button.attr('disabled', 'disabled');
            $button.after('<span>Message sent. We will contact you soon.</span>');
        }
    });
});