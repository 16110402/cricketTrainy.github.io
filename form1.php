<?php
// $showAlert=false;
// $showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
            include '_dbconnect.php';
            $name=$_POST["name"];
            $subject=$_POST["subject"];
            $message=$_POST["message"];
            $email=$_POST["email"];
            
            $existSql = "SELECT * FROM `userc` WHERE name= '$name'";
            $result=mysqli_query($conn, $existSql);
            $numExistRows=mysqli_num_rows($result);
            if($numExistRows>0)
            {
                $showError="Username Already Exists";
            }
            else
            {
                $sql= "INSERT INTO `userc` (`name`, `subject`, `message`, `email`) VALUES ('$name', '$subject', '$message', '$email')";
                $result=mysqli_query($conn,$sql);
                if($result){
                  $showAlert=true;
              }
            }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>message</title>
</head>
<body>
<div class="card-group text-center" style="margin-left:50px;margin-right:50px;margin-top:50px;margin-bottom:50px;">
  <div class="card" >
    <div class="card-body">
    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="1.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">PHONE :</h5>
          <p class="card-text">+91-7678388280</p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="2.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">EMAIL :</h5>
          <p class="card-text">gautamyadav@gmail.com</p>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="3.png" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">ADDRESS :</h5>
          <p class="card-text">New Ashok Nagar,Delhi</p>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>
  <div class="card">
  <form action="\cricketTrainy\index.php" method="post">
  <div class="row g-3 my-5 mx-2">
  <div class="col">
    <input type="text" class="form-control" placeholder="Name" name="name" id="name" aria-label="First name">
  </div>
  <div class="col">
    <input type="email" class="form-control" placeholder="Email" name="email" id="email" aria-label="Last name">
  </div>
</div>
  <div class="row g-3 my-5 mx-2">
  <div class="col">
    <input type="text" style="width:330px;" class="form-control" placeholder="Subject" id="subject" name="subject" aria-label="First name">
  </div>
</div>
  <div class="row g-3 my-5 mx-2">
  <div class="col">
    <input type="text" style="width:330px;" class="form-control" placeholder="Message" name="message" id="message" aria-label="First name">
  </div>
</div>
<button type="submit" class="btn btn-success">Send Message</button>
</form>
  </div>
</div>
</html>