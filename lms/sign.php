<?php
$msg_time=false;
if(isset($_POST['username']))
{
    include "db.php";
    $same=true;
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $sql1="SELECT username,password,email FROM lms";
    $result=$con->query($sql1);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            if(($row['username']==$username || $row['password']==$password)||$row['email']==$email){
                $same=false;
                echo "You have registered";
                
            
            }
        }
    }
          
    if($same===false){
        echo "already registered";
    }
    else{
                $sql="INSERT INTO `lms`.`lms` (`username`, `password`, `email`) VALUES ( '$username', '$password', '$email')";
            
                if($con->query($sql)==false){
                    echo "error: $con->error";
                }
                $msg_time=true;
                
            

        }

    
    
    
  
    $con->close();

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lms-signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<section class="sign">
    <div class="signup">
    <form action="sign.php" method="POST">
        <input type="text" placeholder="enter username" name="username" required>
        <br>
        <input type="password" placeholder="enter your pass" name="password" required>
        <br>
        <input type="email" placeholder="enter your email" name="email" required>
        <br>
        <input type="submit" class="btn sub">
        <p></p>
        <br>
        <a href="login.php" class="btn"><p>if you have an account</p></a>
    </form>
</div>
</section>
</body>
</html>
<style>
    .sign{
        display:flex;
        justify-content:center;
        height:100vh;
        text-align:center;
        background-color: #000000;
        background-image: linear-gradient(315deg, #000000 0%, #7f8c8d 74%);
    }
    .sign .signup{
        position:absolute;
        top:150px;
        padding:20px;
        background-color: #d9e4f5;
        background-image: linear-gradient(315deg, #d9e4f5 0%, #f5e3e6 74%); 
        height:50%;
        width:50%;
        border-radius:25px 25px;
    }
    .sign .signup input{
        border:none;
        margin-top:20px;
        border-radius:20px 20px;
        box-shadow:0 2px 2px black;
        width:50%;
    }
    .sign .signup input:hover{
        transition:background-color 0.4s ease;
        background-color:black;
        color:white;
    }
    .sign .signup .sub{
        width:30%;
        background-color:white;
        color:black;
    }
    .sign .signup .sub:hover{
        background-color:black;
        color:white;
    }
    .sign .signup a{
        background-color:white;
        border:none;
        border-radius:20px 20px;
        box-shadow:0 2px 2px black;
        position:relative;
        top:20px;
        text-decoration:none;
        height:30px;
        color:black;
    }
    .sign .signup a:hover{

        color:white;
        background-color:black;
    }
@media screen and (max-width:600px){
    .sign .signup{
        left:2%;
        width:96%;
    }
}

    </style>
    <script>
        if(window.history.replaceState){
            window.history.replaceState( null, null, window.location.href );
        }

        
        </script>