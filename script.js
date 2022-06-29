$(document).ready(function(){
    $('#register_form').on('submit', function(event){
        event.preventDefault();

        $.ajax({
            url:"register.php",
            method:"POST",
            data:$(this).serialize(),
            dataType:"text",
            beforeSend:function(){
                $('#register_btn').attr('disabled', 'disabled');
            },
            success:function(data){
                $('#form_response').css('display', 'block');
                if(data=='Registration Successfully'){
                    $('#form_response').removeClass('alert-danger');
                    $('#form_response').addClass('alert-success');
                    $('#form_response').text(data);
                    window.location.replace("http://localhost/findx_project/ICTfun/user/login_form.php");
                }else{
                    $('#form_response').removeClass('alert-success');
                    $('#form_response').addClass('alert-danger');
                    $('#form_response').text(data);
                }
                $('#register_btn').attr('disabled', false);
            },
            error:function(data){

            }
        });
    });
});

$(document).ready(function(){
    $('#login_btn').click(function(){
        
        var user_email=$('#userEmail').val();
        var user_password=$('#userPassword').val();

        $.ajax({
            url:"login.php",
            method:"POST",
            data:{'email':user_email, 'password':user_password},
            dataType:"text",
            beforeSend:function(){
                $('#login_btn').attr('disabled', 'disabled');
            },
            success:function(data){
                $('#form_response').css('display', 'block');
                if(data=='Login successfully'){
                    $('#form_response').removeClass('alert-danger');
                    $('#form_response').addClass('alert-success');
                    $('#form_response').text(data);
                    window.location.replace("http://localhost/findx_project/ICTfun/user/dashboard_form.php");
                }else{
                    $('#form_response').removeClass('alert-success');
                    $('#form_response').addClass('alert-danger');
                    $('#form_response').text(data);
                }
                $('#login_btn').attr('disabled', false);
            },
            error:function(data){

            }
        });
    });
});