<?php
session_start();
session_destroy();
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
            <form action="checkLogin.php" method="post">
                <div class="row">
                    <div class="col-md-4"></div>

                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="user" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Password</label>
                            <input type="password" class="form-control" name="pass" id="exampleFormControlInput1">
                        </div>
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>

                    <div class="col-md-4"></div>
                </div>
        </div>
        </form>
    </div>
    <div class="" style="margin-bottom: 15rem;"></div>

    <?php include 'title/footer.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/checkPage.js"></script>

</body>

</html>