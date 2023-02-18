<?php
session_start();
include 'config/connect.php';

$_POST["sex"] . "-" . $_POST["age"] . "-" . $_POST["q3"] . "-" . $_POST["q3t"] . "-" . $_POST["q4"] . "-" . $_POST["q4_1"] . "-" . $_POST["q4_1t"] . "-" . $_POST["q4_2"] . "-" . $_POST["q4_2t"] . "-" . $_POST["weight"] . "-" . $_POST["height"] . "-" . $_POST["waist"];

$stmt = $coon->prepare(" INSERT INTO `data_all`(`data_id`, `sex`, `age`, `q3`, `q3t`, `q4`, `q4_1`, `q4_1t`, `q4_2`, `q4_2t`, `weight`, `height`, `waist`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `q21`, `date_time`, `code`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24],[value-25],[value-26],[value-27],[value-28],[value-29],[value-30],[value-31]  ");
