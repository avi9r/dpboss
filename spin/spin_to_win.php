<?php include('connect.php') ?> 


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>spin to win</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- bootstrap link -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
<style>
/*body {
    background: #9ee1f7;
}*/
body {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;animation: gradient111 15s ease infinite;
    font-family: 'Roboto', sans-serif;
}
* {
  transition: visibility .3s;
}
@keyframes gradient111 {
  0% {background-position: 0% 50%;}
  50% {background-position: 100% 50%;}
  100% {background-position: 0% 50%;}
}
 .container {
    width: 600px;
    margin: 0 auto;
}
 .copy h1 {
    color: #fff;
    text-align: center;
    font-family: 'Source Sans Pro', sans-serif;
    font-size: 60px;
}
 .wrapper {
    margin: 0 0 30px;
    position: relative;
}
 .pointer-wrapper {
    position: absolute;
    top: -25px;
    left: 46%;
    z-index: 1;
}
.wheel {
  position: relative;
  left: 129px;
  width: 320px;
  height: auto;
}
.button {
    margin: 0 0 40px;
}
 .btn{
    display: block;
    cursor: pointer;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    margin: 0 auto;
    width: 250px;
    height: 60px;
    color: #fff;
    background: #e01a22;
}
 .btn:hover {
    background: #f08d90;
}
 .btn:focus {
    outline: 0;
}
.btn-light {
    background: #afa;
}
/**
  Default Markup
**/
.container-radio {
  max-width: 900px;
  margin: 0 auto;
}
/**
  Component
  input
**/
input:checked + div {
  background-color: teal !important;
}
.card-input-element {
    display: none;
}

.card-input {
    /*margin: 10px;*/
    padding: 10px;
    /*height: 20px;*/
    width: 110px;
    height: 64px;
}
.card-input:active {
    background-color: yellow !important; 
}
.card-input:hover {
    cursor: pointer;
}

.card-input-element:checked + .card-input {
     box-shadow: 0 0 1px 1px #2ecc71;
 }
/*popup arrow sign/image*/
.popupSpin {
    -webkit-animation-name: example1111;
    -webkit-animation-duration: .5s;
    animation-name: example1111;
    animation-duration: .5s;
    /*animation-delay: 1s;*/
    animation-iteration-count: 10;
    /*animation-direction: reverse;*/
}
@-webkit-keyframes example {
  0%   {transform: scale(0.9);}
  25%  {transform: scale(1);}
  50%  {transform: scale(1.1);}
  100% {transform: scale(1);}
}
@keyframes example1111 {
  0%   {transform: scale(0.9);}
  25%  {transform: scale(1);}
  50%  {transform: scale(1.1);}
  100% {transform: scale(1);}
}
/*popup arrow sign/image*/
/* .asd {
    position: absolute;
    top: 500px;
    visibility: hidden;
} */
@media(max-width: 500px){
body {
  background: linear-gradient(0deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;animation: gradient111 15s ease infinite;
  width: 100%;
}
@keyframes gradient111 {
  0% {background-position: 0% 50%;}
  50% {background-position: 100% 50%;}
  100% {background-position: 0% 50%;}
}
.btn-light.btn-sm.float-right {left: 140% !important;}
} /*media query end*/
.BtnSpin:hover:disabled{
  background: rgba(200,0,0,.8);
  color: #fff;
}
.entermobno {
  position: relative;
  top: -90px;
  left: 31%;
  background: #333;
  color: #fff;
  visibility: hidden;
  width: 210px;
  padding-left: 6px;
}
.BtnSpin:hover:disabled + div{
  visibility: visible;
  display: block;
}
h2 .fa-arrow-right {
    position: relative;
    top: 2px;
    margin-left: 9px;
    x-transition: all .3s ease-in-out;
  animation: ani .3s infinite;
}
@keyframes ani {
  0% {left: -2px;}
  50% {left: 2px; }
  100% {left: -2px;}
}
h2>span{
    color: #fff;
      text-shadow: 1px 1px 0px #eb452b, 
                  1.5px 1.5px 0px #efa032, 
                  2px 2px 0px #46b59b, 
                  2.5px 2.5px 0px #017e7f, 
                 3px 3px 0px #052939;
}
.lottrynoname h2 {
    border: 3px dotted #affa;
    font-size: 25px;
    padding: 5px 15px;
    font-weight: 850;

  -webkit-transition : border 500ms ease-out;
  -moz-transition : border 500ms ease-out;
  -o-transition : border 500ms ease-out;
  transition : border 500ms ease-out;
  color: #fff;
  text-shadow: 1px 1px 0px #eb452b, 
                  1.5px 1.5px 0px #efa032, 
                  2px 2px 0px #46b59b, 
                  2.5px 2.5px 0px #017e7f, 
                 3px 3px 0px #052939;
  /*text-shadow: 2px 2px 2px #333; */
}
.lottrynoname:hover h2 {
    border : 3px solid #afa; 
}

html {
   margin: 0px;
   height: 100%;
   width: 100%;
}

body {
   margin: 0px;
   min-height: 100%;
   width: 100%;
}
/media queries/
@media only screen and (max-width:768px) {
}
@media only screen and (max-width:500px) {
.container{
    width: 100vw;
    min-width: 100vw;
    max-width: 100vw;
}
.pointer-wrapper{
      top: 0;
    left: 50%;
    transform: translateX(-50%);
}
.wheel{
position: absolute;
    left: 11%;
    top: 40px;
    width: 80%;
    height: auto;
    margin: 0 0;
}
.wrapper{
  height: 350px;
}
#lotrynames111>div{
    padding: 0 5px;
}
#lotrynames111 label{
    width: 100%;

}
#lotrynames111 .card-input{
  font-size: 13px;
      height: 55px;
    width: 100%;
}
.button input.btn.BtnSpin{
      padding: 10px 40px;
    height: auto;
    width: auto;
}
form>input{
  width: 50%!important;
}
.btn-light.btn-sm.float-right {
    margin-right: 50% !important;
    transform: translateX(50%);
    margin-top: -60px !important;
}
}
@media only screen and (max-width:375px) {
form>input {
    width: 60%!important;
}
.wrapper {
    height: 320px;
}
}
@media only screen and (max-width:320px) {
.copy h1{
  font-size: 42px;
}
form>input {
    width: 70%!important;
}
.wrapper {
    height: 270px;
}
#lotrynames111 .card-input {
    padding: 6px 0;
}
}

