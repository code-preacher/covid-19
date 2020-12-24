<?php
  session_start();
  $id=$_GET['id'];
  include('../config.php');
 mysqli_query($con,"delete from center where id='$id'");
 $_SESSION['dtmsg']= '<span style="color:green;">'."Center was successfully deleted".'</span>';
 header("location:view_center.php");
?>