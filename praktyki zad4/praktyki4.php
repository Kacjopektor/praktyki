<?php
// zadanie 1
function hashowanie($password)
{
    $hashed=hash('sha256', $password);
    return $hashed;
}
// zadanie 2
$my_password = "test";
$hash_password = hashowanie($my_password);
if($hash_password == hashowanie($my_password))
{
    echo "poprawne hasło";
}
else
{
    echo "błędne hasło";
}
?>