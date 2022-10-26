<<<<<<< HEAD
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<?php 
// $present = int($present);
// $total = int($total);
if ($present<=0 || $total<=0 || $present>$total){
  echo "Please Enter Correct values!";
}

elseif ($present/$total >= 0.75){
  $db = intval((4*$present-3*$total)/3);
  $totpercent = ($present/$total)*100;
  echo "<h4>You have ",number_format((float)$totpercent, 2, '.', ''),"% attendence!</h4>";
  echo "<br>";
  echo "<h4>You can bunk for $db days</h4>";
}

else{
  $reqattendence = intval(3*$total-4*$present);
  echo "<h4>You have to attend $reqattendence more days to have 75% attendence</h4>";
  echo "<br>";
  echo "<h4>Total Attendence Required (Present/Total) : ",$reqattendence+$present,"/",$reqattendence+$total,"</h4>";
}
?>
<br>
<button onclick="history.back()" class="btn btn-primary my-3">Go Back</button>
=======
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<?php 
// $present = int($present);
// $total = int($total);
if ($present<=0 || $total<=0 || $present>$total){
  echo "Please Enter Correct values!";
}

elseif ($present/$total >= 0.75){
  $db = intval((4*$present-3*$total)/3);
  $totpercent = ($present/$total)*100;
  echo "<h4>You have ",number_format((float)$totpercent, 2, '.', ''),"% attendence!</h4>";
  echo "<br>";
  echo "<h4>You can bunk for $db days</h4>";
}

else{
  $reqattendence = intval(3*$total-4*$present);
  echo "<h4>You have to attend $reqattendence more days to have 75% attendence</h4>";
  echo "<br>";
  echo "<h4>Total Attendence Required (Present/Total) : ",$reqattendence+$present,"/",$reqattendence+$total,"</h4>";
}
?>
<br>
<button onclick="history.back()" class="btn btn-primary my-3">Go Back</button>
>>>>>>> 06d9a4e134cc9f491057b77e6eef21f9d85a27ba
