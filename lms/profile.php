<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profile</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-md-top navbar12">
  <div class="container-fluid">
  <i class='fas fa-book-reader' style='font-size:24px;color:white;'></i>
    <a class="navbar-brand" href="#" style='margin-left:15px;'>Lms</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="profile.php">Profile</a>
        </li>
        <!---
        <li class="nav-item">
          <a class="nav-link active" style="margin-left:900px;" href="#"><i class='fas fa-user-graduate' style='font-size:24px' style="margin-left:5px;"></i>Welcome <?php echo $_SESSION['username'];?></a>
        </li>
        --->
      </ul>
    </div>
  </div>
</nav>
    <section>
        <div class="left-side">
            <ul class="left-side-part">
                <li class="left-side-part-li">
                <div class="left-side-action"><a href="javascript:one_open()" class="left-side-href"><p>Username</p></a></div>

</li>
<br>
<br>
<li>
<div class="left-side-action"><a href="javascript:two_open()" class="left-side-href"><p>Grade</p></a></div>
</li>
<br>
<br>
<li>
<div class="left-side-action"><a href="javascript:third_open()" class="left-side-href"><p>Achievements</p></a></div>
</li>
<br>
<br>
<li>
<div class="left-side-action"><a href="javascript:four_open()" class="left-side-href"><p>Job/intership information</p></a></div>
</li>
<br>
<br>
</ul>

        
        </div>
        <?php
$full_name=null;
$row1=null;
$val1=0;
if(isset($_POST['fullname'])){
    include "common.php";
    $fullname=$_POST['fullname'];
    $address=$_POST['address'];
    $state=$_POST['state'];
    $picture=$_FILES['picture']['name'];
    $tempname = $_FILES['picture']['tmp_name'];
    $full_name=$fullname;
    $folder = "C:/xampp/htdocs/lms/".basename($_FILES['picture']['name']);
    $dirpath = realpath(dirname(getcwd()));
    $sql="INSERT INTO `lms`.`profile` (`picture`,`fullname`, `address`, `state`) VALUES ('$picture','$fullname', '$address', '$state')";
    /*
    if($con->query($sql)){
        echo "yes";
    }
    else{
        echo "no";
    }
    */
    
   
   
    if (move_uploaded_file($tempname, $folder))  {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
  }

    $server1="localhost";
    $user1="root";
    $password1="";
    $database1="lms";
    $con1=mysqli_connect($server1,$user1,$password1,$database1);
    if(!$con1){
    die("error");
    }
    /*
    else{
        echo "ok";
    }*/
    $datas="SELECT picture FROM profile where  fullname='$fullname'";
    $result=$con1->query($datas);
    while($row=$result->fetch_assoc()){
        $row1=$row['picture'];
        $val1=1+$val1;
    }

}


?>

<div class="form-control" id="one">
    <form action="profile.php" method="POST" enctype="multipart/form-data">
        <div>
    <label class="label1 picture-label">Upload your pic :</label>
        <?php
        if($row1){

            echo "<img src='$row1' class='img-form'>";
        }
        else{
            echo "<img src='Mythical.png' class='img-form'>";
        }
        ?>
       <input type="file" class="inp inp-pic" name="picture">
    </div>
        <br>
 
        <label class="label1 full-name-label">Enter your Full name :</label>
        <input type="text" placeholder="enter your full name " name="fullname" class="inp inp-name">
        <br>
        <label class="label1 address-label">Enter your address :</label>
        <input type="text" placeholder="enter your address " name="address" class="inp inp-address">
        <br>
        <label class="label1 state-name">Enter your state :</label>
        <input type="text" placeholder="enter your state " name="state" class="inp inp-state">
        <br>
        <button type="submit" class="form-button">submit</button>

        
</form>
</div>
<div class="form-control" id="two">
    <form action="#" method="POST">
    <label class="label1 full-name-label">Enter your CGPA :</label>
        <input type="number" placeholder="Enter your CGPA  " name="cgpa" class="inp inp-cgpa">
        <br>
        <label class="label1 address-label">Enter your YGPA :</label>
        <input type="number" placeholder="Enter your YPGA" name="ygpa" class="inp inp-ygpa">
        <br>
        <label class="label1 state-name">Enter your Percentage :</label>
        <input type="text" placeholder="Enter your percentage out of 100" name="percentage" class="inp inp-percentage">
        <br>
        <button type="submit" class="form-button">submit</button>

        
