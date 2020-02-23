$(document).on("click", e => {
    var id = $(e.target).attr("id");
    switch(id){
        case "btn-login":
                $.ajax({
                    type: "POST",
                    data: {
                        username: $("#username-id").val(),
                        pass: $("#pass-id").val()},
                    url: "login_result.php",
                    success: res => {
                        var data = $.parseJSON(res);
                        if(data.hasLoggedIn){
                            // window.location.replace("/testing/index.php");
                            // FOR PRODUCTION
                            window.location.replace("/php/index.php");
                        }else{
                            $(".no-user-alert").css({display:"block"});
                            $(".no-user-alert").text(data.error);
                        }
                    }
                });
            break;
        case "btn-register":
            $.ajax({
                type: "POST",
                data: {
                    email: $("#email-id").val(),
                    username: $("#username-id").val(),
                    pass: $("#pass-id").val()},
                url: "register_result.php",
                success: res => {
                    var data = $.parseJSON(res);
                    if(data.hasRegistered){
                        // window.location.replace("/testing/index.php");

                        // FOR PRODUCTION
                            window.location.replace("/php/index.php");
                    }else{
                        $(".no-user-alert").css({display:"block"});
                        $(".no-user-alert").text(data.error);
                    }
                }
            });
            break;
        case "login-home":
            // window.location.replace("/testing/login.php");
           // FOR PRODUCTION
            window.location.replace("/php/login.php");
            break;
        case "register-home":
            // window.location.replace("/testing/register.php");
            // FOR PRODUCTION
            window.location.replace("/php/register.php");
            break;
        case "logout-home":
            // window.location.replace("/testing/logout.php");
            // FOR PRODUCTION
            window.location.replace("/php/logout.php");
            break;
    }
});
