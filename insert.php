<?php
session_start();
include 'config/connect.php';

$dateTimer = date("d/m/") . (date("Y") + 543) . date("-H:i:s");
$sess = 111;
//echo "ll" . $_POST["q3t"];
if (empty($_POST["q3t"])) {
    $q3_t = "";
} else {
    $q3_t = $_POST["q3t"];
}
if (empty($_POST["q4t"])) {
    $q4t = "";
} else {
    $q4t = $_POST["q4t"];
}
if (empty($_POST["q5t"])) {
    $q5t = "";
} else {
    $q5t = $_POST["q5t"];
}


$numData = array("", "0", "25", "50", "75", "100");

$sum1  = ($numData[$_POST["q6"]] + $numData[$_POST["q7"]] + $numData[$_POST["q8"]] + $numData[$_POST["q9"]] + $numData[$_POST["q10"]] + $numData[$_POST["q11"]] + $numData[$_POST["q12"]] + $numData[$_POST["q13"]] + $numData[$_POST["q14"]] + $numData[$_POST["q15"]] + $numData[$_POST["q16"]] + $numData[$_POST["q17"]] + $numData[$_POST["q18"]] + $numData[$_POST["q19"]] + $numData[$_POST["q20"]] + $numData[$_POST["q21"]]) / 16;

$sum = round($sum1);

$textShow0 = " <b>คะแนนเฉลี่ยระหว่าง 0.00 – 24.99</b>  <br> <span style='color:#e16e25'> <b>Very Unhappy</b> </span> <hr>
สะท้อนให้เห็นว่า บุคลากรในองค์กรอยู่ในระดับ <b><u>“ไม่มีความสุขเลย”</u></b>  และ <b><u>“ไม่มีสุขภาวะเลย”</u></b>
ตัวท่านเองและผู้บริหารต้องร่วมมือกัน ดำเนินการพัฒนาสร้างเสริมความสุขอย่างเร่งด่วน
";

$textShow1 = " <b>คะแนนเฉลี่ยระหว่าง 25.00 – 49.99</b> <br> <span style='color:#fdbb17'> <b>Unhappy</b> </span> <hr>
	สะท้อนให้เห็นว่า บุคลากรในองค์กรอยู่ในระดับ <b><u>“ไม่มีความสุข”</u></b>  และ  <b><u>“ไม่มีสุขภาวะ”</u></b>
	ตัวท่านเองและผู้บริหารต้องร่วมมือกัน พัฒนาสร้างเสริมความสุขอย่างจริงจัง

";
$textShow2 = " <b>คะแนนเฉลี่ยระหว่าง 50.00 – 74.99</b> <br> <span style='color:#70b449'> <b>Happy</b> </span> <hr>
	สะท้อนให้เห็นว่า บุคลากรในองค์กรอยู่ในระดับ <b><u>“มีความสุข”</u></b>  และ <b><u>“มีสุขภาวะ”</u></b> 
	ตัวท่านเองและผู้บริหารต้องร่วมมือกัน สร้างเสริมและสนับสนุนให้มีความสุขยิ่งขึ้นต่อไป


";
$textShow3 = " <b>คะแนนเฉลี่ยระหว่าง 75.00 – 100.0</b> <br>  <span style='color:#11914d'> <b>Very Happy</b> </span> <hr>
	สะท้อนให้เห็นว่า บุคลากรในองค์กรอยู่ในระดับ <b><u>“มีความสุขมาก”</u></b>  และ <b><u>“มีสุขภาวะมาก”</u></b> 
ตัวท่านเองและผู้บริหารต้องร่วมมือกัน สร้างเสริมและสนับสนุนให้บุคลากรทุกคนมีความสุขอย่างต่อเนื่องและยั่งยืน รวมทั้งร่วมมือกันสร้างเสริมให้เป็น <b><u>“องค์กรต้นแบบสร้างสุข”</u></b>  เพื่อเป็นแบบอย่าง <b><u>“องค์กรที่มีการปฏิบัติที่เป็นเลิศ (Best Practice)”</u></b>

";
if ($sum >= 0 and $sum <= 24.99) {
    $sumText = $textShow0;
    $textColor = "red";
    $imgShow = "<img src='img/vu.png'> ";
} elseif ($sum >= 25.00 and $sum <= 49.99) {
    $sumText = $textShow1;
    $textColor = "#000";
    $imgShow = "<img src='img/uh.png'> ";
} elseif ($sum >= 50.00 and $sum <= 74.99) {
    $sumText = $textShow2;
    $textColor = "#000";
    $imgShow = "<img src='img/ha.png'> ";
} elseif ($sum >= 75.00 and $sum <= 100) {
    $sumText = $textShow3;
    $textColor = "#000";
    $imgShow = "<img src='img/vh.png'> ";
}
$weight = $_POST["weight"];
$heightN = $_POST["height"] / 100;
$height =  $heightN * $heightN;
/*$bmi = $weight / $height;*/
$weightBmi = $weight / $height;

$wt =  $_POST["waist"] / 0.39370;
$sex = $_POST["sex"];

// $wt =  50 / 0.39370;
// $sex = 1;