</style>  
</head>
<body>

<div class="container">
  
  <div class="copy">
        
    <h1>Spin to Win!!</h1>
    <!-- action="connect.php" -->
    <!-- method="POST" -->
<form  class="text-center justify-content-center d-flex" action="spin_to_win.php" method="post">
        <input type="number" id="namee" name="firstname" placeholder=" Enter your mobile no." style="width: 30%;" required="">
  </div>

  

  
<div class="container-radio">
<div id="lotrynames111" class="row mb-2 mt-2">
    <div class="col-3">
        <label>
            <input type="radio" id="r1" name="product" class="card-input-element checkbox111" value="TIME BAZAR" />
            <div class="panel panel-default card-input text-light btn btn-sm aaaa">
                <div class="panel-heading">TIME BAZAR</div>
            </div>
        </label>
    </div>
    <div class="col-3">
        <label>
            <input type="radio" id="r1" name="product" class="card-input-element checkbox111"  value="MILAN DAY"  />
            <div class="panel panel-default card-input text-light btn btn-sm aaaa">
                <div class="panel-heading">MILAN DAY</div>
            </div>
        </label>
    </div>
    <div class="col-3">
        <label>
            <input type="radio" id="r1" name="product" class="card-input-element checkbox111"  value="RAJDHANI DAY"  />
            <div class="panel panel-default card-input text-light btn btn-sm aaaa">
                <div class="panel-heading">RAJDHANI DAY</div>
            </div>
        </label>
    </div>
    <div class="col-3">
        <label>
            <input type="radio" id="r1" name="product" class="card-input-element checkbox111"  value="KALYAN"  />
            <div class="panel panel-default card-input text-light btn btn-sm aaaa">
                <div class="panel-heading">KALYAN</div>
            </div>
        </label>
    </div>
    <div class="col-3">
        <label>
            <input type="radio" id="r1" name="product" class="card-input-element checkbox111"  value="MILAN NIGHT"  />
            <div class="panel panel-default card-input text-light btn btn-sm aaaa">
                <div class="panel-heading">MILAN NIGHT</div>
            </div>
        </label>
    </div>
    <div class="col-3">
        <label>
            <input type="radio" id="r1" name="product" class="card-input-element checkbox111"  value="KALYAN NIGHT"  />
            <div class="panel panel-default card-input text-light btn btn-sm aaaa">
                <div class="panel-heading">KALYAN NIGHT</div>
            </div>
        </label>
    </div>
    <div class="col-3">
        <label>
            <input type="radio" id="r1" name="product" class="card-input-element checkbox111"  value="RAJDHANI NIGHT"  />
            <div class="panel panel-default card-input text-light btn btn-sm aaaa">
                <div class="panel-heading">RAJDHANI NIGHT</div>
            </div>
        </label>
    </div>
    <div class="col-3">
        <label>
            <input type="radio" id="r1" name="product" class="card-input-element"  value="MAIN RATAN"  />
            <div class="panel panel-default card-input text-light btn btn-sm aaaa">
                <div class="panel-heading">MAIN RATAN</div>
            </div>
        </label>
    </div>
    
