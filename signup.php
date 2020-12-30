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
                var fName = document.registerForm.fName.value;
                var lName = document.registerForm.lName.value;
                var email = document.registerForm.email.value;
                var password = document.registerForm.password.value;
                var cPassword = document.registerForm.cPassword.value;
                
                if(fName === null || fName === ""){
                    alert("Please Enter First Name");
                    document.getElementById("fName").focus();
                    return false;
                }
                else if(lName === null || lName === ""){
                    alert("Please Enter Last Name");
                    document.getElementById("lName").focus();
                    return false;
                }
                else if(email === null || email === ""){
                    document.getElementById("email").focus();
                    alert("Please Enter Email");  
                    return false;
                }
                else if(password === null || password === ""){
                    document.getElementById("password").focus();
                    alert("Please Enter Password");
                    return false;
                }
                else if(cPassword === null || cPassword === ""){
                    document.getElementById("cPassword").focus();
                    alert("Please Confirm your Password");
                    return false;
                }
                else if(password !== cPassword){
                    alert("Password and Confirm Password not matched");
                    document.getElementById("password").focus();
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
                    <h3>REGISTER</h3>
                </div>
                <div class="panel-body">
                    <form method="POST" action="index.php" name="registerForm" onsubmit="return validateForm()">
                        <div class="form-group">
                            <input type="text" class="form-control" id="fName" name="fName" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="lName" name="lName" placeholder="Last Name">
                        </div>
                        <div class="form-group">                        
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="cPassword" name="cPassword" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <p>Already have an account? <a href="login.php">Login Here</a></p>                   
                </div>
            </div>
        </div>
    </body>
</html>