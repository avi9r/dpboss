
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
    var price = 0;
    for(var i=0; i<100; i++){
      var y = '#selectedNum'+i;
      var x= '#num'+i;
      if($(y).val() != ""){
        bet_num += $(x).val()+', ';
        price = price + parseInt($(y).val());
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
          iboxDiv +=  result.pop 

          $('#comment').append(iboxDiv);       
      }
  });
//   '<div>' +
//   '<h5 id="val" class="show-result">'+ result.pop +'</h5>' +
// '</div>';
   // console.log(res);


   // Get the modal
   var modal = document.getElementById("myModal");
   
   // Get the button that opens the modal
   var btn = document.getElementById("spin");
   
   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("close")[0];
   
   // When the user clicks the button, open the modal 
   btn.onclick = function() {
     modal.style.display = "block";
   }
   
   // When the user clicks on <span> (x), close the modal
   span.onclick = function() {
     modal.style.display = "none";
   }
   
   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function(event) {
     if (event.target == modal) {
       modal.style.display = "none";
     }
   }
   
    
    
     
    
   
  
});