</div>
  
</div>
    <div class="lottrynoname gradient-border"> 
      <h2>Your lottery is <i class="fas fa-arrow-right"></i><span id="aaa" style="padding-left: 18px;"></span></h2> 
      <h2 style="margin-top: 15px">Your lucky no is <i class="fas fa-arrow-right"></i><span id="luckynois" style="padding-left: 18px;"></span></h2>
</div>


<h2 style="display: none;">hidden lottery name<span id="aaa222"></span></h2>
  <div class="wrapper mt-4">
    <div class="pointer-wrapper">
      <img src="https://register.flybuys.com.au/cdn/edm/library/assets/2017_07/wheel-pointer-v2.png" alt="pointer" class="" id="spinarrow">
    </div>
    <img src="spin.png" alt="spping wheel" class="wheel" style="transform: rotate(17deg);">
  </div>
  <div class="button">
    <input id="" type="submit" name="register" class="btn BtnSpin"><!-- Spin</input> -->
    <div class="entermobno">please enter mobile number and select lottery</div>
  </div>

 

<!-- </form> -->
<button type="submit" name="register" id="reg_btn" class="btn-light btn-sm float-right" style=" left: 70%;margin-top: -30px;margin-right:240px;padding-left: 20px;padding-right: 20px ">SUBMIT</button>
</form>
</div>  
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>