if ($sex == 1) {
    $sexTh = "ชาย";
    if ($wt >= 90) {
        $wt_t = "ท่านอยู่ในภาวะอ้วนลงพุง";
    } else {
        $wt_t = "ท่านไม่อยู่ในภาวะอ้วนลงพุง";
    }
} elseif ($sex == 2) {
    $sexTh = "หญิง";

    if ($wt >= 80) {
        $wt_t = "ท่านอยู่ในภาวะอ้วนลงพุง";
    } else {
        $wt_t = "ท่านไม่อยู่ในภาวะอ้วนลงพุง";
    }
} elseif ($sex == 3) {
    $sexTh = "เพศทางเลือก";
    if ($wt >= 90) {
        $wt_sex1 = "ท่านอยู่ในภาวะอ้วนลงพุง(ชาย)";
    } else {
        $wt_sex1 = "ท่านไม่อยู่ในภาวะอ้วนลงพุง(ชาย)";
    }

    if ($wt >= 90) {
        $wt_sex2 = "ท่านอยู่ในภาวะอ้วนลงพุง(หญิง)";
    } else {
        $wt_sex2 = "ท่านไม่อยู่ในภาวะอ้วนลงพุง(หญิง)";
    }
}

$heightBmi = $weightBmi;
$bmi = $heightBmi;


if ($heightBmi < 18.5) {
    $w = "น้ำหนักน้อย";
    $r = "ภาวะเสี่ยงต่อโรค : ต่ำ";
} elseif ($heightBmi >= 18.5 or $heightBmi <= 22.9) {
    $w = "น้ำหนักปกติ";
    $r = "ภาวะเสี่ยงต่อโรค : เท่าคนปกติ";
} elseif ($heightBmi >= 23.0 or $heightBmi <= 24.9) {
    $w = "น้ำหนักปกติ";
    $r = "ภาวะเสี่ยงต่อโรค : มากกว่าปกติ";
} elseif ($heightBmi >= 25.0 or $heightBmi <= 29.9) {
    $w = "โรคอ้วน";
    $r = "ภาวะเสี่ยงต่อโรค : สูง";
} elseif ($heightBmi >= 30.0) {
    $w = "อ้วนมาก";
    $r = "ภาวะเสี่ยงต่อโรค : อยู่ในช่วงอันตราย";
}

if ($bmi >= 0 and $bmi <= 18.4) {
    $bmi_text = " | <strong>น้ำหนัก : </strong>น้ำหนักน้อย | <strong>ภาวะเสี่ยงต่อโรค : </strong>ต่ำ | < 18.5";
} elseif ($bmi >= 18.5 and $bmi <= 22.9) {
    $bmi_text = " | <strong>น้ำหนัก : </strong>น้ำหนักปกติ | <strong>ภาวะเสี่ยงต่อโรค : </strong>เท่าคนปกติ | 18.5-22.9";
} elseif ($bmi >= 23.0 and $bmi <= 24.9) {
    $bmi_text = " | <strong>น้ำหนัก : </strong>น้ำหนักเกิน | <strong>ภาวะเสี่ยงต่อโรค : </strong>มากกว่าปกติ | 23-24.9";
} elseif ($bmi >= 25.0 and $bmi <= 29.9) {
    $bmi_text = " | <strong>น้ำหนัก : </strong>โรคอ้วน | <strong>ภาวะเสี่ยงต่อโรค : </strong>สูง | 25-29.9";
} elseif ($bmi >= 30.0) {
    $bmi_text = " | <strong>น้ำหนัก : </strong>อ้วนมาก | <strong>ภาวะเสี่ยงต่อโรค : </strong>อยู่ในช่วงอันตราย | >= 30";
}

$dataId = 0;

try {
    $stmt = $coon->prepare(" INSERT INTO data_all(data_id,sex, age, q3, q3t, q4, q4t, q5, q5t, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, q16, q17, q18, q19, q20, q21, date_time, code) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->execute([$dataId, $_POST["sex"], $_POST["age"], $_POST["q3"], $q3_t, $_POST["q4"], $q4t, $_POST["q5"], $q5t, $_POST["q6"], $_POST["q7"], $_POST["q8"], $_POST["q9"], $_POST["q10"], $_POST["q11"], $_POST["q12"], $_POST["q13"], $_POST["q14"], $_POST["q15"], $_POST["q16"], $_POST["q17"], $_POST["q18"], $_POST["q19"], $_POST["q20"], $_POST["q21"], $dateTimer, $sess]);

    if (empty($stmt)) {
        echo "No Insert";
    } else {
        echo "Ok";
    }
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php include 'title/title.php'; ?></title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/banner.css">
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php include 'banner/banner.php'; ?>

    <div class="container topHead">
        <div class="col-md-12">
            <div class="headText">
                <h4>เกณฑ์คะแนนเฉลี่ยคุณภาพชีวิตองค์กรแห่งความสุข และ องค์กรสุขภาวะ </h4>
            </div>
            <hr>

            <div class="showimg">
                <?= $imgShow ?>
            </div>
            <!--
            <div class="sumq">
                <div class="sumq">
                    <?= $sum ?>
                </div>
            </div>
-->
            <div class="sumShowText">
                <?= $sumText ?>
            </div>
            <!-- <div class="headText">
                <h4>ค่า BMI ของคุณคือ</h4>
            </div>
            <hr>
            <div class="sumq"><?= round($bmi, 1)  ?></div>
            <div class="sumShowText">
                <hr>
                <?= $bmi_text ?><br>เพศที่ท่านระบุ : <?= $sexTh ?> | เส้นรอบเอวของท่านคือ <?= round($wt)  ?> cm <?= $wt_t ?>
            </div> -->
        </div>

    </div>
    <?php include 'title/footer1.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/checkPage.js"></script>

</body>

</html>