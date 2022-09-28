<?php

session_start();

// Protecting the page
$method = $_SERVER['REQUEST_METHOD'];

if($method === 'GET'){
    header('location: /signup.php');
    exit;
}

// End of protection

$date = date('Y-m-d H:i:s');



// Method was post
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['cpassword']; 

// echo $name . $email . $number . $username . $password . $confirm_password;

// confirming password

if($password !== $confirm_password){
   $_SESSION['massage'] = 'Password do not match';
   header('location: /signup.php');
   exit;
}

// requiring connection to the database
require_once './db_connect.php'; 

$query = $pdo->prepare("INSERT INTO users 
    (name, email, number, username, password, date)  
    VALUES(:name, :email, :number, :username, :password, :date)
");

$query->bindValue(':name', $name);
$query->bindValue(':email', $email);
$query->bindValue(':number', $number);
$query->bindValue(':username', $username);
$query->bindValue(':password', md5($password));
$query->bindValue(':date', $date);

$query->execute();

$_SESSION['massage'] = 'Registration successful';
   header('location: /signup.php');
   exit; 