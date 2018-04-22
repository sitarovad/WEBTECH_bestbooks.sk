$(function () {
  $('[data-toggle="popover"]').popover()
});

$(document).ready(function () {
  $("#chat > h3").click(function () {
    $("#chat > #window").css("display", "block");
  }); 

  $("#toolbar").click(function () {
    $("#chat > #window").css("display", "none");
  });
});
