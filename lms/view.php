<?php
session_start();
if(isset($_FILES['documents'])){

    $id=$_SESSION['id'];
    include "common.php";
    $documents=$_FILES['documents']['name'];
    $documents1=$_FILES['documents']['type'];
    #echo $documents1;
    
    $tempname=$_FILES['documents']['tmp_name'];
    $folder = "C:/xampp/htdocs/lms/".basename($_FILES['documents']['name']);
    $sql="INSERT INTO `lms`.`datas` (`documents`) VALUES ('$documents')";
    $result=$con->query($sql);
    /*
    if($result){
        echo "yes";
    }
    else{
        echo "no";
    }
    */
    
    if (move_uploaded_file($tempname, $folder))  {
        $msg = "Image uploaded successfully";
       # echo $msg;
    }else{
        $msg = "Failed to upload image";
        #echo $msg;
  }
    }


?>
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
    <title>Data Structures</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-md-top navbar12" style="text-align:center;">
  <div class="container-fluid">
  <i class='fas fa-book-reader' style='font-size:24px;color:white;'></i>
    <a class="navbar-brand" href="#" style='margin-left:15px;'>Lms</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php?id=<?php echo $_SESSION['id'];?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="profile.php?id=<?php echo $_SESSION['id']; ?>">Profile</a>
        </li>
        <li class="nav-item">

          <a class="nav-link active"  href="javascript:list0_on()"><i class='fas fa-user-graduate' style='font-size:24px' style="margin-left:5px;"></i>Welcome <?php echo $_SESSION['username'];?></a>
          <div id="part0">
           <div class="part0"><a href="#" class="part-link0"> Courses Name</a></div>
            <br>
            <div class="part0"><a href='logout.php' class="part-link0">Logout</a></div>
</div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
    <section class="courses-card">
        <div class="card-all">
            <div class="courses-header">
                <a href="#" class="link">Dashboard</a> - <a href="#" class="link">Courses</a> - <a href="#" class="link">Data</a>
                <h1 class="header">Data Structures and Algorithms</h1>
            </div>
            <br>
        <div class="courses-progress">
            <div class="progress-head">
        Your progress<div class="progress-sign"><a href="javascript:list_on()" class="progress-href">?</a></div><div id="progress-details"><p class="progress-paragraph">In CSS, we use the font-family property to specify the font of a text. The font-family property should hold several font names as a "fallback" system, to ensure maximum compatibility between browsers/operating systems. Start with the font you want</p></div>
        </div>
    </div>
    <br>
    <div class="courses-table">
        <form method="POST" action="view.php" enctype="multipart/form-data">
        <input type="file" name="documents">
        <button type="submit">submit</button>
</form>
     
    
    <?php
    include "db.php";
    $sql1="SELECT * FROM datas";
    $result=$con->query($sql1);
    if($result){
    while($row=$result->fetch_assoc()){
        
        $doc=$row['documents'];
        $_SESSION['documents']=$row['sno'];
        $_SESSION['del-id']=$_SESSION['id'];
        echo "<table class='table1' border=1>"."<tr class='table-row'>"."<td>"."<a href='$doc'>"."here?"."</a>"."</td>"."<td>"."<a href='delete.php'>del</a>"."</td>"."</tr>"."</table>";
        
    }
}
else{
    echo "no value access";
}
    
    ?>
   
    
  


        </div>

</div>
    </div>
</section>
</body>
</html>
<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    .table1{
        border-collapse:separate;
        border-spacing:0 15px;
    }
    td {
                width:100%;
                
          
                padding:4px
              
            }

    .progress-href{
        color:white;
        text-decoration:none;
    }
    #progress-details{
        background-color:black;
        width:20%;
        position:absolute;
        border-radius:10px 10px;
        margin-left:25px;
        margin-top:-60px;
        opacity: 0.9;
    }
    .progress-href:hover{
        color:black;
    }
    .courses-progress{
        color:#828282;
        
        
        
    }
    .progress-sign{
        text-align:center;
        color:white;
        font-size:12px;
        background-color:#828282;;
        width:1%;
        height:16px;
        border-radius:20px 20px;
    }
    .card-all{
      
        height:100vh;
        width:90%;
        margin-left:20px;
    }
    .header{
        color:black;
        
    }
    .link{
        text-decoration:none;
        color:#D3D3D3;
        transition:0.5s;
    }
    .link:hover{
        color:blue;
        border-bottom: solid blue;
    }
    #part0{
        position:absolute;
        padding:10px;
        width:150px;
        font-size:14.4px;
        text-align:center;
        background-color: #b8c6db;
        background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%);
        color:white;
        box-shadow:0 2px 2px black;
        border-radius:10px 10px;
        transition:0.2s;
    }
    .part-link0{
        text-decoration:none;
        color:black;
        transition:0.5s;

    }
    .part0{
        transition:0.5s;
    }
    .part0:hover{
        background-color:black;
        border-radius:20px 20px;
    }
    .part-link0:hover{
        color:white;
        font-style:italic;
    }
    @media screen and (max-width:600px){
        #part0{
        margin-left:30%;
    }
    #progress-details{
        width:40%;
        font-size:10px;
    }
    .header{
        font-size:20px;
    }
    .progress-sign{
        width:5%;
    }
    }
    @media screen and (max-width:1026px) and (min-width:700px){
        #part0{
        margin-left:100px;
    }
    #part0{
    margin-left:5px;
}
.progress-sign{
        width:3%;
    }
    #progress-details{
        width:23%;
        font-size:10px;
    }

    }
    </style>
<script>

var l=0;
var progress_href=document.getElementById("progress-details");
var part_of_list0=document.getElementById("part0");
part_of_list0.style.display="none";
progress_href.style.display="none";

function list0_on(){
    part_of_list0.style.display="block";
}
function list_on(){
    progress_href.style.display="block";
}

window.addEventListener("click", function(event) {
    part_of_list0.style.display="none";
    progress_href.style.display="none";

});
</script>
