<?php

$passwordGenerator = $_GET['characters'];

function generatePassword(int $length) {

    $passwordLength = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!“£$%&/()=é*§é*§°:';

    $randomPassword = '';

    for ($i = 0; $i < $length; $i++) {

        $randomPassword .= substr($passwordLength, rand(0, (strlen($passwordLength))), 1);

    };

    return $randomPassword;

}