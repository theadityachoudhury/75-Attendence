<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="./screenshots/attendance75website.jpg" type = "image/x-icon">
      
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      
      <title>Attendance Checker</title>
   </head>
   <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
         <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">75 Attendence</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="https://privacypolicygen.herokuapp.com/" target="_blank">Policygen</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="/contactus.php">Contact Us</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="container py-5">
         <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
              
       <?php
      
       // Checking the the values submitted or not
               
       if(isset($_POST['submit'])){
          // getting the values and securing the values
       $present = strip_tags(htmlspecialchars($_POST['present']));
       $present = $present > 0 ? $present : 0;
       $total = strip_tags(htmlspecialchars($_POST['total']));
       $total = $total > 0 ? $total : 0;

       //when data is get then include policy.php and showing the text
          include 'printy.php';
       }else{
          //if submit is not isset then asking to submit the form
       ?>
               <form action="/" method="post" accept-charset="utf-8">
                  <div class="form-group">
                     <label for="present" class="h3" >Present</label>
                     <input type="number" name="present" value="" class="form-control form-control-lg" id="present" placeholder="Present" required/>
                  </div>
                  <div class="form-group">
                     <label for="total" class="h3" >Total</label>
                     <input type="number" name="total" value="" class="form-control form-control-lg" id="total" placeholder="Total" required/>
                  </div>
               <input type="submit" name="submit" value="Calculate" class="btn btn-primary my-3" required/>
               </form>
               
               <?php } ?>
             
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>         
   </body>
</html>

