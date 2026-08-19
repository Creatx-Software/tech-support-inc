$(document).ready(function(){
        $('#send_message').click(function(e){

            //Stop form submission & check the validation
            e.preventDefault();

            // Variable declaration
            var error = false;
            var name = $('#name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var message = $('#message').val();

            $('#name,#email,#phone,#message').click(function(){
                $(this).removeClass("error_input");
            });

            // Form field validation
            if(name.length == 0){
                var error = true;
                $('#name').addClass("error_input");
            }else{
                $('#name').removeClass("error_input");
            }
            if(email.length == 0 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email').addClass("error_input");
            }else{
                $('#email').removeClass("error_input");
            }
            if(phone.length == 0){
                var error = true;
                $('#phone').addClass("error_input");
            }else{
                $('#phone').removeClass("error_input");
            }
            if(message.length == 0){
                var error = true;
                $('#message').addClass("error_input");
            }else{
                $('#message').removeClass("error_input");
            }

            // If there is no validation error, proceed to submit the form
            if(error == false){
                // Hide any previous error message
                $('#error_message').hide();

                // Disable submit button while the request is in flight
                $('#send_message').attr('disabled', true).val('Sending...');

                $.ajax({
                    url: $('#contact_form').attr('action'),
                    method: 'POST',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: $('#contact_form').serialize(),
                    success: function(result){
                        // Display the success message and stop the user from sending it again
                        $('#success_message').fadeIn(500);
                        $('#send_message').val('Message Sent');
                    },
                    error: function(){
                        // Display the error message
                        $('#error_message').fadeIn(500);
                        // Re-enable the submit button so the user can try again
                        $('#send_message').removeAttr('disabled').val('Send Message');
                    }
                });
            }
        });
    });
