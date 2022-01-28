<?php
$var=1;
if(isset($_POST['email'])){
include "db.php";
$password=$_POST["password"];
$email=$_POST["email"];

$sql="SELECT username,sno FROM lms WHERE '$password'=password AND '$email'=email ";
$result=$con->query($sql);
if($result->num_rows>0){
    $row=$result->fetch_assoc();
    session_start();
    $_SESSION['username']=$row['username'];
    $_SESSION['sno']=$row['sno'];
    header("location:home.php?id=".$row['sno']);
    
}
else{
    $var=0;
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lms-login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<section class="sec">
    <div class="container-fluid signup">
    <form action="login.php" method="POST">
       <br>
       <div class="row g-3">
          <div class="col">
          <input type="email" class="form-control" placeholder="Enter your email" aria-label="First name" name="email" required>
          </div>
          <div class="col">
          <input type="password" class="form-control" placeholder="Enter your password" aria-label="Last name" name="password" required>
          </div>
      </div>
        <br>
        <input type="submit" class="btn sub">
    </form>
    <br>
    <p>If you have not any account , please create it </p>
    <a href="sign.php">sign in </a>
    <br>
    <br>
    <a href="reset.php">reset password</a>
  <p><?php if($var==0){echo "wrong password or username";}?></p>   
</div>
</section>
<section class="sec go">
  <div class="container-fluid inshead">
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="#" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="#" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="#" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="#" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
</section>
</body>
<script>
  if(window.history.replaceState){
    window.history.replaceState( null, null, window.location.href );
  }
</script>
</html>
<style>
    body{margin:0;}
 .sec{
     margin:0;
     height:100vh;
     box-sizing:border-box;
     background-color: #f8f9d2;
background-image: linear-gradient(315deg, #f8f9d2 0%, #e8dbfc 74%);

 }
 
 .sec.go{
    background-color: #52a7c1;
background-image: linear-gradient(315deg, #52a7c1 0%, #b3f6d8 74%);

 }
 .sec .signup{
     position:absolute;
     left:25%;
     text-align:center;
     top:30%;
     padding:20px;
     background-color: #9dc5c3;
    background-image: linear-gradient(315deg, #9dc5c3 0%, #5e5c5c 74%);
     width:50%;
     border:none;
     border-radius:20px 20px;
     box-shadow:0 2px 2px black;
 }
 @media screen and (max-width:900px){
   .sec .signup{
     width:50%;
   }
 }
 @media screen and (max-width:600px){
   .sec .signup{
     left:2%;
     width:96%;
   }
 }
.signup input{
    border:none;
    tab-size:200px;
     border-radius:20px 20px;
     box-shadow:0 2px 2px black;
     font-weight:bold;
     color:black;
 }
 .signup .sub:hover{
   background-color:white;
 }
.signup{
text-align:center;
color:black;
 }
 .signup a{
     border-radius:20px 20px;
     box-shadow:0 2px 2px black;
     text-decoration:none;
     color:black;
     padding:10px;
     background-color:white;
     font-family:  Arial, Helvetica, sans-serif;
 }
 .signup a:hover{
   transition:background-color 0.5 ease;
   color:white;
   background-color:black;
 }
 .signup p{
     color:black;
     font-size:30px;
     font-family: "Times New Roman", Times, serif;
 }
 .sec.go .inshead{
   margin:0;
   position:absolute;
   left:20%;
   margin-top:5%;
   border-radius:20px 20px;
   box-shadow:0 2px 2px black;
   display:flex;
   justify-content:center;
   padding:20px;
   text-align:center;
   background-color: #d9e4f5;
background-image: linear-gradient(315deg, #d9e4f5 0%, #f5e3e6 74%);
color:black;
   width:60%;
   resize:both;
   overflow:auto;
 }
 @media screen and (max-width:900px){
 .sec.go .inshead{
    width:60%;
  }
@media screen and (max-width:600px){
  .sec.go .inshead{
    left:2%;
    width:96%;
  }

}
</style>



