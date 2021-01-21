
var random;

function randomNumber() {
  var random1 = Math.floor(Math.random() * 9);
  var random2 = Math.floor(Math.random() * 9);

  random = random1.toString() + random2.toString();
}

$(".btn-spin").click(function () {
    randomNumber();
    $(".value11").removeClass("d-flex");

    $(".img-spin").addClass("spin-animation");

    $(".btn-spin").prop('disabled', true);
    setTimeout(function () {
        $(".value11").addClass("d-flex").text(random);

        $(".img-spin").removeClass("spin-animation");
        $(".btn-spin").prop('disabled', false);
     }, 7000);
    var u_id = $(".u_id").val();
    console.log(u_id);
    console.log(random);
    $.ajax({
      url: "insert.php",
      type: 'post',
      dataType: 'json',
      data: { "u_id": u_id, "number": random },
      success: function (result) {
        console.log(result);
      }
  });
  
});
