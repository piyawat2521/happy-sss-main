$(document).ready(function () {
  $("#q3t").prop("disabled", true)

  $(".q3_9t").click(function () {
    $("#q3t").prop("disabled", false)
  })
  $(".q3").click(function () {
    $("#q3t").prop("disabled", true)
    $("#q3t").val("")
  })

  $("#q4_1t").prop("disabled", true)
  $(".q4_1t").click(function () {
    $("#q4_1t").prop("disabled", false)
  })
  $(".q4_1").click(function () {
    $("#q4_1t").prop("disabled", true)
    $("#q4_1t").val("")
  })

  $("#q4_2t").prop("disabled", true)
  $(".q4_2t").click(function () {
    $("#q4_2t").prop("disabled", false)
  })
  $(".q4_2").click(function () {
    $("#q4_2t").prop("disabled", true)
    $("#q4_2t").val("")
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
  if ($(".q4:checked").length == "") {
    alert("4. ปัจจุบันท่านมีงานทำหรือไม่")
    $("#q4_1").focus()
    return false
  }
  if ($("#q4_1c").val() == 1 && $("#q4_1c:checked").length != "") {
    if ($(".q4_1:checked").length == "" && $(".q4_1t:checked").length == "") {
      alert("4.1 ปัจจุบันท่านทำงานอยู่ในภาคส่วนใด")
      $("#q4_1_1").focus()
      return false
    }
    if ($(".q4_1t:checked").length != "" && $("#q4_1t").val() == "") {
      alert("อื่น ๆ ระบุ..........")
      $("#q4_1_8").focus()
      return false
    }
  }
  if ($("#q4_2c").val() == 2 && $("#q4_2c:checked").length != "") {
    if ($(".q4_2:checked").length == "" && $(".q4_2t:checked").length == "") {
      alert("4.2 ไม่ได้ทำงาน (ว่างงาน) เหตุผลที่ไม่ได้ทำงาน")
      $("#q4_2_1").focus()
      return false
    }
    if ($(".q4_2t:checked").length != "" && $("#q4_2t").val() == "") {
      alert("อื่น ๆ ระบุ..........")
      $("#q4_2_6").focus()
      return false
    }
    if ($(".q4_2_1:checked").length == "") {
      alert("4.2.1 ท่านว่างงานมานานเท่าไรแล้ว")
      $("#q4_2_1_1").focus()
      return false
    }
  }

  if ($(".weight").val() == "") {
    alert("ท่านมีน้ำหนัก")
    $(".weight").focus()
    return false
  }
  if ($(".height").val() == "") {
    alert("ส่วนสูง")
    $(".height").focus()
    return false
  }
  if ($(".waist").val() == "") {
    alert("เส้นรอบเอว )")
    $(".waist").focus()
    return false
  }

  if ($(".q6:checked").length == "") {
    alert("6. โดยปกติ ท่านกินอาหารรสจัด (หวานจัด เค็มจัด มันจัด)")
    $("#q6_1").focus()
    return false
  }
  if ($(".q7:checked").length == "") {
    alert("7. โดยปกติ ท่านกินผัก หรือ ผลไม้")
    $("#q7_1").focus()
    return false
  }
  if ($(".q8:checked").length == "") {
    alert("8. โดยปกติ ท่านเล่นหวย พนัน ")
    $("#q8_1").focus()
    return false
  }
  if ($(".q9:checked").length == "") {
    alert("9. โดยปกติ ท่านออกกำลังกาย (อย่างน้อย 30 นาที)")
    $("#q9_1").focus()
    return false
  }
  if ($(".q10:checked").length == "") {
    alert("10. โดยปกติ ท่านสูบบุหรี่/ บุหรี่ไฟฟ้า")
    $("#q10_1").focus()
    return false
  }
  if ($(".q11:checked").length == "") {
    alert("11. โดยปกติ ท่านดื่มเครื่องดื่มที่มีแอลกอฮอล์")
    $("#q11_1").focus()
    return false
  }
  if ($(".q12:checked").length == "") {
    alert("12. โดยรวมแล้ว ท่านมีความเครียด")
    $("#q12_1").focus()
    return false
  }
  if ($(".q13:checked").length == "") {
    alert("13. โดยปกติ ท่านมีความปลอดภัยจากการเดินทางบนท้องถนนในเพียงใด")
    $("#q13_1").focus()
    return false
  }
  if ($(".q14:checked").length == "") {
    alert(
      "14. โดยปกติ ท่านได้รับมลพิษจากสิ่งแวดล้อมรอบตัวท่านยในการใช้ชีวิตประจำวัน (เช่น ฝุ่น ควัน กลิ่น เสียง อากาศ ฯลฯ) เพียงใด"
    )
    $("#q14_1").focus()
    return false
  }
  if ($(".q15:checked").length == "") {
    alert("15. โดยรวมแล้ว ท่านมีความสุขกับครอบครัวของท่านหรือไม่")
    $("#q15_1").focus()
    return false
  }
  if ($(".q16:checked").length == "") {
    alert("16. โดยรวมแล้ว ท่านใช้ชีวิตในสังคมอย่างมีความสุขหรือไม่")
    $("#q16_1").focus()
    return false
  }
  if ($(".q17:checked").length == "") {
    alert(
      "17. โดยรวมแล้ว ท่านแสวงหาความรู้ใหม่/ เทคโนโลยีใหม่ ๆ เพิ่มเติมจากแหล่งความรู้เดิมในระดับใด"
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
    alert("19. โดยรวมแล้ว ท่านทำงานอย่างมีความสุขหรือไม่")
    $("#q19_1").focus()
    return false
  }
  if ($(".q20:checked").length == "") {
    alert("20. ในแต่ละวัน ท่านทำงานอย่างมีเป้าหมายหรือไม่")
    $("#q20_1").focus()
    return false
  }
  if ($(".q21:checked").length == "") {
    alert(
      "21. โดยเฉลี่ยใน 1 สัปดาห์ ท่านสามารถจัดการชั่วโมงการทำงานไม่ให้มากหรือน้อยเกินไปเพียงใด"
    )
    $("#q21_1").focus()
    return false
  }
})
