<?php
session_start();
if ($_SESSION["id"] == "") {
    // echo "hh" . $_SESSION["id"];
    header("location: admin.php");
    exit();
}
