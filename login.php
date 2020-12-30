<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css" type="text/css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
                require 'header.php';
                require 'footer.php';
            ?>
        <script>
            function validateForm(){
                var email = document.loginForm.email.value;
                var password = document.loginForm.password.value;
                
                if(email == null || email == ""){
                    alert("Please Enter Email");
                    return false;
                }
                else if(password == null || password == ""){
                    alert("Please Enter Password");
                    return false;
                }
                else if(password.length <6){
                    alert("Password must be 6 characters long");
                    return false;
                }
                else{
                    return true;
                }
            }
        </script>
        <div class="container panel-margin col-xs-4 col-xs-offset-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>LOGIN</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="index.php" name="loginForm" onsubmit="return validateForm()">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <p>Don't have an account? <a href="signup.php">Register Here</a></p>                   
                </div>
            </div>
        </div>
    </body>
</html>