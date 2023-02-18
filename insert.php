<?php
session_start();
include 'config/connect.php';

$dateTimer = date("d/m/") . (date("Y") + 543) . date("-h:i:s");
$sess = 11111;


$stmt = $coon->prepare(" INSERT INTO data_all(data_id, sex, age, q3, q3t, q4, q4_1, q4_1t, q4_2, q4_2t, weights, height, waist, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, date_time, code) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->execute([$_POST["sex"], $_POST["age"], $_POST["q3"], $_POST["q3t"], $_POST["q4"], $_POST["q4_1"], $_POST["q4_1t"], $_POST["q4_2"], $_POST["q4_2t"], $_POST["weight"], $_POST["height"], $_POST["waist"], $_POST["q6"], $_POST["q7"], $_POST["q8"], $_POST["q9"], $_POST["q10"], $_POST["q11"], $_POST["q12"], $_POST["q13"], $_POST["q14"], $_POST["q15"], $_POST["q16"], $_POST["q17"], $_POST["q18"], $_POST["q19"], $_POST["q20"], $_POST["q21"], $dateTimer, $sess]);

// if (empty($stmt)) {
//     echo "No Insert";
// } else {
//     echo "Ok";
// }
