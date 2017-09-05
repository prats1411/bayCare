<?php
$config=array(
    'DB_HOST'=>'localhost:8889',
    'DB_USERNAME'=>'root',
    'DB_PASSWORD'=>'root',
    'DB_DATABASE'=>'baycare'
);
$host=$config['DB_HOST'];
$dbname=$config['DB_DATABASE'];
$conn= new PDO("mysql:host=$host;dbname=$dbname",$config['DB_USERNAME'],$config['DB_PASSWORD']);
?>