</form>
</div>
<div class="form-control" id="third">
    <form action="#" method="POST">
    <label class="label1 full-name-label">Enter your certificates name :</label>
        <textarea type="text" placeholder="Enter your certificates name " name="certificate" class="inp inp-certificate" rows="200"></textarea>
        <br>
        <label class="label1 address-label">Enter your awards name :</label>
        <textarea type="text" placeholder="Enter your awards name" name="awards" class="inp inp-awards" rows="200"></textarea>
        <br>
        <button type="submit" class="form-button">submit</button>

        
</form>
</div>
<div class="form-control" id="four">
    <form action="#" method="POST">
    <label class="label1 full-name-label">Enter your job/intership name :</label>
        <input type="text" placeholder="Enter your job/intership name " name="jobname" class="inp inp-job-intership">
        <br>
        <label class="label1 address-label">Enter your job/intership details :</label>
        <textarea type="text" placeholder="Enter your job/intership details" name="jobdetails" class="inp inp-job-details" rows="200"></textarea>
        <br>
        <button type="submit" class="form-button">submit</button>

        
</form>
</div>
</section>
</body>
</html>
<style>
    .left-side{
        float:left;
        height:100vh;
        padding:20px;
        background-color: #a4508b;
        background-image: linear-gradient(326deg, #a4508b 0%, #5f0a87 74%);
        font-size:20px;
        letter-spacing: 0.0625em;

    }
    .left-side-part{
        list-style-type:none;
    }
    .left-side-action{
        color:white;
        margin-left:-26px;
        transition:0.5s;
    }
    .left-side-href{
        text-decoration:none;
        color:white;
        transition:0.5s;
        width:100%;
    }
    .left-side-action:hover{
        background-color:white;
    }
    .left-side-href:hover{
        color:black;
        font-style:italic;
        
    }
    .form-control{
        text-align:center;
       
    }
    .inp{
        margin-top:60px;
        border:none;
        height:60px;
        width:800px;
    }
    .form-button{
        border:none;
        margin-top:20px;
        width:120px;
        height:30px;
        border-radius:20px 20px;
        transition:0.5s;

    }
    .form-button:hover{
        background-color:black;
        color:white;
    }
    .inp-name{
        margin-right:20px;
    }
    .inp-address{
        margin-right:20px;
    }
    .inp-pic{
        border:none;
        width:100px;
        height:100px;
        transition:0.5s;
        
    }
    .inp-cgpa{
        margin-right:20px;
    }
    .inp-ygpa{
        margin-right:20px;
    }
    .inp-percentage{
        margin-right:100px;
    }
    .inp-job-details{
       width:800px;
       height:400px;
    }

    .inp{
        margin-right:20px;
    }
    .inp-certificate{
            
            margin-right:0px;
            height:200px;
      
              }
              .inp-awards{
            margin-right:0px;
            height:200px;
          }
          
    #one{
     
        height:100vh;
        transition:0.5s;
        background-color: #5de6de;
        background-image: linear-gradient(315deg, #5de6de 0%, #b58ecc 74%);
    }
    #two{
       
        height:100vh;
        transition:0.5s;
        background-color: #ffcfdf;
        background-image: linear-gradient(315deg, #ffcfdf 0%, #b0f3f1 74%);
    }
    #third{
               
        height:100vh;
        transition:0.5s;
        background-color: #f9d29d;
        background-image: linear-gradient(315deg, #f9d29d 0%, #ffd8cb 74%);


    }
    #four{
        height:100vh;
        transition:0.5s;
        background-color: #e3efe8;
        background-image: linear-gradient(315deg, #e3efe8 0%, #96a7cf 74%);

    }
    .img-form{
            width:100px;
            height:100px;
            object-fit:cover;
        }
    
    @media screen and (max-width:600px){
        .left-side{
            padding:2px;
            width:32%;
            font-size:15px;
        }
        .inp{
            margin-top:20px;
            width:68%;
            margin-left:4px;
            height:30px;
        }
        .label1{
            font-size:16px;
        }
        .form-button{
            width:70px;
            height:50px;
        
        }
        .inp-name{
            margin-right:0px;
        }
        .inp-address{
            margin-right:0px;
        }
        .inp-state{
            margin-right:0px;
        }
        .inp-pic{
            width:100px;
            height:100px;
            
        }
        .img-form{
            width:70px;
            height:70px;
            object-fit:cover;
        }
        .inp-cgpa{
        margin-right:0px;
            }
        .inp-ygpa{
        margin-right:0px;
         }
        .inp-percentage{
        margin-right:0px;
        
        }
        .inp-certificate{
            
      margin-right:0px;
      height:100px;

        }
        .inp-awards{
      margin-right:0px;
      height:100px;
    }
    .inp-job-details{
       width:200px;
       height:200px;
    }
    .inp-job-intership{
        width:200px;
    }
    }
    @media screen and (max-width:1000px) and (min-width:700px){
        .inp{
            margin-top:20px;
            width:30%;
            margin-left:4px;
            height:30px;
        }
        .label1{
            font-size:26px;
        }
        .form-button{
            width:70px;
            height:50px;
        }
        .inp-name{
            margin-right:0px;
            width:400px;
            height:40px;
        }
        .inp-address{
            margin-right:0px;
            width:400px;
            height:40px;
        }
        .inp-state{
            margin-right:0px;
            width:400px;
            height:40px;
        }
        .inp-cgpa{
        margin-right:0px;
        width:400px;
        height:40px;
            }
        .inp-ygpa{
        margin-right:0px;
        width:400px;
        height:40px;
         }
        .inp-percentage{
        margin-right:0px;
        width:400px;
        height:40px;
        }
        .inp-certificate{
            
            margin-right:0px;
            height:200px;
            width:400px;
      
              }
        .inp-awards{
            margin-right:0px;
            height:200px;
            width:400px;
          }
          .inp-job-details{
       width:400px;
       height:200px;
    }
    .inp-job-intership{
        width:400px;
    }
    }
    @media screen and (max-width:1280px) and (min-width:1010px){
        .inp{
            margin-top:20px;
            width:30%;
            margin-left:4px;
            height:30px;
        }
        .label1{
            font-size:26px;
        }
        .form-button{
            width:70px;
            height:50px;
        }
        .inp-name{
            margin-right:0px;
            width:600px;
            height:40px;
        }
        .inp-address{
            margin-right:0px;
            width:600px;
            height:40px;
        }
        .inp-state{
            margin-right:0px;
            width:600px;
            height:40px;
        }
        .inp-cgpa{
        margin-right:0px;
        width:600px;
        height:40px;
            }
        .inp-ygpa{
        margin-right:0px;
        width:600px;
        height:40px;
         }
        .inp-percentage{
        margin-right:0px;
        width:600px;
        height:40px;
        }
        .inp-certificate{
            
            margin-right:0px;
            height:200px;
            width:600px;
      
              }
        .inp-awards{
            margin-right:0px;
            height:200px;
            width:600px;
          }
          .inp-job-details{
       width:650px;
       height:200px;
    }
    .inp-job-intership{
        width:650px;
    }
    }

    </style>
    <script>
        var val1=document.getElementById("two");
        val1.style.display="none";
        var val0=document.getElementById("one");
        var val2=document.getElementById("third");
        var val3=document.getElementById("four");
        val2.style.display="none";
        val3.style.display="none";
       function two_open(){
           val1.style.display="block";
           val0.style.display="none";
           val2.style.display="none";
           val3.style.display="none";
       }
       function one_open(){
           val1.style.display="none";
           val0.style.display="block";
           val2.style.display="none";
           val3.style.display="none";
       }
       function third_open(){
           val1.style.display="none";
           val2.style.display="block";
           val0.style.display="none";
           val3.style.display="none";
       }
       function four_open(){
           val1.style.display="none";
           val3.style.display="block";
           val0.style.display="none";
           val2.style.display="none"; 
       }
       if(window.history.replaceState){
    window.history.replaceState( null, null, window.location.href );
  }
        </script>
