<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db = "db_wellness_happy";


$coon = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$coon->exec("set names utf8");
