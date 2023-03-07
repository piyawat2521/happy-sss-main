$(document).ready(function () {
  $("#q3t").prop("disabled", true)

  $(".q3_9t").click(function () {
    $("#q3t").prop("disabled", false)
  })
  $(".q3").click(function () {
    $("#q3t").prop("disabled", true)
    $("#q3t").val("")
  })

  $("#q4t").prop("disabled", true)
  $(".q4_10t").click(function () {
    $("#q4t").prop("disabled", false)
  })
  $(".q4").click(function () {
    $("#q4t").prop("disabled", true)
    $("#q4t").val("")
  })

  $("#q5t").prop("disabled", true)
  $(".q5_9t").click(function () {
    $("#q5t").prop("disabled", false)
  })
  $(".q5").click(function () {
    $("#q5t").prop("disabled", true)
    $("#q5t").val("")
  })

  ////////////////////////////////////

  $("#checkQ4_1").css("display", "none")
  $(".ckeckQ4_2").css("display", "none")

  $("#q4_1c").click(function () {
    $("#checkQ4_1").css("display", "block")
    $(".ckeckQ4_2").css("display", "none")
  })
  $("#q4_2c").click(function () {
    $("#checkQ4_1").css("display", "none")
    $(".ckeckQ4_2").css("display", "block")
  })
  ////////////////////////////////////
})

