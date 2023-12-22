<html>
    <head>
        <title>sign Up And login with My contact Information</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <header>
        <nav>
            <div class="left">Log In</div>
            <div class="left">Contact Us</div>
        </nav>
    </header>
    <body>
        <div class="hero">
            <div class="form-box ">
                <div class="button-box">
                    <div id="btn"></div>
                    <button type="button" class="toggle-btn">Sign Up</button>
                </div>
                <form class="input-group" >
                    <input type="text" class="input-field" placeholder="User Id" required>
                    <input type="email" class="input-field" placeholder="Email Id" required>
                    <input type="text" class="input-field" placeholder="Password" required>
                    <input type="checkbox" class="check-box"><span>I agree to terms and conditions!</span>
                    <button type="submit" class="submit-btn">Sign Up</button>
                </form>
            </div>xam
        </div>
    </body>
</html>

<?php

if(isset($_POST('username')){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection failed due to error");
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']; 
$sql = "INSERT INTO `user'.'info` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password');
";

if($con->query($sql)==true){
    echo "sucessfully inserted";
}
else{
    echo "error";
}

$con->close();
}
?>