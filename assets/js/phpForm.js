$('document').ready(function () {
    $("#registerForm").validate({
        rules:
        {
            user_name: {
                required: true,
                // minlength: 3
            },
            user_password: {
                required: true,
                // minlength: 8,
                // maxlength: 15
            },
            cpassword: {
                required: true,
                equalTo: '#user_password'
            },
            user_email: {
                required: true,
                email: true
            },
        },
        messages:
        {
            user_name: "please enter user name",
            user_email: "please enter a valid email address",
            user_password: {
                required: "please provide a password",
                // minlength: "password at least have 8 characters"
            },
            cpassword: {
                required: "please retype your password",
                equalTo: "password doesn't match !"
            }
        },
        submitHandler: submitForm
    });
    /* handle form submit */
    function submitForm() {
        var data = $("#registerForm").serialize();
        $.ajax({
            type: 'POST',
            url: './data/register.php',
            data: data,
            beforeSend: function () {
                $("#error").fadeOut();
                $("#signup").html('<span class= "glyphicon glyphicon-transfer" ></span > sending ...');
            },
            success: function (response) {
                if (response == "already_email") {
                    $("#error").fadeIn(1000, function () {
                        $("#error").html("<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Sorry :</strong> email adress already taken!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");           
                        $("#signup").html('<span class= "glyphicon glyphicon-log-in" ></span>Create Account');   
                    })}


               else if (response == "success_account") {
                
                    $("#error").fadeIn(1000, function () {
                        $("#error").html("<div class='alert alert-success alert-dismissible fade show' role='alert'> <strong>Congratulations : </strong> Your account was created!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");           
                        $("#signup").html('<span class= "glyphicon glyphicon-log-in" ></span>Create Account');  
               })}

                else {
                        $("#error").fadeIn(1000, function () {
                        $("#signup").html('<span class="glyphicon glyphicon-log-in" ></span >Create Account');
                        });
                    }
            }
        });
        return false;
    }


    $("#loginForm").validate({
        rules:
        {
            User_password: {
                required: true,
                // minlength: 8,
                // maxlength: 15
            },
            user_email: {
                required: true,
                email: true
            },
        },
        messages:
        {
            user_email: "please enter a valid email address",
            user_password: {
                required: "please provide a password",
            },
        },
        submitHandler: submitlogin
    });
    /* handle form submit */
    function submitlogin() {
        var data = $("#loginForm").serialize();
        $.ajax({
            type: 'POST',
            url: './data/register.php',
            data: data,
            beforeSend: function () {
                $("#error").fadeOut();
                $("#Signup").html('<span class= "glyphicon glyphicon-transfer" ></span > sending ...');
            },
            success: function (response) {
                if (response == "Incorrect!") {
                    $("#error").fadeIn(1000, function () {
                        $("#error").html("<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Sorry :</strong>Incorrect email or password!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");           
                        $("#Signup").html('<span class= "glyphicon glyphicon-log-in" ></span>Sign in');   
                    })}


                if (response == "NotMember!") {
                    $("#error").fadeIn(1000, function () {
                        $("#error").html("<div class='alert alert-danger alert-dismissible fade show' role='alert'> <strong>Sorry :</strong>It's look like you're not yet a member! Click on the bottom link to signup.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");           
                        $("#Signup").html('<span class= "glyphicon glyphicon-log-in" ></span>Sign in');  
               })}

                else {
                        $("#error").fadeIn(1000, function () {
                        $("#Signup").html('<span class="glyphicon glyphicon-log-in" ></span >Sign in');
                        });
                    }
            }
        });
        return false;
    }
});