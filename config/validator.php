<?php
//verifier champs vides
function isEmpty($value){
    return empty($value);
}

function isNumeric($value){
    return is_numeric($value);
}

function isString($value){
    return is_string($value);
}


function isMail($value){
    return filter_var($value, FILTER_VALIDATE_EMAIL);
}   

function validate(array $errors):bool{
    return count($errors)==0;
}