<script>
(function($) {
    var supportedCSS,supportedCSSOrigin, styles=document.getElementsByTagName("head")[0].style,toCheck="transformProperty WebkitTransform OTransform msTransform MozTransform".split(" ");
    for (var a = 0; a < toCheck.length; a++) if (styles[toCheck[a]] !== undefined) { supportedCSS = toCheck[a]; }
    if (supportedCSS) {
      supportedCSSOrigin = supportedCSS.replace(/[tT]ransform/,"TransformOrigin");
      if (supportedCSSOrigin[0] == "T") supportedCSSOrigin[0] = "t";
    }

    // Bad eval to preven google closure to remove it from code o_O
    eval('IE = "v"=="\v"');

    jQuery.fn.extend({
        rotate:function(parameters)
        {
          if (this.length===0||typeof parameters=="undefined") return;
          if (typeof parameters=="number") parameters={angle:parameters};
          var returned=[];
          for (var i=0,i0=this.length;i<i0;i++)
          {
            var element=this.get(i);
            if (!element.Wilq32 || !element.Wilq32.PhotoEffect) {

              var paramClone = $.extend(true, {}, parameters);
              var newRotObject = new Wilq32.PhotoEffect(element,paramClone)._rootObj;

              returned.push($(newRotObject));
            }
            else {
              element.Wilq32.PhotoEffect._handleRotation(parameters);
            }
          }
          return returned;
        },
        getRotateAngle: function(){
          var ret = [0];
          for (var i=0,i0=this.length;i<i0;i++)
          {
            var element=this.get(i);
            if (element.Wilq32 && element.Wilq32.PhotoEffect) {
              ret[i] = element.Wilq32.PhotoEffect._angle;
            }
          }
          return ret;
        },
        stopRotate: function(){
          for (var i=0,i0=this.length;i<i0;i++)
          {
            var element=this.get(i);
            if (element.Wilq32 && element.Wilq32.PhotoEffect) {
              clearTimeout(element.Wilq32.PhotoEffect._timer);
            }
          }
        }
    });

    // Library agnostic interface

    Wilq32=window.Wilq32||{};
    Wilq32.PhotoEffect=(function(){

      if (supportedCSS) {
        return function(img,parameters){
          img.Wilq32 = {
            PhotoEffect: this
          };

          this._img = this._rootObj = this._eventObj = img;
          this._handleRotation(parameters);
        }
      } else {
        return function(img,parameters) {
          this._img = img;
          this._onLoadDelegate = [parameters];

          this._rootObj=document.createElement('span');
          this._rootObj.style.display="inline-block";
          this._rootObj.Wilq32 =
            {
              PhotoEffect: this
            };
          img.parentNode.insertBefore(this._rootObj,img);

          if (img.complete) {
            this._Loader();
          } else {
            var self=this;
            // TODO: Remove jQuery dependency
            jQuery(this._img).bind("load", function(){ self._Loader(); });
          }
        }
      }
    })();

    Wilq32.PhotoEffect.prototype = {
      _setupParameters : function (parameters){
        this._parameters = this._parameters || {};
        if (typeof this._angle !== "number") { this._angle = 0 ; }
        if (typeof parameters.angle==="number") { this._angle = parameters.angle; }
        this._parameters.animateTo = (typeof parameters.animateTo === "number") ? (parameters.animateTo) : (this._angle);

        this._parameters.step = parameters.step || this._parameters.step || null;
        this._parameters.easing = parameters.easing || this._parameters.easing || this._defaultEasing;
        this._parameters.duration = 'duration' in parameters ? parameters.duration : parameters.duration || this._parameters.duration || 1000;
        this._parameters.callback = parameters.callback || this._parameters.callback || this._emptyFunction;
        this._parameters.center = parameters.center || this._parameters.center || ["50%","50%"];
        if (typeof this._parameters.center[0] == "string") {
          this._rotationCenterX = (parseInt(this._parameters.center[0],10) / 100) * this._imgWidth * this._aspectW;
        } else {
          this._rotationCenterX = this._parameters.center[0];
        }
        if (typeof this._parameters.center[1] == "string") {
          this._rotationCenterY = (parseInt(this._parameters.center[1],10) / 100) * this._imgHeight * this._aspectH;
        } else {
          this._rotationCenterY = this._parameters.center[1];
        }

        if (parameters.bind && parameters.bind != this._parameters.bind) { this._BindEvents(parameters.bind); }
      },
      _emptyFunction: function(){},
      _defaultEasing: function (x, t, b, c, d) { return -c * ((t=t/d-1)*t*t*t - 1) + b },
      _handleRotation : function(parameters, dontcheck){
        if (!supportedCSS && !this._img.complete && !dontcheck) {
          this._onLoadDelegate.push(parameters);
          return;
        }
        this._setupParameters(parameters);
        if (this._angle==this._parameters.animateTo) {
          this._rotate(this._angle);
        }
        else {
          this._animateStart();
        }
      },

      _BindEvents:function(events){
        if (events && this._eventObj)
        {
          // Unbinding previous Events
          if (this._parameters.bind){
            var oldEvents = this._parameters.bind;
            for (var a in oldEvents) if (oldEvents.hasOwnProperty(a))
              // TODO: Remove jQuery dependency
              jQuery(this._eventObj).unbind(a,oldEvents[a]);
          }

        this._parameters.bind = events;
        for (var a in events) if (events.hasOwnProperty(a))
          // TODO: Remove jQuery dependency
          jQuery(this._eventObj).bind(a,events[a]);
        }
      },

      _Loader:(function()
      {
        if (IE)
          return function() {
            var width=this._img.width;
            var height=this._img.height;
            this._imgWidth = width;
            this._imgHeight = height;
            this._img.parentNode.removeChild(this._img);

            this._vimage = this.createVMLNode('image');
            this._vimage.src=this._img.src;
            this._vimage.style.height=height+"px";
            this._vimage.style.width=width+"px";
            this._vimage.style.position="absolute"; // FIXES IE PROBLEM - its only rendered if its on absolute position!
            this._vimage.style.top = "0px";
            this._vimage.style.left = "0px";
            this._aspectW = this._aspectH = 1;

            /* Group minifying a small 1px precision problem when rotating object */
            this._container = this.createVMLNode('group');
            this._container.style.width=width;
            this._container.style.height=height;
            this._container.style.position="absolute";
            this._container.style.top="0px";
            this._container.style.left="0px";
            this._container.setAttribute('coordsize',width-1+','+(height-1)); // This -1, -1 trying to fix ugly problem with small displacement on IE
            this._container.appendChild(this._vimage);

            this._rootObj.appendChild(this._container);
            this._rootObj.style.position="relative"; // FIXES IE PROBLEM
            this._rootObj.style.width=width+"px";
            this._rootObj.style.height=height+"px";
            this._rootObj.setAttribute('id',this._img.getAttribute('id'));
            this._rootObj.className=this._img.className;
            this._eventObj = this._rootObj;
            var parameters;
            while (parameters = this._onLoadDelegate.shift()) {
              this._handleRotation(parameters, true);
            }
          }
          else return function () {
            this._rootObj.setAttribute('id',this._img.getAttribute('id'));
            this._rootObj.className=this._img.className;

            this._imgWidth=this._img.naturalWidth;
            this._imgHeight=this._img.naturalHeight;
            var _widthMax=Math.sqrt((this._imgHeight)*(this._imgHeight) + (this._imgWidth) * (this._imgWidth));
            this._width = _widthMax * 3;
            this._height = _widthMax * 3;

            this._aspectW = this._img.offsetWidth/this._img.naturalWidth;
            this._aspectH = this._img.offsetHeight/this._img.naturalHeight;

            this._img.parentNode.removeChild(this._img);


            this._canvas=document.createElement('canvas');
            this._canvas.setAttribute('width',this._width);
            this._canvas.style.position="relative";
            this._canvas.style.left = -this._img.height * this._aspectW + "px";
            this._canvas.style.top = -this._img.width * this._aspectH + "px";
            this._canvas.Wilq32 = this._rootObj.Wilq32;

            this._rootObj.appendChild(this._canvas);
            this._rootObj.style.width=this._img.width*this._aspectW+"px";
            this._rootObj.style.height=this._img.height*this._aspectH+"px";
            this._eventObj = this._canvas;

            this._cnv=this._canvas.getContext('2d');
            var parameters;
            while (parameters = this._onLoadDelegate.shift()) {
              this._handleRotation(parameters, true);
            }
          }
      })(),

      _animateStart:function()
      {
        if (this._timer) {
          clearTimeout(this._timer);
        }
        this._animateStartTime = +new Date;
        this._animateStartAngle = this._angle;
        this._animate();
      },
      _animate:function()
      {
        var actualTime = +new Date;
        var checkEnd = actualTime - this._animateStartTime > this._parameters.duration;

        // TODO: Bug for animatedGif for static rotation ? (to test)
        if (checkEnd && !this._parameters.animatedGif)
        {
          clearTimeout(this._timer);
        }
        else
        {
          if (this._canvas||this._vimage||this._img) {
            var angle = this._parameters.easing(0, actualTime - this._animateStartTime, this._animateStartAngle, this._parameters.animateTo - this._animateStartAngle, this._parameters.duration);
            this._rotate((~~(angle*10))/10);
          }
          if (this._parameters.step) {
            this._parameters.step(this._angle);
          }
          var self = this;
          this._timer = setTimeout(function()
          {
            self._animate.call(self);
          }, 10);
        }

      // To fix Bug that prevents using recursive function in callback I moved this function to back
      if (this._parameters.callback && checkEnd){
        this._angle = this._parameters.animateTo;
        this._rotate(this._angle);
        this._parameters.callback.call(this._rootObj);
      }
      },

      _rotate : (function()
      {
        var rad = Math.PI/180;
        if (IE)
          return function(angle)
        {
          this._angle = angle;
          this._container.style.rotation=(angle%360)+"deg";
          this._vimage.style.top = -(this._rotationCenterY - this._imgHeight/2) + "px";
          this._vimage.style.left = -(this._rotationCenterX - this._imgWidth/2) + "px";
          this._container.style.top = this._rotationCenterY - this._imgHeight/2 + "px";
          this._container.style.left = this._rotationCenterX - this._imgWidth/2 + "px";

        }
          else if (supportedCSS)
          return function(angle){
            this._angle = angle;
            this._img.style[supportedCSS]="rotate("+(angle%360)+"deg)";
            this._img.style[supportedCSSOrigin]=this._parameters.center.join(" ");
          }
          else
            return function(angle)
          {
            this._angle = angle;
            angle=(angle%360)* rad;
            // clear canvas
            this._canvas.width = this._width;//+this._widthAdd;
            this._canvas.height = this._height;//+this._heightAdd;

            // REMEMBER: all drawings are read from backwards.. so first function is translate, then rotate, then translate, translate..
            this._cnv.translate(this._imgWidth*this._aspectW,this._imgHeight*this._aspectH);  // at least center image on screen
            this._cnv.translate(this._rotationCenterX,this._rotationCenterY);     // we move image back to its orginal
            this._cnv.rotate(angle);                    // rotate image
            this._cnv.translate(-this._rotationCenterX,-this._rotationCenterY);   // move image to its center, so we can rotate around its center
            this._cnv.scale(this._aspectW,this._aspectH); // SCALE - if needed ;)
            this._cnv.drawImage(this._img, 0, 0);             // First - we draw image
          }

      })()
      }

      if (IE)
      {
        Wilq32.PhotoEffect.prototype.createVMLNode=(function(){
          document.createStyleSheet().addRule(".rvml", "behavior:url(#default#VML)");
          try {
            !document.namespaces.rvml && document.namespaces.add("rvml", "urn:schemas-microsoft-com:vml");
            return function (tagName) {
              return document.createElement('<rvml:' + tagName + ' class="rvml">');
            };
          } catch (e) {
            return function (tagName) {
              return document.createElement('<' + tagName + ' xmlns="urn:schemas-microsoft.com:vml" class="rvml">');
            };
          }
        })();
      }

})(jQuery);



