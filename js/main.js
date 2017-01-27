jQuery(document).ready(
    function($) {
        $('#subscriber-form').submit(
            function (e) {
                e.preventDefault();

                // Serialize Form
                var subscriberData = $('#subscriber-form').serialize();

                // Submit Form using Ajax
                $.ajax({
                    type: 'post',
                    url: $('#subscriber-form').attr('action'),
                    data: subscriberData
                }).done(function(response) {
                    // if success
                    $('#form-msg').removeClass('error');
                    $('#form-msg').addClass('success');
                    // set message text
                    $('#form-msg').text(response);
                    // clear fields
                    $('#name').val('');
                    $('#email').val('');

                }).fail(function(data) {

                    // if error
                    $('#form-msg').removeClass('success');
                    $('#form-msg').addClass('error');

                    if(data.responseText !== '') {
                        // set message text
                        $('#form-msg').text(data.responseText);
                    } else {
                        // set message text
                        $('#form-msg').text('Message not sent');
                    }

                });
            }
        );
    }
);