$(".subSent").click(function () {
  if ($(".sex:checked").length == "") {
    alert("1.เพศ")
    $(".sex").focus()
    return false
  }
  if ($(".age").val() == "") {
    alert("2. อายุ")
    $(".age").focus()
    return false
  }
  if ($(".q3:checked").length == "" && $(".q3_9t:checked").length == "") {
    alert("3. สำเร็จการศึกษาสูงสุดในระดับใด")
    $("#q3_1").focus()
    return false
  }
  if ($(".q3_9t:checked").length != "" && $(".q3t").val() == "") {
    alert("อื่น ๆ ระบุ..........")
    $("#q3_9").focus()
    return false
  }

  if ($(".q4:checked").length == "" && $(".q4_10t:checked").length == "") {
    alert("4. ปัจจุบันท่านมีงานทำหรือไม่")
    $("#q4_1").focus()
    return false
  }
  if ($(".q4_10t:checked").length != "" && $(".q4t").val() == "") {
    alert("อื่น ๆ ระบุ..........")
    $("#q4_10").focus()
    return false
  }

  if ($(".q5:checked").length == "" && $(".q5_9t:checked").length == "") {
    alert("5. งานที่ท่านทำเป็นงานลักษณะใด")
    $("#q5_1").focus()
    return false
  }
  if ($(".q5_9t:checked").length != "" && $(".q5t").val() == "") {
    alert("อื่น ๆ ระบุ..........")
    $("#q5_9").focus()
    return false
  }

  if ($(".q6:checked").length == "") {
    alert(
      "6. ในชีวิตประจำวันทุกวันนี้ ท่านกินอาหารรสจัด (หวานจัด เค็มจัด มันจัด) โดยเฉลี่ยสัปดาห์ละกี่วัน"
    )
    $("#q6_1").focus()
    return false
  }
  if ($(".q7:checked").length == "") {
    alert(
      "7. ในชีวิตประจำวันทุกวันนี้ ท่านกินผัก หรือ ผลไม้ โดยเฉลี่ยสัปดาห์ละกี่วัน"
    )
    $("#q7_1").focus()
    return false
  }
  if ($(".q8:checked").length == "") {
    alert(
      "8. ในชีวิตประจำวันทุกวันนี้ ท่านเล่นหวย พนัน (รวมพนันออนไลน์) เสี่ยงโชค หรือไม่"
    )
    $("#q8_1").focus()
    return false
  }
  if ($(".q9:checked").length == "") {
    alert(
      "9. ในชีวิตประจำวันทุกวันนี้ ท่านออกกำลังกาย (อย่างน้อย 30 นาที) โดยเฉลี่ยสัปดาห์ละกี่วัน"
    )
    $("#q9_1").focus()
    return false
  }
  if ($(".q10:checked").length == "") {
    alert(
      "10. ในชีวิตประจำวันทุกวันนี้ ท่านสูบบุหรี่/ บุหรี่ไฟฟ้า/ ใบจาก/ ยาเส้น หรือไม่"
    )
    $("#q10_1").focus()
    return false
  }
  if ($(".q11:checked").length == "") {
    alert(
      "11. ในชีวิตประจำวันทุกวันนี้ ท่านดื่มเครื่องดื่มที่มีแอลกอฮอล์ เช่น เหล้า เบียร์ ไวน์ สาโท หรือสุราพื้นบ้านหรือไม่"
    )
    $("#q11_1").focus()
    return false
  }
  if ($(".q12:checked").length == "") {
    alert(
      "12. ในชีวิตประจำวันทุกวันนี้ ท่านมีความเครียด (จากการทำงาน/ การเรียน/ ครอบครัว/ เรื่องอื่นๆ) บ้างหรือไม่"
    )
    $("#q12_1").focus()
    return false
  }
  if ($(".q13:checked").length == "") {
    alert(
      "13. ในชีวิตประจำวันทุกวันนี้ ท่านมีความปลอดภัยจากการเดินทางบนท้องถนนในเพียงใด"
    )
    $("#q13_1").focus()
    return false
  }
  if ($(".q14:checked").length == "") {
    alert(
      "14. ในชีวิตประจำวันทุกวันนี้ ท่านได้รับมลพิษจากสิ่งแวดล้อมรอบตัวท่านในการใช้ชีวิตประจำวัน (เช่น ฝุ่น ควัน กลิ่น เสียง อากาศ ฯลฯ) เพียงใด"
    )
    $("#q14_1").focus()
    return false
  }
  if ($(".q15:checked").length == "") {
    alert("15. ในชีวิตประจำวันทุกวันนี้ ท่านมีความสุขกับครอบครัวของท่านหรือไม่")
    $("#q15_1").focus()
    return false
  }
  if ($(".q16:checked").length == "") {
    alert(
      "16. ในชีวิตประจำวันทุกวันนี้ ท่านใช้ชีวิตในสังคมอย่างมีความสุขหรือไม่"
    )
    $("#q16_1").focus()
    return false
  }
  if ($(".q17:checked").length == "") {
    alert(
      "17. ในชีวิตประจำวันทุกวันนี้ ท่านแสวงหาความรู้ใหม่/ เทคโนโลยีใหม่ ๆ เพิ่มเติมจากแหล่งความรู้เดิมในระดับใด"
    )
    $("#q17_1").focus()
    return false
  }
  if ($(".q18:checked").length == "") {
    alert(
      "18. โดยรวมแล้ว ค่าตอนแทนที่ท่านได้รับทั้งหมดในแต่ละเดือนเป็นอย่างไร เมื่อเปรียบเทียบกับรายจ่ายทั้งหมดในแต่ละเดือน"
    )
    $("#q18_1").focus()
    return false
  }
  if ($(".q19:checked").length == "") {
    alert("19. ในชีวิตประจำวันทุกวันนี้ ท่านทำงาน/เรียนอย่างมีความสุขหรือไม่")
    $("#q19_1").focus()
    return false
  }
  if ($(".q20:checked").length == "") {
    alert("20. ในแต่ละวัน ท่านทำงาน/เรียนอย่างมีเป้าหมายหรือไม่")
    $("#q20_1").focus()
    return false
  }
  if ($(".q21:checked").length == "") {
    alert(
      "21. โดยเฉลี่ยใน 1 สัปดาห์ ท่านสามารถจัดการชั่วโมงการทำงาน/เรียนไม่ให้มากหรือน้อยเกินไปเพียงใด"
    )
    $("#q21_1").focus()
    return false
  }
})
