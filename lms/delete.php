<?php
session_start();
$doc=$_SESSION['documents'];
include "db.php";
$sql="DELETE FROM datas WHERE sno=$doc";
if($con->query($sql)){
    header("location:view.php?id=".$_SESSION['del-id']);
    

}
else{
    echo "not";
}
?>