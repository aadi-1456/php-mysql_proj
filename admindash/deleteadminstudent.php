<?php
include "config.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
   

    $sql = "DELETE FROM students where id=$id";
    $result=mysqli_query($mysql_db,$sql);

    header('location: Studentdash.php');
}
?>
