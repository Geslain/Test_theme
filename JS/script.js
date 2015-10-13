/**
 * Created by gdahan on 12/10/2015.
 */

$(document).ready(function(){

    $("#li_account a").prepend('<i class="glyphicon glyphicon-user icon-left"></i>' );
    $("#li_logout a").prepend('<i class="glyphicon glyphicon-off icon-left"></i>' );


    $("#block-menu-menu-menu h2").prepend('<i class="glyphicon glyphicon-menu-hamburger icon-left"></i>' );

    $(".close-button").click(function(){
        console.log("go")
        //$("#right_sidebar").css("animation","right_sidebar_animation 1s forwards");
        $("#right_sidebar").toggle("slide",{ direction: 'left' }, 800);
        if($(this).hasClass("btn-danger"))
            $(this).switchClass("btn-danger" , "btn-success").html("Open");
        else
            $(this).switchClass("btn-success" , "btn-danger").html("Close");


    })

})