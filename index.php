<!doctype html>
<html lang="en">
<head>
<title>Attendance 75</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="favicon.ico" />

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="css/animate.css">

<link rel="stylesheet" type="text/css" href="css/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="css/animation.min.css">

<link rel="stylesheet" type="text/css" href="css/select2.min.css">

<link rel="stylesheet" type="text/css" href="css/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

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
       $present = $present > 0 ? $present : 0;
       $total = strip_tags(htmlspecialchars($_POST['total']));
       $total = $total > 0 ? $total : 0;
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

<input class="input100" type="number" min="0" name="total" autocomplete="off">
<span class="focus-input100"></span>
</div>
<div class="input-container percentage-select-container">
<span class="txt1 p-b-11">
Percentage
</span>
<div>
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

<script src="js/jquery-3.2.1.min.js"></script>

<script src="js/animation.min.js"></script>

<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/select2.min.js"></script>

<script src="js/moment.min.js"></script>
<script src="js/daterangepicker.js"></script>

<script src="js/countdowntime.js"></script>

<script src="js/main.js"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7635535d9e747a1c","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.10.3","si":100}' crossorigin="anonymous"></script>
</body>
</html>
