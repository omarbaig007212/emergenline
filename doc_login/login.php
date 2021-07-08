<?php
session_start();
if (isset($_POST["submit"])) {
    include_once 'DBConnect.php';
    
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
    $database = new dbConnect();
    
    $db = $database->openConnection();
    
    $sql = "select * from tbl_registered_users where email = '$email' and password= '$password'";
    $user = $db->query($sql);
    $result = $user->fetchAll(PDO::FETCH_ASSOC);
    
    $id = $result[0]['id'];
    $name = $result[0]['name'];
    $email = $result[0]['email'];
    $_SESSION['name'] = $name;
    $_SESSION['id'] = $id;
    
    $database->closeConnection();
    header('location: dashboard.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap" rel="stylesheet">
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="styles.css">
<style>
*{
    font-family: 'Noto Serif', serif;
}
.demo-content {
    margin: 18px;
    padding: 109px;
    display: inline-block;
    z-index: 1;
}
</style>
<script>
    function loginvalidation(){
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        var valid = true;

        if(email == ""){
        	   valid = false;
            document.getElementById('email_error').innerHTML = "required.";
        }

        if(password == ""){
        	   valid = false;
            document.getElementById('password_error').innerHTML = "required.";
        }
        return valid;
    }
    </script>
</head>
<body>
<div class="bg-img">
    <div class="demo-content">
    <div>
        <h1>Login Here.</h1></div><br><br>
        <form action="" method="POST"
            onsubmit="return loginvalidation();">


            <div class="row">
                <label>Email</label> <span id="email_error"></span>
                <div>
                    <input type="text" name="email" id="email"
                        class="form-control"
                        placeholder="Enter your Email ID" size="30" required>
                </div>
            </div>

            <div class="row">
                <label>Password</label><span id="password_error"></span>
                <div>
                    <input type="Password" name="password" id="password"
                        class="form-control"
                        placeholder="Enter your password">

                </div>
            </div>
            <div class="row">
                <div>
                    <button type="submit" name="submit"
                        class="btn login">Login</button>
                </div>
            </div>
            <div class="row">
                <div>
                    <a href="index.php"><button type="button"
                            name="submit" class="btn signup">Signup</button></a>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>