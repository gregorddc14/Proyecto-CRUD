<?php

require_once __DIR__ . '/helpers.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitize($_POST('name'));
    $lastname = sanitize($_POST('lastname'));
    $position = sanitize($_POST('position'));
    $salary = sanitize($_POST('salary'));

    if ( !$name ) {
        $res =['msg' => 'El nombre  es requerido', 'type' => 'danger'];
    } else if (!$lastname) {
        $res =['msg' => 'El Apellido  es requerido', 'type' => 'danger'];
    }else{
        $res = 'Passed';
    }

    echo json_encode($res, JSON_UNESCAPED_UNICODE);


} 

dd($_POST);