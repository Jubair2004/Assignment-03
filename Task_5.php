<?php
/*Password Generator

Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.
*/
function generatePassword($length) {
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    $pool = $lowercase . $uppercase . $numbers . $specialChars;

    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, strlen($pool) - 1);

        $password .= $pool[$randomIndex];
    }

    return $password;
}

$password = generatePassword(12);

echo $password;

