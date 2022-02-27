<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <section class="reset">
    <div class="reset-div">
<form action="reset.php" method="POST">
    <label class="pas">Re-enter your new password</label>
    <br>
        <input type="text" placeholder="Re-Enter your username" name="username" class="password1" required>
        <br>
        <input type="password" placeholder="Enter your new password" name="password" class="password1" required>
        <br>
        <?php

$message=false;
if(isset($_POST['username'])){
session_start();
$message=false;
include "db.php";
$username=$_POST['username'];
$new_pas=$_POST['password'];
$update12="UPDATE `lms` SET password ='$new_pas' WHERE username = '$username' ";
$result=$con->query($update12);
if($result){
$message=true;
}
}

?>
        <input type="submit" class="btn sub">
        <br>
        <?php
        if($message){
            echo "<div class='message'>"."change done"."</div>";
        }
        ?>
        <a href="login.php" class="btn"><p>if you have an account</p></a>
    </form>
</div>

</section>
</body>
</html>
<style>
    body{
        font-family: "Times New Roman", Times, serif;
        font-weight:bold;
    }
    .message{
        background-color:white;
        color:green;
        border:none;
        
    }
        .reset{
        display:flex;
        justify-content:center;
        height:100vh;
        text-align:center;
        background-color: #000000;
        background-image: linear-gradient(315deg, #000000 0%, #7f8c8d 74%);
    }
    .reset-div{
        position:absolute;
        top:150px;
        padding:20px;
        background-color: #d9e4f5;
        background-image: linear-gradient(315deg, #d9e4f5 0%, #f5e3e6 74%); 
        height:50%;
        width:40%;
        border-radius:25px 25px;
        
    }
    .password1{
        border:none;
        width:100%;
        margin-top:10%;
    }
    .pas{
        background-color:black;
        color:white;
        border:none;
    }
    .btn{
        margin-top:10px;
        background-color: #b8c6db;
        background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
        border-radius:20px 20px;
        transition:0.7s;
    }
    .btn:hover{
        background-color: #537895;
        background-image: linear-gradient(315deg, #537895 0%, #09203f 74%);
        color:white;
    }
    @media screen and (max-width:600px){
        .reset .reset-div{
        left:1%;
        width:98%;
    }
}
@media screen and (max-width:1000px) and (min-width:700px){
        .reset .reset-div{
           
        left:16%;
        width:68%;
        height:40%;
    }
}
    </style>

<script>
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
    </script>
