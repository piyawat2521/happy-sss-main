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
  //   if ($(".sex:checked").length == "") {
  //     alert("1.เพศ")
  //     $(".sex").focus()
  //     return false
  //   }
  //   if ($(".age").val() == "") {
  //     alert("2. อายุ")
  //     $(".age").focus()
  //     return false
  //   }
  //   if ($(".q3:checked").length == "" && $(".q3_9t:checked").length == "") {
  //     alert("3. สำเร็จการศึกษาสูงสุดในระดับใด")
  //     $("#q3_1").focus()
  //     return false
  //   }
  //   if ($(".q3_9t:checked").length != "" && $(".q3t").val() == "") {
  //     alert("อื่น ๆ ระบุ..........")
  //     $("#q3_9").focus()
  //     return false
  //   }
  // if ($(".q4:checked").length == "") {
  //   alert("4. ปัจจุบันท่านมีงานทำหรือไม่")
  //   $("#q4_1").focus()
  //   return false
  // }
  // if ($("#q4_1c").val() == 1 && $("#q4_1c:checked").length != "") {
  //   if ($(".q4_1:checked").length == "" && $(".q4_1t:checked").length == "") {
  //     alert("4.1 ปัจจุบันท่านทำงานอยู่ในภาคส่วนใด")
  //     $("#q4_1_1").focus()
  //     return false
  //   }
  //   if ($(".q4_1t:checked").length != "" && $("#q4_1t").val() == "") {
  //     alert("อื่น ๆ ระบุ..........")
  //     $("#q4_1_8").focus()
  //     return false
  //   }
  // }
  // if ($("#q4_2c").val() == 2 && $("#q4_2c:checked").length != "") {
  //   if ($(".q4_2:checked").length == "" && $(".q4_2t:checked").length == "") {
  //     alert("4.2 ไม่ได้ทำงาน (ว่างงาน) เหตุผลที่ไม่ได้ทำงาน")
  //     $("#q4_2_1").focus()
  //     return false
  //   }
  //   if ($(".q4_2t:checked").length != "" && $("#q4_2t").val() == "") {
  //     alert("อื่น ๆ ระบุ..........")
  //     $("#q4_2_6").focus()
  //     return false
  //   }
  //   if ($(".q4_2_1:checked").length == "") {
  //     alert("4.2.1 ท่านว่างงานมานานเท่าไรแล้ว")
  //     $("#q4_2_1_1").focus()
  //     return false
  //   }
  // }
})
