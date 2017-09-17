<?php

require_once "application_top.php";

$id = $_GET['id'];

$statement = $conn->prepare("DELETE from `users` WHERE `id` = '$id'");
$statement->execute();

header('Location: delete.php?message=1');