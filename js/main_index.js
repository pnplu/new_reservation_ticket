$(document).ready(function() {
  // $("#btn_ticket_1").click(function() {
  //   $("#btn_ticket_1").css("background-color", "#f15a22");
  //   $("#btn_ticket_2").css("background-color", "#cecece");
  //   $("#btn_ticket_3").css("background-color", "#cecece");
  //   $("#btn_ticket_4").css("background-color", "#cecece");
  //   $("#btn_ticket_1").css("color", "#ffffff");
  //   $("#btn_ticket_2").css("color", "#000000");
  //   $("#btn_ticket_3").css("color", "#000000");
  //   $("#btn_ticket_4").css("color", "#000000");
  // });
  // $("#btn_ticket_2").click(function() {
  //   $("#btn_ticket_1").css("background-color", "#cecece");
  //   $("#btn_ticket_2").css("background-color", "#f15a22");
  //   $("#btn_ticket_3").css("background-color", "#cecece");
  //   $("#btn_ticket_4").css("background-color", "#cecece");
  //   $("#btn_ticket_1").css("color", "#000000");
  //   $("#btn_ticket_2").css("color", "#ffffff");
  //   $("#btn_ticket_3").css("color", "#000000");
  //   $("#btn_ticket_4").css("color", "#000000");
  // });
  // $("#btn_ticket_3").click(function() {
  //   $("#btn_ticket_1").css("background-color", "#cecece");
  //   $("#btn_ticket_2").css("background-color", "#cecece");
  //   $("#btn_ticket_3").css("background-color", "#f15a22");
  //   $("#btn_ticket_4").css("background-color", "#cecece");
  //   $("#btn_ticket_1").css("color", "#000000");
  //   $("#btn_ticket_2").css("color", "#000000");
  //   $("#btn_ticket_3").css("color", "#ffffff");
  //   $("#btn_ticket_4").css("color", "#000000");
  // });
  // $("#btn_ticket_4").click(function() {
  //   $("#btn_ticket_1").css("background-color", "#cecece");
  //   $("#btn_ticket_2").css("background-color", "#cecece");
  //   $("#btn_ticket_3").css("background-color", "#cecece");
  //   $("#btn_ticket_4").css("background-color", "#f15a22");
  //   $("#btn_ticket_1").css("color", "#000000");
  //   $("#btn_ticket_2").css("color", "#000000");
  //   $("#btn_ticket_3").css("color", "#000000");
  //   $("#btn_ticket_4").css("color", "#ffffff");
  // });

  // Reserved
  $("#reserved_seat").click(function() {
    if(!$('input:checkbox', this).is(':checked')) {
      alert("ท่านยังไม่ได้เลือกที่นั่ง");
      return false;
    }
  });
});
