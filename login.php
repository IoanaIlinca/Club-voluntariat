<?php
    session_start();
    include ("module/modul-conectare.php");
    include ("module/modul-functii.php");
    include ("module/modul-setari.php");
    
    $username = $_POST['username'];
    
    $email = $_POST['email'];
	$password = $_POST['password'];
    
    $con = mysqli_connect('localhost', 'root', '', 'login');

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $email = stripcslashes($email);

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = Parola($_POST['password']);

    mysqli_select_db($con, "login");

    $result = mysqli_query($con, "SELECT * FROM users WHERE username = '{$username}' AND password = '{$password}' AND email = '{$email}'")
            or die("Failed to log in ".mysqli_error($con));
    
    $q="SELECT id FROM users WHERE username='{$username}' AND paassword='{$password}' AND email = '{$email}'";
    $rez=mysqli_query($con,$q);
    
    if(mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_array($result);
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $_SESSION["email"] = $email;
        $_SESSION["id_user"] = $row['id'];
        header("Location: index.php");

    }
    else
    {
        echo "Failed to login!";
    }
?>