<?php
// $psw_length = $_GET['psw_length'];

$psw_length = isset($_GET['psw_length']) ? $_GET['psw_length'] : '';
// var_dump('numero', $psw_length);

function generateRandomPassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $randomString;
}

?>