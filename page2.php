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

            <form action="insert.php" method="post">

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
                            <input class="form-check-input q4" name="q4" type="radio" value="1" id="q4_1">
                            <label class="form-check-label" for="q4_1">
                                1 ภาครัฐ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" name="q4" type="radio" value="2" id="q4_2">
                            <label class="form-check-label" for="q4_2">
                                2 ภาครัฐวิสาหกิจ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" name="q4" type="radio" value="3" id="q4_3">
                            <label class="form-check-label" for="q4_3">
                                3 ภาคเอกชน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" name="q4" type="radio" value="4" id="q4_4">
                            <label class="form-check-label" for="q4_4">
                                4 ภาควิสาหกิจขนาดกลางและขนาดย่อม (SMEs)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" name="q4" type="radio" value="5" id="q4_5">
                            <label class="form-check-label" for="q4_5">
                                5 ภาควิสาหกิจชุมชน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" name="q4" type="radio" value="6" id="q4_6">
                            <label class="form-check-label" for="q4_6">
                                6 ฟรีแลนซ์ (freelance)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" name="q4" type="radio" value="7" id="q4_7">
                            <label class="form-check-label" for="q4_7">
                                7 Start-up
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" name="q4" type="radio" value="8" id="q4_8">
                            <label class="form-check-label" for="q4_8">
                                8 นักเรียน/นักศึกษา
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4" name="q4" type="radio" value="9" id="q4_9">
                            <label class="form-check-label" for="q4_9">
                                9 ไม่ได้ทำงาน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q4_10t" name="q4" type="radio" value="10" id="q4_10">
                            <label class="form-check-label" for="q4_10">
                                10 อื่น ๆ
                                <input type="text" class="form-control q4t" style="width: 350px;" name="q4t" id="q4t" placeholder="ระบุ......... ">
                            </label>
                        </div>
                    </div>
                </div>

                <div class="boxMain">
                    <div class="titleText">5. งานที่ท่านทำเป็นงานลักษณะใด</div>
                    <div class="awText">
                        <div class="form-check">
                            <input class="form-check-input q5" name="q5" type="radio" value="1" id="q5_1">
                            <label class="form-check-label" for="q5_1">
                                1 งานสำนักงาน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" name="q5" type="radio" value="2" id="q5_2">
                            <label class="form-check-label" for="q5_2">
                                2 งานด้านการผลิต
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" name="q5" type="radio" value="3" id="q5_3">
                            <label class="form-check-label" for="q5_3">
                                3 งานด้านบริการ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" name="q5" type="radio" value="4" id="q5_4">
                            <label class="form-check-label" for="q5_4">
                                4 งานด้านบริหาร
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" name="q5" type="radio" value="5" id="q5_5">
                            <label class="form-check-label" for="q5_5">
                                5 งานด้านวิชาการ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" name="q5" type="radio" value="6" id="q5_6">
                            <label class="form-check-label" for="q5_6">
                                6 เจ้าของธุรกิจ/ กิจการ
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" name="q5" type="radio" value="7" id="q5_7">
                            <label class="form-check-label" for="q5_7">
                                7 นักเรียน/นักศึกษา
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5" name="q5" type="radio" value="8" id="q5_8">
                            <label class="form-check-label" for="q5_8">
                                8 ไม่ได้ทำงาน
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input q5_9t" name="q5" type="radio" value="9" id="q5_9">
                            <label class="form-check-label" for="q5_9">
                                9 อื่น ๆ
                                <input type="text" class="form-control q5t" style="width: 350px;" name="q5t" id="q5t" placeholder="ระบุ......... ">
                            </label>
                        </div>
                    </div>
                </div>
        </div>



        <!------วาทำต่อจากต่อจากตรงนี้ 6 - 21------>


        <div class="boxMain">
            <div class="titleText">6. ในชีวิตประจำวันทุกวันนี้ ท่านกินอาหารรสจัด (หวานจัด เค็มจัด มันจัด) โดยเฉลี่ยสัปดาห์ละกี่วัน</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q6" name="q6" type="radio" value="1" id="q6_1">
                    <label class="form-check-label" for="q6_1">
                        1 กินทุกวัน
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q6" name="q6" type="radio" value="2" id="q6_2">
                    <label class="form-check-label" for="q6_2">
                        2 กินเป็นประจำ (5-6 วัน)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q6" name="q6" type="radio" value="3" id="q6_3">
                    <label class="form-check-label" for="q6_3">
                        3 กินเป็นบางครั้ง (3-4 วัน)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q6" name="q6" type="radio" value="4" id="q6_4">
                    <label class="form-check-label" for="q6_4">
                        4 กินแต่ไม่บ่อย (1-2 วัน)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q6" name="q6" type="radio" value="5" id="q6_5">
                    <label class="form-check-label" for="q6_5">
                        5 ไม่กิน
                    </label>
                </div>

            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">7. ในชีวิตประจำวันทุกวันนี้ ท่านกินผัก หรือ ผลไม้ โดยเฉลี่ยสัปดาห์ละกี่วัน</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q7" name="q7" type="radio" value="1" id="q7_1">
                    <label class="form-check-label" for="q7_1">
                        1 กินทุกวัน
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q7" name="q7" type="radio" value="2" id="q7_2">
                    <label class="form-check-label" for="q7_2">
                        2 กินเป็นประจำ (5-6 วัน)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q7" name="q7" type="radio" value="3" id="q7_3">
                    <label class="form-check-label" for="q7_3">
                        3 กินเป็นบางครั้ง (3-4 วัน)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q7" name="q7" type="radio" value="4" id="q7_4">
                    <label class="form-check-label" for="q7_4">
                        4 กินแต่ไม่บ่อย (1-2 วัน)
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q7" name="q7" type="radio" value="5" id="q7_5">
                    <label class="form-check-label" for="q7_5">
                        5 ไม่กิน
                    </label>
                </div>

            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">8. ในชีวิตประจำวันทุกวันนี้ ท่านเล่นหวย พนัน (รวมพนันออนไลน์) เสี่ยงโชค หรือไม่</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q8" name="q8" type="radio" value="1" id="q8_1">
                    <label class="form-check-label" for="q8_1">
                        1 ไม่เคยเล่นเลย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q8" name="q8" type="radio" value="2" id="q8_2">
                    <label class="form-check-label" for="q8_2">
                        2 น้อย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q8" name="q8" type="radio" value="3" id="q8_3">
                    <label class="form-check-label" for="q8_3">
                        3 ปานกลาง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q8" name="q8" type="radio" value="4" id="q8_4">
                    <label class="form-check-label" for="q8_4">
                        4 มาก
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q8" name="q8" type="radio" value="5" id="q8_5">
                    <label class="form-check-label" for="q8_5">
                        5 มากที่สุด
                    </label>
                </div>

            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">9. ในชีวิตประจำวันทุกวันนี้ ท่านออกกำลังกาย (อย่างน้อย 30 นาที) โดยเฉลี่ยสัปดาห์ละกี่วัน</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q9" name="q9" type="radio" value="1" id="q9_1">
                    <label class="form-check-label" for="q9_1">
                        1 ไม่ได้ออกกำลังกาย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q9" name="q9" type="radio" value="2" id="q9_2">
                    <label class="form-check-label" for="q9_2">
                        2 น้อยกว่า 3 วันต่อสัปดาห์
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q9" name="q9" type="radio" value="3" id="q9_3">
                    <label class="form-check-label" for="q9_3">
                        3 จำนวน 3 วันต่อสัปดาห์
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q9" name="q9" type="radio" value="4" id="q9_4">
                    <label class="form-check-label" for="q9_4">
                        4 มากกว่า 3 วันต่อสัปดาห์
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q9" name="q9" type="radio" value="5" id="q9_5">
                    <label class="form-check-label" for="q9_5">
                        5 ทุกวัน
                    </label>
                </div>

            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">10. ในชีวิตประจำวันทุกวันนี้ ท่านสูบบุหรี่/ บุหรี่ไฟฟ้า/ ใบจาก/ ยาเส้น หรือไม่</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q10" name="q10" type="radio" value="1" id="q10_1">
                    <label class="form-check-label" for="q10_1">
                        1 สูบเป็นประจำ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q10" name="q10" type="radio" value="2" id="q10_2">
                    <label class="form-check-label" for="q10_2">
                        2 สูบบ่อยครั้ง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q10" name="q10" type="radio" value="3" id="q10_3">
                    <label class="form-check-label" for="q10_3">
                        3 สูบนานๆ ครั้ง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q10" name="q10" type="radio" value="4" id="q10_4">
                    <label class="form-check-label" for="q10_4">
                        4 ไม่สูบแต่เคยสูบ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q10" name="q10" type="radio" value="5" id="q10_5">
                    <label class="form-check-label" for="q10_5">
                        5 ไม่เคยสูบเลย
                    </label>
                </div>

            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">11. ในชีวิตประจำวันทุกวันนี้ ท่านดื่มเครื่องดื่มที่มีแอลกอฮอล์ เช่น เหล้า เบียร์ ไวน์ สาโท หรือสุราพื้นบ้านหรือไม่</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q11" name="q11" type="radio" value="1" id="q11_1">
                    <label class="form-check-label" for="q11_1">
                        1 ดื่มทุกวัน/เกือบทุกสัปดาห์
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q11" name="q11" type="radio" value="2" id="q11_2">
                    <label class="form-check-label" for="q11_2">
                        2 ดื่มเกือบทุกเดือน
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q11" name="q11" type="radio" value="3" id="q11_3">
                    <label class="form-check-label" for="q11_3">
                        3 ดื่มปีละ 1-2 ครั้ง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q11" name="q11" type="radio" value="4" id="q11_4">
                    <label class="form-check-label" for="q11_4">
                        4 ไม่ดื่มแต่เคยดื่ม
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q11" name="q11" type="radio" value="5" id="q11_5">
                    <label class="form-check-label" for="q11_5">
                        5 ไม่เคยดื่มเลย
                    </label>
                </div>

            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">12. ในชีวิตประจำวันทุกวันนี้ ท่านมีความเครียด (จากการทำงาน/ การเรียน/ ครอบครัว/ เรื่องอื่นๆ) บ้างหรือไม่</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q12" name="q12" type="radio" value="1" id="q12_1">
                    <label class="form-check-label" for="q12_1">
                        1 เครียดมากที่สุด
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q12" name="q12" type="radio" value="2" id="q12_2">
                    <label class="form-check-label" for="q12_2">
                        2 เครียดมาก
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q12" name="q12" type="radio" value="3" id="q12_3">
                    <label class="form-check-label" for="q12_3">
                        3 เครียดปานกลาง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q12" name="q12" type="radio" value="4" id="q12_4">
                    <label class="form-check-label" for="q12_4">
                        4 เครียดน้อย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q12" name="q12" type="radio" value="5" id="q12_5">
                    <label class="form-check-label" for="q12_5">
                        5 ไม่เครียดเลย
                    </label>
                </div>

            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">13. ในชีวิตประจำวันทุกวันนี้ ท่านมีความปลอดภัยจากการเดินทางบนท้องถนนในเพียงใด</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q13" name="q13" type="radio" value="1" id="q13_1">
                    <label class="form-check-label" for="q13_1">
                        1 ไม่มี
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q13" name="q13" type="radio" value="2" id="q13_2">
                    <label class="form-check-label" for="q13_2">
                        2 มีน้อย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q13" name="q13" type="radio" value="3" id="q13_3">
                    <label class="form-check-label" for="q13_3">
                        3 มีปานกลาง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q13" name="q13" type="radio" value="4" id="q13_4">
                    <label class="form-check-label" for="q13_4">
                        4 มีมาก
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q13" name="q13" type="radio" value="5" id="q13_5">
                    <label class="form-check-label" for="q13_5">
                        5 มีมากที่สุด
                    </label>
                </div>
            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">14. ในชีวิตประจำวันทุกวันนี้ ท่านได้รับมลพิษจากสิ่งแวดล้อมรอบตัวท่านในการใช้ชีวิตประจำวัน (เช่น ฝุ่น ควัน กลิ่น เสียง อากาศ ฯลฯ) เพียงใด</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q14" name="q14" type="radio" value="1" id="q14_1">
                    <label class="form-check-label" for="q14_1">
                        1 ไม่ได้รับ
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q14" name="q14" type="radio" value="2" id="q14_2">
                    <label class="form-check-label" for="q14_2">
                        2 ได้รับน้อย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q14" name="q14" type="radio" value="3" id="q14_3">
                    <label class="form-check-label" for="q14_3">
                        3 ได้รับปานกลาง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q14" name="q14" type="radio" value="4" id="q14_4">
                    <label class="form-check-label" for="q14_4">
                        4 ได้รับมาก
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q14" name="q14" type="radio" value="5" id="q14_5">
                    <label class="form-check-label" for="q14_5">
                        5 ได้รับมากที่สุด
                    </label>
                </div>




            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">15. ในชีวิตประจำวันทุกวันนี้ ท่านมีความสุขกับครอบครัวของท่านหรือไม่</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q15" name="q15" type="radio" value="1" id="q15_1">
                    <label class="form-check-label" for="q15_1">
                        1 ไม่มี
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q15" name="q15" type="radio" value="2" id="q15_2">
                    <label class="form-check-label" for="q15_2">
                        2 น้อย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q15" name="q15" type="radio" value="3" id="q15_3">
                    <label class="form-check-label" for="q15_3">
                        3 ปานกลาง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q15" name="q15" type="radio" value="4" id="q15_4">
                    <label class="form-check-label" for="q15_4">
                        4 มาก
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q15" name="q15" type="radio" value="5" id="q15_5">
                    <label class="form-check-label" for="q15_5">
                        5 มากที่สุด
                    </label>
                </div>

            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">16. ในชีวิตประจำวันทุกวันนี้ ท่านใช้ชีวิตในสังคมอย่างมีความสุขหรือไม่</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q16" name="q16" type="radio" value="1" id="q16_1">
                    <label class="form-check-label" for="q16_1">
                        1 ไม่มี
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q16" name="q16" type="radio" value="2" id="q16_2">
                    <label class="form-check-label" for="q16_2">
                        2 น้อย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q16" name="q16" type="radio" value="3" id="q16_3">
                    <label class="form-check-label" for="q16_3">
                        3 ปานกลาง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q16" name="q16" type="radio" value="4" id="q16_4">
                    <label class="form-check-label" for="q16_4">
                        4 มาก
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q16" name="q16" type="radio" value="5" id="q16_5">
                    <label class="form-check-label" for="q16_5">
                        5 มากที่สุด
                    </label>
                </div>

            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">17. ในชีวิตประจำวันทุกวันนี้ ท่านแสวงหาความรู้ใหม่/ เทคโนโลยีใหม่ ๆ เพิ่มเติมจากแหล่งความรู้เดิมในระดับใด</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q17" name="q17" type="radio" value="1" id="q17_1">
                    <label class="form-check-label" for="q17_1">
                        1 ไม่ทำ/ ไม่แสวงหา
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q17" name="q17" type="radio" value="2" id="q17_2">
                    <label class="form-check-label" for="q17_2">
                        2 ทำ/ แสวงหาน้อย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q17" name="q17" type="radio" value="3" id="q17_3">
                    <label class="form-check-label" for="q17_3">
                        3 ทำ/ แสวงหาปานกลาง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q17" name="q17" type="radio" value="4" id="q17_4">
                    <label class="form-check-label" for="q17_4">
                        4 ทำ/ แสวงหาบ่อยครั้ง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q17" name="q17" type="radio" value="5" id="q17_5">
                    <label class="form-check-label" for="q17_5">
                        5 ทำ/ แสวงหาเป็นประจำ
                    </label>
                </div>




            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">18. โดยรวมแล้ว ค่าตอนแทนที่ท่านได้รับทั้งหมดในแต่ละเดือนเป็นอย่างไร เมื่อเปรียบเทียบกับรายจ่ายทั้งหมดในแต่ละเดือน</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q18" name="q18" type="radio" value="1" id="q18_1">
                    <label class="form-check-label" for="q18_1">
                        1 รายจ่ายเกินกว่ารายได้มาก
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q18" name="q18" type="radio" value="2" id="q18_2">
                    <label class="form-check-label" for="q18_2">
                        2 รายจ่ายเกินกว่ารายได้เล็กน้อย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q18" name="q18" type="radio" value="3" id="q18_3">
                    <label class="form-check-label" for="q18_3">
                        3 รายจ่ายพอๆ กับรายได้
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q18" name="q18" type="radio" value="4" id="q18_4">
                    <label class="form-check-label" for="q18_4">
                        4 รายจ่ายน้อยกว่ารายได้
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q18" name="q18" type="radio" value="5" id="q18_5">
                    <label class="form-check-label" for="q18_5">
                        5 รายจ่ายน้อยกว่ารายได้มาก
                    </label>
                </div>


            </div>
        </div>
        <!--- หนูลองใส่คำสั้งขีดเส้นใต้ดู  -->
        <div class="boxMain">
            <div class="titleText">19. ในชีวิตประจำวันทุกวันนี้ ท่านทำงาน/เรียนอย่างมีความสุขหรือไม่</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q19" name="q19" type="radio" value="1" id="q19_1">
                    <label class="form-check-label" for="q19_1">
                        1 ไม่มี/ มีน้อยที่สุด
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q19" name="q19" type="radio" value="2" id="q19_2">
                    <label class="form-check-label" for="q19_2">
                        2 น้อย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q19" name="q19" type="radio" value="3" id="q19_3">
                    <label class="form-check-label" for="q19_3">
                        3 ปานกลาง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q19" name="q19" type="radio" value="4" id="q19_4">
                    <label class="form-check-label" for="q19_4">
                        4 มาก
                    </label>
                </div>
                <!--- หนูลองใส่คำสั้งขีดเส้นใต้ดู  -->
                <div class="form-check">
                    <input class="form-check-input q19" name="q19" type="radio" value="5" id="q19_5">
                    <label class="form-check-label" for="q19_5">
                        5 มากที่สุด
                    </label>
                </div>

            </div>
        </div>




        <div class="boxMain">
            <div class="titleText">20. ในแต่ละวัน ท่านทำงาน/เรียนอย่างมีเป้าหมายหรือไม่</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q20" name="q20" type="radio" value="1" id="q20_1">
                    <label class="form-check-label" for="q20_1">
                        1 ไม่มี
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q20" name="q20" type="radio" value="2" id="q20_2">
                    <label class="form-check-label" for="q20_2">
                        2 น้อย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q20" name="q20" type="radio" value="3" id="q20_3">
                    <label class="form-check-label" for="q20_3">
                        3 ปานกลาง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q20" name="q20" type="radio" value="4" id="q20_4">
                    <label class="form-check-label" for="q20_4">
                        4 มาก
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q20" name="q20" type="radio" value="5" id="q20_5">
                    <label class="form-check-label" for="q20_5">
                        5 มากที่สุด
                    </label>
                </div>



            </div>
        </div>

        <div class="boxMain">
            <div class="titleText">21. โดยเฉลี่ยใน 1 สัปดาห์ ท่านสามารถจัดการชั่วโมงการทำงาน/เรียนไม่ให้มากหรือน้อยเกินไปเพียงใด</div>
            <div class="awText">
                <div class="form-check">
                    <input class="form-check-input q21" name="q21" type="radio" value="1" id="q21_1">
                    <label class="form-check-label" for="q21_1">
                        1 ไม่สามารถจัดการได้
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q21" name="q21" type="radio" value="2" id="q21_2">
                    <label class="form-check-label" for="q21_2">
                        2 น้อย
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q21" name="q21" type="radio" value="3" id="q21_3">
                    <label class="form-check-label" for="q21_3">
                        3 ปานกลาง
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q21" name="q21" type="radio" value="4" id="q21_4">
                    <label class="form-check-label" for="q21_4">
                        4 มาก
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input q21" name="q21" type="radio" value="5" id="q21_5">
                    <label class="form-check-label" for="q21_5">
                        5 มากที่สุด
                    </label>
                </div>

            </div>
        </div>











        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary mb-3 subSent">บันทึกข้อมูล</button>
        </div>




        </form>




    </div>
    </div>
    <div class="" style="margin-bottom: 3rem;"></div>

    <?php include 'title/footer1.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="js/checkPage.js"></script>

</body>

</html>