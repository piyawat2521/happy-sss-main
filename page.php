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
                <h4> <u>คำชี้แจงในการตอบแบบสำรวจ</u> ขอให้ท่านใส่เครื่องหมาย <i class="fa-solid fa-check"></i> ในช่อง <i class="fa-regular fa-square"></i> ทุกข้อที่ท่านเลือก</h4>
            </div>
            <hr>

            <form action="insertData.php" method="post">

                <div class="boxMain">
                    <div class="titleText">1. เพศ</div>
                    <div class="awText">
                        <div class="form-check">
                            <input class="form-check-input sex" name="sex" type="radio" value="1" id="sex1">
                            <label class="form-check-label" for="sex1">
                                1. ชาย
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input sex" name="sex" type="radio" value="2" id="sex2">
                            <label class="form-check-label" for="sex2">
                                2. หญิง
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input sex" name="sex" type="radio" value="3" id="sex3">
                            <label class="form-check-label" for="sex3">
                                3. เพศหลากหลาย
                            </label>
                        </div>
                    </div>
                </div>

                <div class="boxMain">
                    <div class="titleText">2. อายุ</div>
                    <div class="awText">
                        <div class="mb-3">
                            <input type="number" class="form-control age" style="width: 100px;" name="age" min="0" max="99" placeholder=" อายุ.....ปี">
                        </div>
                    </div>
                </div>

                <div class="boxMain">
                    <div class="titleText">3. สำเร็จการศึกษาสูงสุดในระดับใด</div>
                    <div class="awText">
                        <div class="form-check">
                            <input class="form-check-input q3" name="q3" type="radio" value="1" id="q3_1">
                            <label class="form-check-label" for="q3_1">
                                1 ประถมศึกษา
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" name="q3" type="radio" value="2" id="q3_2">
                            <label class="form-check-label" for="q3_2">
                                2 มัธยมศึกษา
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" name="q3" type="radio" value="3" id="q3_3">
                            <label class="form-check-label" for="q3_3">
                                3 ปวช.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" name="q3" type="radio" value="4" id="q3_4">
                            <label class="form-check-label" for="q3_4">
                                4 ปวส.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" name="q3" type="radio" value="5" id="q3_5">
                            <label class="form-check-label" for="q3_5">
                                5 อนุปริญญา
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" name="q3" type="radio" value="6" id="q3_6">
                            <label class="form-check-label" for="q3_6">
                                6 ปริญญาตรีหรือเทียบเท่า
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" name="q3" type="radio" value="7" id="q3_7">
                            <label class="form-check-label" for="q3_7">
                                7 สูงกว่าปริญญาตรี
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3" name="q3" type="radio" value="8" id="q3_8">
                            <label class="form-check-label" for="q3_8">
                                8 ไม่ได้เรียน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q3_9t" name="q3" type="radio" value="9" id="q3_9">
                            <label class="form-check-label" for="q3_9">
                                9 อื่น ๆ
                                <input type="text" class="form-control q3t" style="width: 350px;" name="q3t" id="q3t" placeholder="ระบุ......... ">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="boxMain">
                    <div class="titleText">4. ปัจจุบันท่านมีงานทำหรือไม่</div>
                    <div class="awText">
                        <div class="form-check">
                            <input class="form-check-input q4" name="q4" type="radio" value="1" id="q4_1c">
                            <label class="form-check-label" for="q4_1c">
                                1. มี (ตอบข้อ 4.1)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" name="q4" type="radio" value="2" id="q4_2c">
                            <label class="form-check-label" for="q4_2c">
                                2. ไม่มี (ตอบข้อ 4.2)
                            </label>
                        </div>
                    </div>
                </div>

                <div class="boxMain" id="checkQ4_1">
                    <div class="titleText">4.1 ปัจจุบันท่านทำงานอยู่ในภาคส่วนใด</div>
                    <div class="awText">
                        <div class="form-check">
                            <input class="form-check-input q4_1" name="q4_1" type="radio" value="1" id="q4_1_1">
                            <label class="form-check-label" for="q4_1_1">
                                1 ภาครัฐ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_1" name="q4_1" type="radio" value="2" id="q4_1_2">
                            <label class="form-check-label" for="q4_1_2">
                                2 ภาครัฐวิสาหกิจ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_1" name="q4_1" type="radio" value="4_1" id="q4_1_3">
                            <label class="form-check-label" for="q4_1_3">
                                3 ภาคเอกชน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_1" name="q4_1" type="radio" value="4" id="q4_1_4">
                            <label class="form-check-label" for="q4_1_4">
                                4 ภาควิสาหกิจขนาดกลางและขนาดย่อม (SMEs)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_1" name="q4_1" type="radio" value="5" id="q4_1_5">
                            <label class="form-check-label" for="q4_1_5">
                                5 ภาควิสาหกิจชุมชน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_1" name="q4_1" type="radio" value="6" id="q4_1_6">
                            <label class="form-check-label" for="q4_1_6">
                                6 ฟรีแลนซ์ (freelance)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_1" name="q4_1" type="radio" value="7" id="q4_1_7">
                            <label class="form-check-label" for="q4_1_7">
                                7 Start-up
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_1t" name="q4_1" type="radio" value="8" id="q4_1_8">
                            <label class="form-check-label" for="q4_1_8">
                                8 อื่น ๆ
                                <input type="text" class="form-control" id="q4_1t" style="width: 350px;" name="q4_1t" placeholder="ระบุ......... ">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="boxMain ckeckQ4_2">
                    <div class="titleText">4.2 ไม่ได้ทำงาน (ว่างงาน) เหตุผลที่ไม่ได้ทำงาน
                    </div>
                    <div class="awText">
                        <div class="form-check">
                            <input class="form-check-input q4_2" name="q4_2" type="radio" value="1" id="q4_2_1">
                            <label class="form-check-label" for="q4_2_1">
                                1 เรียนหนังสือ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_2" name="q4_2" type="radio" value="2" id="q4_2_2">
                            <label class="form-check-label" for="q4_2_2">
                                2 เป็นแม่บ้าน/พ่อบ้าน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_2" name="q4_2" type="radio" value="4_1" id="q4_2_3">
                            <label class="form-check-label" for="q4_2_3">
                                3 เกษียณ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_2" name="q4_2" type="radio" value="4" id="q4_2_4">
                            <label class="form-check-label" for="q4_2_4">
                                4 ป่วย/พักรักษาตัว
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_2" name="q4_2" type="radio" value="5" id="q4_2_5">
                            <label class="form-check-label" for="q4_2_5">
                                5 กำลังหางาน/อยู่ระหว่างรอเรียกทำงาน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_2t" name="q4_2" type="radio" value="6" id="q4_2_6">
                            <label class="form-check-label" for="q4_2_6">
                                6 อื่น ๆ
                                <input type="text" class="form-control" id="q4_2t" style="width: 350px;" name="q4_2t" placeholder="ระบุ......... ">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="boxMain ckeckQ4_2">
                    <div class="titleText">4.2.1 ท่านว่างงานมานานเท่าไรแล้ว
                    </div>
                    <div class="awText">
                        <div class="form-check">
                            <input class="form-check-input q4_2_1" name="q4_2_1" type="radio" value="1" id="q4_2_1_1">
                            <label class="form-check-label" for="q4_2_1_1">
                                1 ไม่ถึง 1 เดือน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_2_1" name="q4_2_1" type="radio" value="2" id="q4_2_1_2">
                            <label class="form-check-label" for="q4_2_1_2">
                                2 ระหว่าง 1 – 11 เดือน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_2_1" name="q4_2_1" type="radio" value="4_1" id="q4_2_1_3">
                            <label class="form-check-label" for="q4_2_1_3">
                                3 ระหว่าง 1 – 3 ปี
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_2_1" name="q4_2_1" type="radio" value="4" id="q4_2_1_4">
                            <label class="form-check-label" for="q4_2_1_4">
                                4 ระหว่าง 4 – 6 ปี
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_2_1" name="q4_2_1" type="radio" value="5" id="q4_2_1_5">
                            <label class="form-check-label" for="q4_2_1_5">
                                5 ตั้งแต่ 7 ปี ขึ้นไป
                            </label>
                        </div>
                    </div>
                </div>

                <!------วาทำต่อจากต่อจากตรงนี้ 6 - 21------>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary mb-3 subSent">บันทึกข้อมูล</button>
                </div>




            </form>




        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/checkPage.js"></script>

</body>

</html>