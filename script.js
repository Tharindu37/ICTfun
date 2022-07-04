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
                if(data=='Login Successfully'){
                    $('#form_response').removeClass('alert-danger');
                    $('#form_response').addClass('alert-success');
                    $('#form_response').text("Login successfully");
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
    $('#last_name_edit').click(function(){
        alert("click");
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
        $('#web_url_edit').click(function(){
            if($('#web_url').prop('disabled')){
                $( "#web_url" ).prop( "disabled", false );
                $('#web_url_save').click(function(){
                    var web_url=$('#web_url').val();
                    $.ajax({
                        url:"update_profile.php",
                        method:"POST",
                        data:{'web_url':web_url},
                        dataType:"text",
                        beforeSend:function(){
                            $( "#web_url" ).prop( "disabled", true );
                        },
                        success:function(data){
                            $( "#web_url" ).prop( "disabled", true );
                            $('#web_url').attr("placeholder",data);
                        },
                        error:function(data){
                            $( "#web_url" ).prop( "disabled", true );
                        }
                    });
                });
            }else{
                $( "#web_url" ).prop( "disabled", true );
            }
        });
        $('#github_url_edit').click(function(){
            if($('#github_url').prop('disabled')){
                $( "#github_url" ).prop( "disabled", false );
                $('#github_url_save').click(function(){
                    var github_url=$('#github_url').val();
                    $.ajax({
                        url:"update_profile.php",
                        method:"POST",
                        data:{'github_url':github_url},
                        dataType:"text",
                        beforeSend:function(){
                            $( "#github_url" ).prop( "disabled", true );
                        },
                        success:function(data){
                            $( "#github_url" ).prop( "disabled", true );
                            $('#github_url').attr("placeholder",data);
                        },
                        error:function(data){
                            $( "#github_url" ).prop( "disabled", true );
                        }
                    });
                });
            }else{
                $( "#github_url" ).prop( "disabled", true );
            }
        });
        $('#twitter_url_edit').click(function(){
            if($('#twitter_url').prop('disabled')){
                $( "#twitter_url" ).prop( "disabled", false );
                $('#twitter_url_save').click(function(){
                    var twitter_url=$('#twitter_url').val();
                    $.ajax({
                        url:"update_profile.php",
                        method:"POST",
                        data:{'twitter_url':twitter_url},
                        dataType:"text",
                        beforeSend:function(){
                            $( "#twitter_url" ).prop( "disabled", true );
                        },
                        success:function(data){
                            $( "#twitter_url" ).prop( "disabled", true );
                            $('#twitter_url').attr("placeholder",data);
                        },
                        error:function(data){
                            $( "#twitter_url" ).prop( "disabled", true );
                        }
                    });
                });
            }else{
                $( "#twitter_url" ).prop( "disabled", true );
            }
        });
        $('#instagram_url_edit').click(function(){
            if($('#instagram_url').prop('disabled')){
                $( "#instagram_url" ).prop( "disabled", false );
                $('#instagram_url_save').click(function(){
                    var instagram_url=$('#instagram_url').val();
                    $.ajax({
                        url:"update_profile.php",
                        method:"POST",
                        data:{'instagram_url':instagram_url},
                        dataType:"text",
                        beforeSend:function(){
                            $( "#instagram_url" ).prop( "disabled", true );
                        },
                        success:function(data){
                            $( "#instagram_url" ).prop( "disabled", true );
                            $('#instagram_url').attr("placeholder",data);
                        },
                        error:function(data){
                            $( "#instagram_url" ).prop( "disabled", true );
                        }
                    });
                });
            }else{
                $( "#instagram_url" ).prop( "disabled", true );
            }
        });
        $('#facebook_url_edit').click(function(){
            if($('#facebook_url').prop('disabled')){
                $( "#facebook_url" ).prop( "disabled", false );
                $('#facebook_url_save').click(function(){
                    var facebook_url=$('#facebook_url').val();
                    $.ajax({
                        url:"update_profile.php",
                        method:"POST",
                        data:{'facebook_url':facebook_url},
                        dataType:"text",
                        beforeSend:function(){
                            $( "#facebook_url" ).prop( "disabled", true );
                        },
                        success:function(data){
                            $( "#facebook_url" ).prop( "disabled", true );
                            $('#facebook_url').attr("placeholder",data);

                        },
                        error:function(data){
                            $( "#facebook_url" ).prop( "disabled", true );
                        }
                    });
                });
            }else{
                $( "#facebook_url" ).prop( "disabled", true );
            }
        });
        $('#profile_pic_url').change(function(){
            $('#pro_pic_submit').trigger("click");    
        });
});

function getCourseId(course_id){
    $.ajax({
        url:"add_my_course.php",
        method:"POST",
        data:{'course_id':course_id},
        dataType:"text",
        beforeSend:function(){},
        success:function(data){
            window.location.replace("http://localhost/findx_project/ICTfun/user/video_form.php?course_id="+data);
        },
         error:function(data){}
    });
}

// function playVideo(video_id){
//     $.ajax({
//         url:"play_video.php",
//         method:"POST",
//         data:{'video_id':video_id},
//         dataType:"json",
//         beforeSend:function(){},
//         success:function(data){
//             var attr=data['video_url'];
//             var iframe = "<iframe id=video_player"+video_id+ attr + "></iframe>";
//             $('#video_player').html(iframe.trim());//this line
//             console.log(iframe);
//             $('#video_title').html(data['video_name']);
//         },
//         error:function(data){}
//     });
// }

// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;
function onYouTubeIframeAPIReady() {
    var course_id=$('#course_id_tag').val();
    console.log("course Id"+course_id);
    console.log("Youtube API Ready");
    
    $.ajax({
        url:"first_video_load.php",
        method:"POST",
        data:{'course_id':course_id},
        dataType:"json",
        beforeSend:function(){},
        success:function(data){
            if(player){
                player.destroy();
            }
            player = new YT.Player('player', {
                height: '390',
                width: '640',
                videoId: data['video_url'],
                playerVars: {
                'playsinline': 1
                },
                events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
                }
            });
            $('#video_title').html(data['video_name']);
        },
        error:function(data){}
    });
}
// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  event.target.playVideo();
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
function onPlayerStateChange(event) {
    //console.log(event.data);
    watched(event.data);
  if (event.data == YT.PlayerState.PLAYING && !done) {
    setTimeout(stopVideo, 6000);
    done = true;
  }
}
function stopVideo() {
  player.stopVideo();
}

