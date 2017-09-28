<?php
require_once "config.php";
if (isset($_POST['submit'])) {
    $statement1 = $conn->prepare("INSERT INTO `users` (`name`, `username`, `password`, `email`, `created`) 
          VALUES(:nameOfUser, :username, :password, :email, :created)");
    $statement1->execute(array(
        "nameOfUser" => $_POST['name'],
        "username" => $_POST['username'],
        "password" => $_POST['password'],
        "email" => $_POST['email'],
        "created" => date('Y-m-d')
    ));
    header("Location: delete.php?message=2");
}
?>