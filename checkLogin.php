<?php
session_start();
include 'config/connect.php';

$stmt = $coon->prepare(" SELECT* FROM  admin WHERE ad_user = ? and ad_pass = ? ");
$stmt->execute([$_POST["user"], $_POST["pass"]]);
$num = $stmt->rowCount(PDO::FETCH_ASSOC);

if ($num == 0) {
    header("location: admin.php");
    exit();
} else {
    $r = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION["id"] = $r["ad_id"];
    header("location: adminPage.php");
}
