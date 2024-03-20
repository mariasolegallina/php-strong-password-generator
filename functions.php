<?php

// funzione per generare password
function psw_generator($len)
{
    $password = '';

    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';
    $chars_len = strlen($chars) - 1;

    for ($i = 0; $i < $len; $i++) {
        $password .= $chars[rand(0, $chars_len)];
    }
    return $password;
};

// recupero la lunghezza della password richiesta
$psw_length = $_GET['psw-length'] ?? false;
$psw_length = intval($psw_length);
// var_dump($psw_length);
