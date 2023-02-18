<?php
$host = "localhost";
$user = "admin_wellness";
$pass = "ipsr5692";
$db = "admin_wellness";


$coon = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$coon->exec("set names utf8");
