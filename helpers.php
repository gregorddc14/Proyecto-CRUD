<?php

function dd( mixed $value) : void
{
    echo '<pre>';
        var_dump($value);
    echo '</pre>';

}

function ddAndDie( mixed $value) : void
{
    die(dd($value));

}

function sanitize (string $data) : string
{
    $data = trim($data);
    $data = stripslashes($datas);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function connection() : PDO
{
    $dns = "mysql:host=localhost;dbname=employee;charset=utf8";
    $user = 'root';
    $pass = ' ';
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
           
    ];

    try {
        $pdo = new PDO($dns, $user, $pass, $options);
    } catch (\PDOException $e) {
        
        echo  'Error connection fail:' $e=>getMessage();

        die();

    }
    return $pdo;

}