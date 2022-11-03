<!doctype html>
<html lang="en">
<head>
<title>75 Attendence</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/css/util.css">
<link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/css/main.css">

<meta name="robots" content="noindex, follow">
</head>
<body>
<div class="limiter">
<div class="container-login100">
<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

<?php
      
       // Checking the the values submitted or not
               
       if(isset($_POST['submit'])){
          // getting the values and securing the values
       $present = strip_tags(htmlspecialchars($_POST['present']));
      //  $present = $present > 0 ? $present : 0;
       $total = strip_tags(htmlspecialchars($_POST['total']));
      //  $total = $total > 0 ? $total : 1;
       $percent = $_POST['percent'];;

       //when data is get then include policy.php and showing the text
          include 'printy.php';
       }else{
          //if submit is not isset then asking to submit the form
       ?>

<form action="/" method="post" accept-charset="utf-8" class="login100-form validate-form flex-sb flex-w">
<span class="login100-form-title p-b-32">
75 Attendance
</span>
<span class="txt1 p-b-11">
Present
</span>
<div class="wrap-input100 validate-input m-b-36" data-validate="present days required">
<input class="input100" type="number" min="0" name="present" autocomplete="off">
<span class="focus-input100"></span>
</div>
<span class="txt1 p-b-11">
Total
</span>
<div class="wrap-input100 validate-input m-b-12" data-validate="class days required">

<input class="input100" type="number" min="1" name="total" autocomplete="off">
<span class="focus-input100"></span>
</div>
<div class="input-container percentage-select-container">
<span class="txt1 p-b-11">
Percentage
</span>
<div style="padding-top:20px">
        <select name="percent" id="percent" class="percent-select">
          <option type="number" value="60">60%</option>
          <option type="number" value="65">65%</option>
          <option type="number" value="70">70%</option>
          <option type="number" value="75" selected>75%</option>
          <option type="number" value="80">80%</option>
          <option type="number" value="85">85%</option>
          <option type="number" value="90">90%</option>
        </select>
        </div>
      </div>



<div class="container-login100-form-btn" style= "padding-top:20px; align-items:center;">
<button name="submit" class="login100-form-btn"  style="text-align:center" type="submit" value="calculate" >
Calculate
</button></div>
</form>
<?php } ?>
</div>
</div>
</div>
<div id="dropDownSelect1"></div>

<script src="https://colorlib.com/etc/lf/Login_v14/vendor/jquery/jquery-3.2.1.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v14/vendor/animsition/js/animsition.min.js"></script>

<!-- <script src="https://colorlib.com/etc/lf/Login_v14/vendor/bootstrap/js/popper.js"></script> -->
<!-- <script src="https://colorlib.com/etc/lf/Login_v14/vendor/bootstrap/js/bootstrap.min.js"></script> -->

<script src="https://colorlib.com/etc/lf/Login_v14/vendor/select2/select2.min.js"></script>

<script src="https://colorlib.com/etc/lf/Login_v14/vendor/daterangepicker/moment.min.js"></script>
<!-- <script src="https://colorlib.com/etc/lf/Login_v14/vendor/daterangepicker/daterangepicker.js"></script> -->

<!-- <script src="https://colorlib.com/etc/lf/Login_v14/vendor/countdowntime/countdowntime.js"></script> -->

<script src="https://colorlib.com/etc/lf/Login_v14/js/main.js"></script>


</body>
</html>
