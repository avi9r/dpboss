var a;
var random;

function randomNumber() {
  var random1 = Math.floor(Math.random() * 9);
  var random2 = Math.floor(Math.random() * 9);

  random = random1.toString() + random2.toString();
}
$(document).ready(function(){
  $('#spinner-img').trigger('click');
});
var intervalId = window.setInterval(function(){
  /// call your function here
  spin_spin();
  
  
}, 30000);

function spin_spin(){
var u_id = $(".u_id").val();
  $.ajax({
    type: 'POST',
    url: 'ajax_spinner.php',
    dataType: 'json',
    data: {},
    success: function(res) {
      //console.log(res);
      $('.show-result').html('');
      if(res.number != ''){
        $(".value11").removeClass("d-flex");
          $(".img-spin").addClass("spin-animation");
          $(".btn-spin").prop('disabled', true);
          setTimeout(function () {
            $(".value11").addClass("d-flex").text(res.number);
            $(".img-spin").removeClass("spin-animation");
            $(".btn-spin").prop('disabled', false);
          }, 7000);

          let iboxDiv = "";
          //alert("Next spin after "+ res.$time_dif +" or come back at "+res.next_spin ); 
          iboxDiv +=  res.number+" is Lucky Number:";
             $.ajax({
                  url: "insert.php",
                  type: 'POST',
                  dataType: 'json',
                  data: { "u_id": u_id, "type":"spin_res" },
                  success: function (result) {
                      
                    console.log(result);
                    for(var j=0; j<result.data.length; j++){
                      iboxDiv +=  result.data[j];
                    }
                      $('#comment').append(iboxDiv);       
                  },
                  complete: function () {
                    $("#myModal").show();
                  },
                  
              });
             
          $('.comment').append(iboxDiv);
      }else if(res.number == '' && res.next_spin == '' && res.time_gap == '') {
      let iboxDiv = "";
          iboxDiv +=  res.msg ;
             a=iboxDiv;
          $('.comment').append(iboxDiv);
      }else if(res.number == '' && res.next_spin != '' && res.time_gap != '') {
      let iboxDiv = "";
          iboxDiv +=  "Next spin after "+ res.time_gap +" Hr or come back at "+res.next_spin ;
             a=iboxDiv;
          $('.comment').append(iboxDiv);
      }  
      
      }
});
} 
    
$(".btn-spin").click(function () {
    
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
    //console.log(bet_num);
    $.ajax({
      url: "insert.php",
      type: 'POST',
      dataType: 'json',
      data: { "u_id": u_id, "bet_num":bet_num, "price": price, "type":"insert" },
      success: function (result) {
        let mymsg = "";
          //console.log(result);
           console.log(a);
          mymsg +=  result.pop;
            mymsg += a;
          $('#comment').append(mymsg);       
      },
      complete: function () {
        $("#myModal").show();
      },
      
  });


   
    
    
     
    
   
  
});
