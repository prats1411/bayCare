<?php

require_once "config.php";

if(isset($_POST['user_name']))
{
    $name=$_POST['user_name'];

    $checkdata=$conn->prepare(" SELECT `username` FROM users WHERE `username`='$name' ");
    $checkdata->execute();

    if(count($checkdata->fetch()))
    {
        echo "User Name Already Exist";
    }
    else
    {
        echo "OK";
    }
    exit();
}

if(isset($_POST['user_email']))
{
    $emailId=$_POST['user_email'];

    $checkdata1=$conn->prepare(" SELECT `email` FROM users WHERE `username`='$emailId' ");
    $checkdata1->execute();

    if(count($checkdata1->fetch()))
    {
        echo "Email Already Exist";
    }
    else
    {
        echo "OK";
    }
    exit();
}