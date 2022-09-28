<?php

session_start();

// Protecting the page
$method = $_SERVER['REQUEST_METHOD'];

if($method === 'GET'){
    header('location: /login.php');
    exit;
}

// End of protection



// Method was post

$email = $_POST['email'];
$password = $_POST['password'];

// echo $name . $email . $number . $username . $password . $confirm_password;


// requiring connection to the database
require_once './db_connect.php';

$query = $pdo->prepare("SELECT * FROM users WHERE email = :email AND password = :password");


$query->bindValue(':email', $email);
$query->bindValue(':password', md5($password));

$query->execute();

$user = $query->fetch(PDO::FETCH_ASSOC);

if (!$user){
    return header('location: /login.php');
}

$_SESSION['user'] = $user;
header("location: /index.php");