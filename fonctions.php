<?php
session_start();
function GenererToken(){
    $token = uniqid();
    $_SESSION["token"] = $token;

    echo "<input type='hidden' name='token' value='$token'>";
}
function VerifierToken(){
    $token=filter_input(INPUT_POST, 'token');
    if ($token!=$_SESSION["token"])
        die("Token Antiforgery non valide.");
}