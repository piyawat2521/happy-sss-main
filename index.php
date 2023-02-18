<?php
$date = date("dmYHis");
$ex = md5($date);
$_SESSION["code"] = $ex;
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
</head>

<body>
    <?php include 'banner/banner.php'; ?>

    <div class="container">
        <div class="col-md-12">

            <div class="indexText">
                <div class="code" style="text-align: right; font-size: 12px;margin-bottom: 1rem;">ID: <?= $_SESSION["code"] ?></div>
                แบบสำรวจแฮปปีโนมิเตอร์: สุขภาวะและความอยู่ดีมีสุข<br>
                HAPPINOMETER: Health & Wellness Survey <br>
                ศูนย์วิจัยความสุขคนทำงานแห่งประเทศไทย <br>
                สถาบันวิจัยประชากรและสังคม มหาวิทยาลัยมหิดล

                <br><br>
                <a class="btn btn-primary" href="page2.php" role="button">เริ่มทำแบบสํารวจความสุข</a>
            </div>

        </div>
    </div>

    <?php include 'title/footer.php'; ?>
</body>

</html>