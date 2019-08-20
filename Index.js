$(window).on('load',function(){
    $("body").removeClass('er');
    $(".load").delay(1000).fadeOut('400');
});
$(document).ready(function(){
    $("#out").click(function(){
        window.location = "?out=true";
    });
    $("#logins").click(function(){
        $.ajax ({
            url : "header.php",
            type : "post",
            datatype : "text",
            data : {
                logins : "y",
                user : $("#user").val(),
                password : $("#password").val() ,
                data : "on"
            },
            success : function(error){
                $("#error").html(error);
            }
        });
    });
    $("#login").click(function(){
    
    $.ajax ({
        url : "header.php",
        type : "post",
        datatype : "text",
        data : {
            login : "x",
            user : $("#user").val(),
            password : $("#password").val()
        },
        success : function(error){
            $("#error").html(error);
        }
    })
        
    });
});