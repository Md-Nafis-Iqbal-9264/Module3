<?php

function generatePassword($length) {

    $lowercaseCh = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseCh = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberCh = '0123456789';
    $specialCh = '!@#$%^&*()_+';
    
    $allChars = $lowercaseCh . $uppercaseCh . $numberCh . $specialCh;
    
    $password = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = rand(0, strlen($allChars) - 1);
        $password .= $allChars[$randomIndex];
    }
    
    return $password;
}

$password = generatePassword(12);

echo "Generated Password: {$password}\n";


?>