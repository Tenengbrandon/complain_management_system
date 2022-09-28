<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    return header("Location: /users/php/lodgecomplain.php");
}

$data = (object) $_REQUEST;

require_once 'db_connect.php'; 

session_start();

$date = date('Y-m-d H:i:s');
$user_id = $_SESSION['user']['id'];

$region = $_POST['region'];
$phone_num = $_POST['phone_num'];
$gender = $_POST['gender'];
$category = $_POST['category'];
$title = $_POST['title'];
$massage = $_POST['massage'];


$query = $pdo->prepare(
    "INSERT INTO lodgecomplain 
    (region, `phone_num`, gender, `category`, user_id, `title`, massage, date)
    VALUES ('$region', '$phone_num', '$gender', '$category', '$user_id', '$title', '$massage', '$date')
");


$query->bindValue(":region", $data->region);
$query->bindValue(":phone_num", $data->phone_num);
$query->bindValue(":gender", $data->gender);
$query->bindValue(":title", $data->title);
$query->bindValue(":category", $data->category);
$query->bindValue(":massage", $data->massage);
$query->bindValue(":date", $date);
$query->bindValue(":user_id", $user_id);



$query->execute();
// $query->session();

return header("Location: /users/php/lodgecomplain.php");