$(".BtnSpin").click(function(){

    var spin = Math.floor((Math.random() *10 ) ) * 36;
  
    $(".wheel").rotate({
        angle: 0,
        animateTo: -(spin + 720),
        duration: 6000
    });
    setTimeout(function(){
        $(".wheel").stopRotate();
    }, 6000);
    // ////////////////////

    $(".BtnSpin").attr("disabled", true);

    // disable lotry name after spin button

    setTimeout(function(){
        $(".card-input-element").attr("disabled", true);
    }, 6000);

    // disable lotry name after spin button

    var luckyNo = (spin / 36 ) ;
    setTimeout(function(){
        document.getElementById("luckynois").innerHTML=luckyNo;
    }, 6100);

        document.getElementById("aaa222").innerHTML=luckyNo;
    // popup of arrow
     $("#spinarrow").addClass("popupSpin");
     $("#spinarrow").addTemporaryClass("popupSpin", 6000);

    // $(".panel").css("visibility","hidden")
    // $(".panel").css("display","none")

    // $(".BtnSpin").css("visibility","hidden")
    // $(".BtnSpin").css("display","none")

    // $("#namee").attr("disabled", true); 
    $(".panel").prop('disabled', true);
    $(".BtnSpin").prop('disabled', true);
});

    // ////////////////////