var video_id_var;
function playVideo(video_id){
    //console.log("click vidoe id "+video_id);
    video_id_var=video_id;
    $.ajax({
        url:"play_video.php",
        method:"POST",
        data:{'video_id':video_id},
        dataType:"json",
        beforeSend:function(){},
        success:function(data){
            if(player){
                player.destroy();
            }
            player = new YT.Player('player', {
                height: '390',
                width: '640',
                videoId: data['video_url'],
                playerVars: {
                  'playsinline': 1
                },
                events: {
                  'onReady': onPlayerReady,
                  'onStateChange': onPlayerStateChange
                }
            });
            $('#video_title').html(data['video_name']);
        },
        error:function(data){}
    });
}

function watched(data){
    var course_id=$('#course_id_tag').val();
    //var video_id=$('#video_id_tag').val();
    
    if(data==0){
        console.log("video id: "+video_id_var);
        console.log("course id:"+course_id);
        $.ajax({
            url:"add_is_watched.php",
            method:"POST",
            data:{'course_id':course_id,'video_id':video_id_var},
            dataType:"text",
            beforeSend:function(){},
            success:function(data){
                console.log(data);
            },
            error:function(data){}
        });
        
    }
}

//add video
$(document).ready(function(){
    $('#add_video_btn').click(function(){
        var video_title=$('#video_title').val();
        var video_number=$('#video_number').val();
        var video_id=$('#video_id').val();
        var course_id=$('#course_id_tag').val();
        console.log(video_id);
        console.log(video_number);
        console.log(video_title);
        console.log(course_id);
        $.ajax({
            url:"add_video.php",
            method:"POST",
            data:{'video_url':video_id,'video_name':video_title,'vidoe_number':video_number,'course_id':course_id},
            dataType:"text",
            beforeSend:function(){
                $('#add_video_btn').attr('disabled', 'disabled');
            },
            success:function(data){
                $('#form_response').css('display', 'block');
                if(data=="Video Added Successfully"){
                    $('#form_response').removeClass('alert-danger');
                    $('#form_response').addClass('alert-success');
                    $('#form_response').text(data);
                    window.location.replace("http://localhost/findx_project/ICTfun/admin/edit_video_form.php?course_id="+course_id);
                }else{
                    $('#form_response').removeClass('alert-success');
                    $('#form_response').addClass('alert-danger');
                    $('#form_response').text(data);
                }
                $('#add_video_btn').attr('disabled', false);
            },
            error:function(data){

            }
        });
    });
});
//add course notification
function displayRespons(){
    var msg=$('#msg').val();
    if(msg!=""){
        $('#form_response').css('display', 'block');
        if(msg=='Course Added Successfully'){
            $('#form_response').removeClass('alert-danger');
            $('#form_response').addClass('alert-success');
            $('#form_response').text(data);
        }else{
            $('#form_response').removeClass('alert-success');
            $('#form_response').addClass('alert-danger');
            $('#form_response').text(data);
        }
    }
}