<?php
session_start();
$id=$_SESSION['sno'];
$_SESSION['id']=$id;
if(!$_SESSION['username']){
    header("location:login.php");
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
    <link rel="stylesheet" href="clock.css" type="text/css"> 
    
    <title>home</title>
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
          <a class="nav-link active" aria-current="page" href="home.php?id=<?php echo $id?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="profile.php?id=<?php echo $id ?>">Profile</a>
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

    <!---
    <a href="view.php? id=<?php echo $id; ?>" style="text-decoration:none;color:black;font-weight:bold;">
        Data Structures
</a>-->
<div class="cont">
    <div class="container-fluid headline">
    <h4>Course Overview</h4>
</div>
<div class="progress1">
    <ul class="progress2">
        <li>
            <a class="pr3" href="#">In Progress
</a>
</li>
<li>
    <a class="pr3" href="#">Past</a>
</li>
<li>
    <a class="pr3" href="#">
        Removed from view</a>
</li>
</ul>
<hr>
</div>
<div class="courses-name">
    <a class="courses-name-link" href="javascript:list_on()">
    <i class="fa fa-level-up" style="font-size:24px;margin-right:10px;"></i>courses name<i class="fa fa-sort-down" style="font-size:15px;margin-left:10px;margin-top:2px;"></i>
</a>
        <div id="part">
           <div class="part1"><a href="#" class="part-link"> Courses Name</a></div>
            <br>
            <div class="part1"><a href="https://stackoverflow.com/" class="part-link"> Last Access</a></div>
</div>

</div>

<div class="courses-card">
    <ul>
        
        <li class="courses-card-part">
            <div class="card-bor">
                <a class="img-hov" href="#"><img src="pictures/demo.jpg" class="card-image"></a>
                <div class="card-button"><a href="#"></a></div>
                <div class="card-write">
                    <a href="view.php?id=<?php echo $_SESSION['id'];?>" class="card-sub">Data Structures and Algorithm</a>
</div>
</div>
</li>
<li class="courses-card-part" >
<div class="card-bor">
<a class="img-hov" href="#"><img src="pictures/demo.jpg" class="card-image" ></a>
<div class="card-button"></div>
<div class="card-write">
<a href="#" class="card-sub">Basic Electronics</a>
</div>
</div>
</li>
<li>

</li>
<li class="courses-card-part" >
<div class="card-bor">
<a class="img-hov" href="#"><img src="pictures/demo.jpg" class="card-image" ></a>
<div class="card-button"><a href="#"><div class="dot"></div><div class="dot"></div><div class="dot"></div></a></div>
<div class="card-write">
<a href="#" class="card-sub">Numerical Methods</a>
</div>
</div>
</li>
<li class="courses-card-part" >
<div class="card-bor">
<a class="img-hov" href="#"><img src="pictures/demo.jpg" class="card-image" ></a>
<div class="card-button"><a href="#"><div class="dot"></div><div class="dot"></div><div class="dot"></div></div></a>
<div class="card-write">
<a href="#" class="card-sub">Object Oriented programming</a>
</div>
</div>
</li>

</ul>
</div>

</div>


<div class="right-side">
    <div class="timeline">
        <div class="timeline-head">
        Timeline
</div>
<div class="btn404">

    <a class="btn12" href="javascript:list1_on()" style="margin-right:100px;"><i class="fas fa-clock" style="margin-right:20px;font-size:13px;color:black;"></i><i class="fa fa-caret-down" style="color:#A9A9A9;"></i>
</a>

    <div id="part1">
           <div class="part2"><a href="#" class="part-link1"> Courses Name</a></div>
            <br>
            <div class="part2"><a href="https://stackoverflow.com/" class="part-link1"> Last Access</a></div>
</div>


   
   
    <a class="btn12" href="javascript:list2_on()"><i class="fa fa-sort-amount-asc" style="margin-right:20px;font-size:13px;color:black;"></i><i class="fa fa-caret-down" style="color:#A9A9A9;"></i></a>
    <div id="part2">
           <div class="part3"><a href="#" class="part-link2"> Courses 2</a></div>
            <br>
            <div class="part3"><a href="https://stackoverflow.com/" class="part-link2"> Last Access 2</a></div>
</div>

</div>


<div class="time-head">
No upcoming activities due
</div>
</div>
<article class="clock">

<div class="hours-container">
    <div class="hours"></div>
  </div>
  <div class="minutes-container">
    <div class="minutes"></div>
  </div>
  <div class="seconds-container">
    <div class="seconds"></div>
  </div>
  <!---<script src="clock.js"></script>-->
  <script>
      function initLocalClocks() {
    // Get the local time using JS
    var date = new Date();
    var seconds = date.getSeconds();
    var minutes = date.getMinutes();
    var hours = date.getHours();
    //console.log(seconds);
    // Create an object with each hand and it's angle in degrees
    var hands = [
      {
        hand: 'hours',
        angle: (hours * 30) + (minutes / 2)
      },
      {
        hand: 'minutes',
        angle: (minutes * 6)
      },
      {
        hand: 'seconds',
        angle: (seconds * 6)
      }
    ];
    // Loop through each of these hands to set their angle
    for (var j = 0; j < hands.length; j++) {
      var elements = document.querySelectorAll('.' + hands[j].hand);
      for (var k = 0; k < elements.length; k++) {
          elements[k].style.webkitTransform = 'rotateZ('+ hands[j].angle +'deg)';
          elements[k].style.transform = 'rotateZ('+ hands[j].angle +'deg)';
          // If this is a minute hand, note the seconds position (to calculate minute position later)
          if (hands[j].hand === 'minutes') {
            elements[k].parentNode.setAttribute('data-second-angle', hands[j + 1].angle);
          }
      }
    }
  }
  initLocalClocks()
      </script>
</article>
<div class="cal-year">2021
</div>
<a href="#" class="event">add event</a>
<div class="cal-month">jan</div>
<div class="calender1">
<table class="cal-table">
    <tr>
        <th id="day" value="Sun">
            Mon
</th>
<th id="day" value="Sun">
    Tue
</th>
<th id="day" value="Tue">
    Wed
</th>
<th id="day" value="Wed">
    Thu
</th>
<th id="day" value="Thu">
    Fri
</th>
<th id="day" value="Fri">
    Sat
</th>
<th id="day" value="Sat">
    Sun
</th>

</tr>
<tbody class="daylist">

</tbody>
</table>
<ul>
    <li class="month-change1"><a href="#" class="back">prev</a>
</li>
<li class="month-change">
    <a href="#" class="next">
    next
</a>
</li>
</ul>
</div>

</div>

<hr class="hr1">
<div class="footer">jisuniversity</div>
</body>

</html>
<style>
    .back{
        color:black;
        text-decoration:none;
    }
    .next{
        color:black;
        text-decoration:none;
    }
    .month-change{
        margin-left:80px;
    }
    #day{
        margin-left:2px;
        margin-right:5px;
    }
    .active2{
    background-color:black;
    color:white;
    border-radius:20px 20px;
    font-weight: bold;
}
    .cal-table{
        border:2px solid black;
    }

    body{margin:0;
    font-family:Times New Roman;
  
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
    .navbar12{
            width:100%;
    }
    .cont{
        box-sizing:border-box;
        margin-top:20px;
        margin-left:20px;
        color:black;
        float:left;
        width:70%;
    
    }
    .headline{
        padding:20px;
        border:none;
        
    }
    .cont ul li{
        list-style-type:none;
        display:inline-block;
    }
    .cont .pr3{
        margin:1px;
        text-decoration:none;
        color:black;
        transition:0.1s;
        font-size:14.4px;
        margin:18px;
        font-family: Arial, Helvetica, sans-serif;

    }
    .pr3:hover{
        border-style:solid;
        border-color:silver;
        border-width: 1px;
        border-radius:10px 10px;
        box-shadow:0 4px 4px black;
        color:black;

    }
    .cont hr{
        margin-left:20px;
        width:100%;
    }
    .cont .courses-name{
        margin:17px;
    }
    .cont .courses-name .courses-name-link{
        border-style:solid;
        border-color:white;
        border-radius:10px 10px;
        box-shadow:0 2px 2px black;
        text-decoration:none;
        color:black;
        border-width:10px;
        transition:0.2s;


    }
    .cont .courses-name .courses-name-link:hover{
        box-shadow:0 5px 5px black;
    }

    @media screen and (max-width:600px){
    
        .navbar12{
            width:100%;
    }
        .cont{
            width:90%;
        }
        .cont hr{
            margin-left:20px;
        width:90%;
        }
        .card-bor{
            width:95%;
        }
        .card-bor .card-image{
            width:100%;
        }
        .right-side{
            padding:10px;
            left:50%;
            text-align:center;
            width:73%;
          
            
           }
        .cont .pr3{
            font-size:13.4px;
            margin-left:2px;
        }
        .right-side .clock{
            width:100%;
            
            
          
        }

        .right-side .calender1{
       
            margin:auto;
           width:100%;
           margin-left:3%;
        background-color:black;
        
    }
    .right-side .cal-month{
       
       margin:auto;
       
      width:100%;
      margin-left:3%;
   background-color:black;
   
}
.right-side .cal-year{
       
       margin:auto;
       
      width:100%;
      margin-left:3%;
   background-color:black;
   
}
    #part0{
        margin-left:30%;
    }
    .btn12{
        margin-left:-20px;
    }
   
    }
    .card-bor{
        border-style:solid;
        border-color:white;
        border-radius:20px 20px;
        margin:3px;
        
        text-align:center;
        
    }
    .card-bor .card-image{
        height:50%;
        object-fit:cover;
        border-radius:10px 10px;

    }
    .card-bor .card-write{

        border-radius:10px 10px;
    }
    .card-sub{
        color:black;
        text-decoration:none;
        font-size:22px;
        transition:0.1s;
    }
    .card-sub:hover{
        color:	#808080;
        text-decoration:underline;
    }

    .img-hov{
        text-decoration:none;
        transition:0.2s;
    }
    .clock{
        margin-top:55px;
    }

    #part{
        padding:10px;
        width:150px;
        font-size:14.4px;
        text-align:center;
        background-color: #2f4353;
        background-image: linear-gradient(315deg, #2f4353 0%, #d2ccc4 74%);
        color:white;
        box-shadow:0 2px 2px black;
        border-radius:10px 10px;
        transition:0.2s;

    }
    #part1{
        
        padding:15px;
        width:150px;
        position:absolute;
        font-size:14.4px;
        text-align:center;
        background-color: #e3efe8;
        background-image: linear-gradient(315deg, #e3efe8 0%, #96a7cf 74%);
        color:white;
        box-shadow:0 2px 2px black;
        border-radius:10px 10px;
        transition:0.2s;
        


    }
    #part2{
        padding:15px;
        margin-left:90px;
        width:150px;
        position:absolute;
        font-size:14.4px;
        text-align:center;
        background-color: #e3efe8;
        background-image: linear-gradient(315deg, #e3efe8 0%, #96a7cf 74%);
        color:white;
        box-shadow:0 2px 2px black;
        border-radius:10px 10px;
        transition:0.2s;
        


    }
    #part2 .part3{
        transition:0.5s;
    }
    #part2 .part3:hover{
        background-color:black;
    }
    #part2 .part3 .part-link2{
        text-decoration:none;
        color:black;
        transition:0.6s;
    }
    #part2 .part3 .part-link2:hover{
        color:white;
    }
    #part1 .part2{
        transition:0.5s;
    }
    #part1 .part2:hover{
        background-color:black;
    }
    #part1 .part2 .part-link1{
        text-decoration:none;
        color:black;
        transition:0.6s;
    }
    #part1 .part2 .part-link1:hover{
        color:white;
    }
    #part .part1{
        width:100%;
        transition:0.6s;

    }
    #part .part1:hover{
        background-color:#d3d3d3;
    }
    #part .part1 .part-link{
        text-decoration:none;
        color:#f8f8ff;
        font-weight:bold;
    }
    #part .part1 .part-link:hover{
        color:black;
    }
    .fa-sort-down{
        color:#808080;
    }
    .fa-level-up{
        color:	#A9A9A9;
    }
    .right-side{
       float:right;
       margin-top:30px;
     
       margin-right:50px;
       
       
    }
    /*
    main calender1
    */ 
    .right-side .calender1{
        padding:18px;
        color:black;
        
        background-color: #ffffff;
        background-image: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);
        font-size:18px;
        white-space: nowrap;

    }
    .right-side ul li{
        margin-top:20px;
        list-style-type:none;
        display:inline-block;
    }
    .cal-year{
        text-align:center;
        padding:20px;
        background-color: #f8f9d2;
        background-image: linear-gradient(315deg, #f8f9d2 0%, #e8dbfc 74%);
        color:black;
        font-size:20px;
    }
    .cal-month{
        text-align:center;
        padding:20px;
        background-color: #d8dede;
        background-image: linear-gradient(315deg, #d8dede 0%, #e5bdf6 74%);
        color:black;
        font-size:20px;
    }
    .hr1{
        width:100%;
        color:black;
    
    }
    .timeline{
        padding:15%;
        width:100%;
      
       background-color: #f3e6e8;
      
        background-image: linear-gradient(315deg, #f3e6e8 0%, #d5d0e5 74%);
        border-radius:20px 20px;
        text-align:center;
    }

    .timeline .timeline-head{
        font-size:25px;
        color:black;
    }
    .btn404{
        padding:20px;
        margin-left:-35px;
        width:280px;

    }
    .btn12{
        border-radius:10px 10px;
        padding:10px;
        background-color: #ffffff;
        background-image: linear-gradient(315deg, #ffffff 0%, #d7e1ec 74%);
        border:none;
        color:color;
        text-decoration:none;
        box-shadow:0 2px 2px black;
        

    }
@media screen and (max-width:1024px) and (min-width:700px){
 .courses-card{
    width:500px;
 }
    .cont hr{
            margin-left:20px;
        width:75%;
        }
    .card-bor{
            width:75%;
          
        }
        .card-bor .card-image{
            width:100%;
        }
    .right-side{
            padding:5px;
            left:49%;
            margin-left:-16%;
            text-align:center;
            width:33%;
         
            
           }
        .cont .pr3{
            font-size:13.4px;
            margin-left:2px;
        }
        .right-side .clock{
            width:100%;
            
            
          
        }

        .right-side .calender1{
       
            margin:auto;
           width:100%;
           margin-left:3%;
        background-color:black;
        
    }
    .right-side .cal-month{
       
       margin:auto;
       
      width:100%;
      margin-left:3%;
   background-color:black;
   
}
.right-side .cal-year{
       
       margin:auto;
       
      width:100%;
      margin-left:3%;
   background-color:black;
   
}
    #part0{
        margin-left:100px;
    }
.btn12{
    margin-left:-40px;
}
.time-head{
    font-size:10px;
    font-weight:bold;
    letter-spacing:1px;
}

.clock{
    margin-bottom:40px;
    margin-left:-6px;
}
#part0{
    margin-left:5px;
}
}
.event{
    text-decoration:none;
    color:black;

}
    </style>
<script>
    
    var l=0;
    var part_of_list=document.getElementById('part');
    var part_of_list1=document.getElementById('part1');
    var part_of_list2=document.getElementById('part2');
    var part_of_list0=document.getElementById("part0");
    part_of_list0.style.display="none";
    part_of_list.style.display="none";
    part_of_list1.style.display="none";
    part_of_list2.style.display="none";
    function list0_on(){
        part_of_list0.style.display="block";
    }
    function list_on(){
        part_of_list.style.display="block";
    }
    function list1_on(){
        part_of_list1.style.display="block";
    }
    function list2_on(){
        part_of_list2.style.display="block";
    }
    window.addEventListener("click", function(event) {
        part_of_list0.style.display="none";
        part_of_list.style.display="none";
        part_of_list1.style.display="none";
        part_of_list2.style.display="none";

});

/*
var val1=document.querySelector('.calender1').children[0].children[4].children[0].getAttribute('data-value')
console.log(val1)*/

//setInterval(showdate,1000)
function showdate(){

var day_val=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]
var cal=document.querySelector(".calender1");

let value1=new Date();
let day=value1.getDate();
let mon=value1.getMonth();
let year=value1.getFullYear();
var no_day=new Date(year,mon+1,0)
document.querySelector(".back").addEventListener("click",back)
function back(){
    var no_day=new Date(year,mon,0)
    console.log(no_day)
    
}

console.log(no_day)

//console.log(no_day)
let no_of_day=no_day.getDate();

console.log(no_of_day)
var c=0
var monthName = value1.toLocaleString("default", {month: "long"});
var day_val=document.querySelector(".daylist");
var gaps=mon;
var v1=document.createElement("tr");
for(let i=0;i<no_of_day+gaps;i++){
    if(i-gaps>=0){
    if(c>=7)
    {
        var v1=document.createElement("tr");
        var e1=document.createElement("td");
        e1.innerHTML=i-gaps+1
        v1.appendChild(e1)
        day_val.appendChild(v1)
        c=1
    }
    else{
        if(i-gaps+1===day){
        var e1=document.createElement("td");
        e1.setAttribute("class","active2");
        e1.innerHTML=i-gaps+1
        v1.appendChild(e1)
        day_val.appendChild(v1)
        c=c+1
        }
        else{
            var e1=document.createElement("td");
        e1.innerHTML=i-gaps+1
        v1.appendChild(e1)
        day_val.appendChild(v1)
        c=c+1
        }
    }
}
else{
        var e1=document.createElement("td");
        e1.innerHTML=""
        v1.appendChild(e1)
        day_val.appendChild(v1)
        c=c+1   
}
    
}


/*
if(day.toString()===val){
    document.querySelector('.fifteen ').style.backgroundColor="red";
}*/

document.querySelector('.cal-year').innerHTML="Year:"+" "+year;
document.querySelector('.cal-month').innerHTML="Month:"+" "+monthName;
var i=0;
var count=0;


}
showdate();

    </script>
    