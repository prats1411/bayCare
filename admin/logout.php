<?php

//session_destroy();
//session_abort();
session_start();
$_SESSION['loginUser'] = '';

header('Location: login.php');