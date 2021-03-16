<?php
    session_start();
    include ("module/modul-conectare.php");
    include ("module/modul-functii.php");
    include ("module/modul-setari.php");
    
       
    $clean = [
        //valorile primite cu post le punem aici si le escapuim
        'lastname' => mysqli_real_escape_string($link, $_POST['lastname']),
        'firstname' => mysqli_real_escape_string($link, $_POST['firstname']),
        'message' => mysqli_real_escape_string($link, $_POST['message']),
    ];
    $query = "insert INTO messages (lastname, firstname, message, email, date) VALUES (
        '{$clean['lastname']}',
        '{$clean['firstname']}',
        '{$clean['message']}',
        '{$_SESSION["email"]}',
        NOW()
    )";//acest query il adaptezi in functie de nevoie
    
    mysqli_query($link, $query);
    
    header("Location: index.php");