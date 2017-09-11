<?php
require_once "config.php";
session_start();

if (!$_SESSION['loginUser']){
    header('Location: login.php');
}