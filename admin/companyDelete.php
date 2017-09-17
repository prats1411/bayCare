<?php
require_once "application_top.php";

if ($_GET['id']){
    $id = $_GET['id'];
    $statement = $conn->prepare("DELETE from `companies` WHERE `id` = '$id'");
    $statement->execute();
    header('Location: list.php');

} else {
    header('Location: 404.php');
}
?>