// $(document).ready(function(){
  
// });
$( document ).ready(function() {
    // $("#namee").prop('disabled', true);
    $(".checkbox111").prop('disabled', true);
    $(".BtnSpin").prop('disabled', true);
    // $(".panel").css("visibility","hidden")
    // $(".panel").css("display","none")

    // $(".BtnSpin").css("visibility","hidden")
    // $(".BtnSpin").css("display","none")
});
    // $('.BtnSpin').attr("disabled", false); 
$("#namee").click(function(){
    $(".checkbox111").prop('disabled', false);
    // $(".panel").css("visibility","visible")
    // $(".panel").css("display","block")
});

$(".checkbox111").click(function(){
    if ($('.checkbox111').prop('disabled', false)) {
        $(".BtnSpin").prop('disabled', false);
    } else {
        $(".BtnSpin").prop('disabled', true);
    }
    // $(".BtnSpin").css("visibility","visible")
    // $(".BtnSpin").css("display","block")
});




$(".btn-light").click(function(){
   // alert('Submitted Successfully');  
   var aaa = $('#aaa222').html();
   alert('Your lucky number is ' + aaa);
});



//submit input disablity
// $(document).ready(function() {
//      $(':input[type="submit"]').prop('disabled', true);
//      $('input[type="text"]').keyup(function() {
//         if($(this).val() != '') {
//            $(':input[type="submit"]').prop('disabled', false);
//         }
//      });
//  });



      $(function(){
  $('input[type="radio"]').click(function(){
    if ($(this).is(':checked'))
    {
      // alert($(this).val());
      document.getElementById("aaa").innerHTML = $(this).val();
    }
  });
});


  

</script>
<!-- fontawesome -->
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>

</body>
</html>


