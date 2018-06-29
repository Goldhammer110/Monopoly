<?php
$username = $_POST["username"];
$passwort = $_POST["passwort"];


if($username == "Test" AND $passwort=="Test")
{
    echo "Herzlich Willkommen";
}
else
{
    echo "Login Fehlgeschlagen";
}


