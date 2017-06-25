function eliminaAjax(argomento)
{
    var numero_post = argomento;
    $.ajax
    (
            {
                method: "POST",
                url: "includes/delete_post.php",
                data: { IdPost: numero_post }
            }
    )
    .done
    (
        function(msg)
        {
            PostMessage("Post eliminato con successo!");
        }
    );
}

$(function() {

    $('#login-form-link').click(function(e) {
        $("#login-form").delay(100).fadeIn(100);
        $("#register-form").fadeOut(100);
        $('#register-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-form-link').click(function(e) {
        $("#register-form").delay(100).fadeIn(100);
        $("#login-form").fadeOut(100);
        $('#login-form-link').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });

});

function SignMessage(message)
{
    bootbox.alert
    (
        {
            message: message
        }
    );
}

function PostMessage(message)
{
    bootbox.alert
    (
        message, 
        function()
        { 
            window.location.href = "posts.php"; 
        }
    );
}
















    