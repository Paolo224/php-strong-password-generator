<?php

function getRandomPassword($lunghezza)
{
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789.!?,;:#*';
    $counter = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        $counter .= $caratteri[rand(0, strlen($caratteri) - 1)];
    }
    return $counter;
}
