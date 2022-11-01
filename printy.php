<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="icon" type="image/png" href="favicon.ico" />


<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/icon-font.min.css">
<span class="login100-form-title p-b-32">
75 Attendance
</span>

<?php 
$totpercent = ($present/$total)*100;
$totpercent = number_format((float)$totpercent, 2, '.', '');
if ($present<0 || $total<0 || $present>$total){
  echo "<h5>Please enter correct values!!</h5>";
}

elseif ($present/$total >= $percent/100){
  $db = intval((100*$present-$percent*$total)/$percent);
  $new_tot = $total+$db;
  echo "<h4>Current Attendance : <strong>$present/$total</strong> = <strong>$totpercent</strong>%</h4><br>";
  echo "<h4>You can bunk for <strong>$db days</strong></h4><br>";
  echo "<h4>Attendance After $db Bunks : $present/$new_tot = $percent%</h4><br>";  
}

else{
  $reqattendence = intval(($percent*$total-100*$present)/(100-$percent));
  echo "<h4>You have to attend $reqattendence more days to have $percent% attendence</h4><br>";
  echo "<h4>Current Attendance : $present/$total = $totpercent%</h4><br>";
  echo "<h4>Total Attendence Required (Present/Total) : ",$reqattendence+$present,"/",$reqattendence+$total,"</h4><br>";
}
?>

<div class="container-login100-form-btn" style= "padding-top:20px; align-items:center;">
<button onclick="history.back()" class="login100-form-btn"  style="text-align:center">
Go Back
</button></div>
