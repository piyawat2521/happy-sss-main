<?php
session_start();
include 'session/ssessionAdmin.php';
include 'config/connect.php';
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
                <h4>Admin</h4>
            </div>
            <hr>
            <?php
            $sepage = $coon->prepare(" SELECT* FROM  data_all ");
            $sepage->execute();
            $r = $sepage->rowCount(PDO::FETCH_ASSOC);
            ?>
            <div class="sumShowText">จำนวนผู้ตอบ : <?= $r ?></div>
            <br>
            <div class="" style="text-align: center;"><a class="btn btn-primary" href="excal.php" target="_blank" role="button">Print</a></div>
        </div>
    </div>
    <div class="" style="margin-bottom: 15rem;"></div>

    <?php include 'title/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/checkPage.js"></script>

</body>

</html>