// register page
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

// login page
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


// profile page
$(document).ready(function(){
    $('#first_name_edit').click(function(){
        if($('#first_name').prop('disabled')){
            $( "#first_name" ).prop( "disabled", false );
            $('#first_name_save').click(function(){
                var first_name=$('#first_name').val();
                var last_name=$('#last_name').attr('placeholder');
                $.ajax({
                    url:"update_profile.php",
                    method:"POST",
                    data:{'first_name':first_name},
                    dataType:"text",
                    beforeSend:function(){
                        $( "#first_name" ).prop( "disabled", true );
                    },
                    success:function(data){
                        $( "#first_name" ).prop( "disabled", true );
                        if(data!=""){
                            $('#first_name').attr("placeholder",data);
                            $('#name_status').text("Hi, "+data);
                            $('#profile_name').text(data+" "+last_name);
                        }
                    },
                    error:function(data){
                        $( "#first_name" ).prop( "disabled", true );
                    }
                });
            });
        }else{
            $( "#first_name" ).prop( "disabled", true );
        }
    });
    $('#last_name-edit').click(function(){
        if($('#last_name').prop('disabled')){
            $( "#last_name" ).prop( "disabled", false );
            $('#last_name_save').click(function(){
                var last_name=$('#last_name').val();
                var first_name=$('#first_name').attr('placeholder');
                $.ajax({
                    url:"update_profile.php",
                    method:"POST",
                    data:{'last_name':last_name},
                    dataType:"text",
                    beforeSend:function(){
                        $( "#last_name" ).prop( "disabled", true );
                    },
                    success:function(data){
                        $( "#last_name" ).prop( "disabled", true );
                        if(data!=""){
                            $('#last_name').attr("placeholder",data);
                            $('#profile_name').text(first_name+" "+data);
                        }
                    },
                    error:function(data){
                        $( "#last_name" ).prop( "disabled", true );
                    }
                });
            });
        }else{
            $( "#last_name" ).prop( "disabled", true );
        }
    });
    $('#birthday_edit').click(function(){
        if($('#birthday').prop('disabled')){
            $( "#birthday" ).prop( "disabled", false );
            $('#birthday_save').click(function(){
                var birthday=$('#birthday').val();
                $.ajax({
                    url:"update_profile.php",
                    method:"POST",
                    data:{'birthday':birthday},
                    dataType:"text",
                    beforeSend:function(){
                        $( "#birthday" ).prop( "disabled", true );
                    },
                    success:function(data){
                        $( "#birthday" ).prop( "disabled", true );
                        if(data!=""){
                            $('#birthday').attr("placeholder",data);
                        }
                    },
                    error:function(data){
                        $( "#birthday" ).prop( "disabled", true );
                    }
                });
            });
        }else{
            $( "#birthday" ).prop( "disabled", true );
        }
    });
    $('#mobile_number_edit').click(function(){
        if($('#mobile_number').prop('disabled')){
            $( "#mobile_number" ).prop( "disabled", false );
            $('#mobile_number_save').click(function(){
                var mobile_number=$('#mobile_number').val();
                $.ajax({
                    url:"update_profile.php",
                    method:"POST",
                    data:{'phone_number':mobile_number},
                    dataType:"text",
                    beforeSend:function(){
                        $( "#mobile_number" ).prop( "disabled", true );
                    },
                    success:function(data){
                        $( "#mobile_number" ).prop( "disabled", true );
                        if(data!=""){
                            $('#mobile_number').attr("placeholder",data);
                        }
                    },
                    error:function(data){
                        $( "#mobile_number" ).prop( "disabled", true );
                    }
                });
            });
        }else{
            $( "#mobile_number" ).prop( "disabled", true );
        }
    });
    $('#description_edit').click(function(){
        if($('#description').prop('disabled')){
            $( "#description" ).prop( "disabled", false );
            $('#description_save').click(function(){
                var description=$('#description').val();
                $.ajax({
                    url:"update_profile.php",
                    method:"POST",
                    data:{'description':description},
                    dataType:"text",
                    beforeSend:function(){
                        $( "#description" ).prop( "disabled", true );
                    },
                    success:function(data){
                        $( "#description" ).prop( "disabled", true );
                        if(data!=""){
                            $('#description').attr("placeholder",data);
                            $('#profile_description').text(data);
                        }
                    },
                    error:function(data){
                        $( "#description" ).prop( "disabled", true );
                    }
                });
            });
        }else{
            $( "#description" ).prop( "disabled", true );
        }
    });
    $('#new_password_save').click(function(){
        var old_password=$('#old_password').val();
        var new_password=$('#new_password').val();
            $.ajax({
                url:"update_profile.php",
                method:"POST",
                data:{'old_password':old_password,'new_password':new_password},
                dataType:"text",
                beforeSend:function(){

                },
                success:function(data){
                    $('#form_response').css('display', 'block');
                    if(data=='Password changed'){
                        $('#form_response').removeClass('alert-danger');
                        $('#form_response').addClass('alert-success');
                        $('#form_response').text(data);
                    }else{
                        $('#form_response').removeClass('alert-success');
                        $('#form_response').addClass('alert-danger');
                        $('#form_response').text(data);
                    }
                },
                error:function(data){
                    $( "#mobile_number" ).prop( "disabled", true );
                }
            });
        });
});


