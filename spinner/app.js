
var random;

function randomNumber() {
  var random1 = Math.floor(Math.random() * 9);
  var random2 = Math.floor(Math.random() * 9);

  random = random1.toString() + random2.toString();
}


$(".btn-spin").click(function () {
    // randomNumber();
    // $(".value11").removeClass("d-flex");

    // $(".img-spin").addClass("spin-animation");

    // $(".btn-spin").prop('disabled', true);
    // setTimeout(function () {
    //     $(".value11").addClass("d-flex").text(random);

    //     $(".img-spin").removeClass("spin-animation");
    //     $(".btn-spin").prop('disabled', false);
    //  }, 7000);
    var u_id = $(".u_id").val();
    var bet_num ='';
    var price ='';
    for(var i=0; i<100; i++){
      var y = '#selectedNum'+i;
      var x= '#num'+i;
      if($(y).val() != ""){
        bet_num += $(x).val()+', ';
        price += $(y).val()+', ';
        $(x).removeAttr('value');
        $(y).removeAttr('value');
      }
    }
    console.log(bet_num);
    $.ajax({
      url: "insert.php",
      type: 'POST',
      dataType: 'json',
      data: { "u_id": u_id, "number": 20, "bet_num":bet_num, "price": price },
      success: function (result) {
        let iboxDiv = "";
          console.log(result); 
          iboxDiv += 
          '<div>' +
            '<h5 id="val" class="show-result">'+ result.pop +'</h5>' +
          '</div>';

          $('#comment').append(iboxDiv);       
      }
  });
   // console.log(res);
    
    
    
     
    
   
  
});
