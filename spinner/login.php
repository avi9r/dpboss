

<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>DPBOSS Login and Register form</title>
<!-- bootstrap css -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->

<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<script src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>


<!-- my style css -->
<style type="text/css">
	
	@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
:root{--success-color:#2ecc71;--error-color:#e74c3c}*{box-sizing:border-box}body{background-color:#fc9;font-family:'Open Sans',sans-serif;display:flex;align-items:center;justify-content:center;min-height:100vh;margin:0;margin-right:0%}.container{display:flex;width:751px;justify-content:space-between;margin-top:80px}h2{text-align:center;margin:0 0 20px;color:#E91E63}.form{padding:30px 40px;width:inherit}#signup-form{background-color:#fff;border:2px solid #eb008b;border-radius:10px 0 10px 10px;margin-bottom:2px;box-shadow:0 2px 10px rgba(0,0,0,.3);overflow:hidden;max-width:470px;margin:0px auto 0}.form-control{margin-bottom:10px;padding-bottom:10px;position:relative}.form-control label{color:#E91E63;display:block;margin-bottom:5px;font-weight:700;font-size:18px;margin:0 0 10px}.form-control input{border:1px solid #E91E63;border-radius:4px;display:block;width:100%;padding:10px;font-size:14px}.form-control input:focus{outline:0;border-color:#777}.form-control.success input{border-color:var(--success-color)}.form-control.error input{border-color:var(--error-color)}.form-control small{color:var(--error-color);position:absolute;bottom:0;left:0;visibility:hidden}.form-control.error small{visibility:visible}.form button{cursor:pointer;background-color:#E91E63;border:2px solid #E91E63;border-radius:4px;color:#fff;display:block;font-size:20px;padding:10px;margin-top:20px;width:100%;text-transform:uppercase;font-weight:700}.form_error{color:#d83d5a}input::-webkit-outer-spin-button,input::-webkit-inner-spin-button{-webkit-appearance:none;margin:0}input[type="date"]{-moz-appearance:textfield}@media only screen and (max-width:768px){.container{width:580px}.form{}}@media only screen and (max-width:500px){.container{display:block;width:92%;justify-content:space-between}.form{padding:20px 25px;width:initial}.alert{padding:20px;background-color:#4caf50;box-sizing:border-box;width:100% color:white;margin-bottom:auto;margin-left:-5%;float:left;margin-top:-98%;position:absolute}}}input.if_input_state{border:2px solid #f0f0f0;border-radius:4px;display:block;width:100%;padding:10px;font-size:14px;margin-top:5px}input.if_input_state:focus{outline:0;border-color:#777}.if_label_state{color:#777;display:block;margin-bottom:15px;margin-top:-10px}.form-control.form_error{}select#scripts,input#mobileno{border:2px solid #f0f0f0;border-radius:4px;display:block;width:100%;padding:10px 10px;font-size:14px}select#scripts{font-size:13px}select#scripts:focus,input#mobileno:focus{outline:0;border-color:#777}.dd-options.dd-click-off-close{}.dd-option.dd-option-selected{display:flex}ul.dd-options a{width:110px;overflow-x:hidden}ul.dd-options{width:100px!important;overflow-x:hidden}.dd-option.dd-option-selected li{width:110px}.dd-selected-image,.dd-option-image{width:30px!important;margin-top:3px;height:auto!important}a.dd-option{height:35px;padding:5px}.dd-option-text{}#slick a.dd-selected{height:35px;padding:5px;display:flex}#slick{width:30%!important;float:left;z-index:7;margin-top:10px}.dd-selected-text{line-height:30px!important}.dd-select{width:90px!important}#mobileno{width:65%!important;margin-top:10px;float:right}.container{margin-bottom:300px}.dd-pointer.dd-pointer-down{visibility:hidden}.dateofbirth{margin-top:60px}.dd-selected{display:flex}.alert{padding:20px;background-color:#4caf50;box-sizing:border-box;width:100%
color:white;margin-bottom:auto;margin-left:14%;float:left;margin-top:-40%;position:absolute}.closebtn{margin-left:15px;color:#fff;font-weight:bold;font-size:22px;line-height:20px}.closebtn:hover{color:#000}.mmm{text-align:center;margin-left:auto;margin-right:auto;background-color:#4caf50!important;border:2px solid #4caf50!important;border-radius:4px;color:#fff;display:block;font-size:16px;padding:10px;margin-top:20px;width:100%}.modal{display:none;position:fixed;z-index:1;padding-top:100px;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:#000;background-color:rgba(0,0,0,.4)}.modal-content{background-color:#fefefe;margin:auto;padding:20px;border:1px solid #888;width:20%}.close{color:#aaa;float:right;font-size:28px;font-weight:bold}.close:hover,.close:focus{color:#000;text-decoration:none;cursor:pointer}.modal-content .modal-input{border:2px solid #f0f0f0;border-radius:4px;display:block;width:100%;padding:10px;font-size:14px;margin-right:10px;margin-left:10px}#myModal{z-index:9}.btn.btn-success{text-align:center;margin-left:auto;margin-right:auto;background-color:#4caf50!important;border:2px solid #4caf50!important;border-radius:4px;color:#fff;display:block;font-size:16px;padding:10px;margin-top:20px;width:100%}#slick2{width:120px!important}#slick2 .dd-selected{display:flex}.d-flex{display:flex}.modal-content{width:30%}@media only screen and (max-width:768px){.modal-content{width:50%}}@media only screen and (max-width:500px){.modal-content{width:75%}}
/*modal style*/
</style>
</head>
<body>

    <div class="container">

          <form id="signup-form" action="check.php" method="post" class="form col-12">
             <?php
                if (isset($login_error)) :?>
                  <span style="font-size: 13px">
                <?php  echo $login_error; ?></span>
           

        <?php endif?>
            <h2>Login To Spin The wheel</h2>
            <div class="form-control">
                <label for="email">Username</label>
                <input type="text" id="email2" name="username"  placeholder="Enter username" / required="">
                
            </div>
            <div class="form-control">
                <label for="password">Password</label>
                <input type="password" id="password3" name="password" id="mobile" placeholder="Enter password" / required="">
                
            </div>
            <button type="submit" name="login">Login</button>
            

        </form>
       
       

    

    </div>


</body>
</html>