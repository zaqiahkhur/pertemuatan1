<?php

$username = "admin";
$password = "1234";
$isAdmin = false;

if($username == "admin" && $password == "1234"){
    if($isAdmin){
        echo "Selamat datang Administrator";
    } else {
        echo "Selamat datang User";
    }
} else {
    echo "Maaf Username dan Password Salah";
}
?>