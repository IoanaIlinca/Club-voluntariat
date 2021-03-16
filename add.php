<?php
    session_start();
    include ("module/modul-conectare.php");
    include ("module/modul-functii.php");
    include ("module/modul-setari.php");
    
    if( !login())
    {
        header("Location: ./");
        die();
    }

    if(!isAdmin(login()))
    {
        header("Location: ./");
        die();
    }
    
    $clean = [
        //valorile primite cu post le punem aici si le escapuim
        'nume' => mysqli_real_escape_string($link, $_POST['nume']),
        'poza' => mysqli_real_escape_string($link, $_POST['poza']),
        'functie' => mysqli_real_escape_string($link, $_POST['functie']),
        'descriere' => mysqli_real_escape_string($link, $_POST['descriere']),
        'facebook' => mysqli_real_escape_string($link, $_POST['facebook'])
    ];
    $query = "insert INTO membri (nume, poza, functie, descriere, facebook) VALUES (
        '{$clean['nume']}',
        '{$clean['poza']}',
        '{$clean['functie']}',
        '{$clean['descriere']}',
        '{$clean['facebook']}'
    )";//acest query il adaptezi in functie de nevoie
    
    mysqli_query($link, $query);
    
    header("Location: ./?pagina=about");
    
    