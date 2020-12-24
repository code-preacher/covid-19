<?php
  session_start();
  $id=$_GET['id'];
  include('../config.php');
 mysqli_query($con,"delete from report where id='$id'");
 $_SESSION['xmsg']= '<span style="color:green;">'."Diagnostic Report  was successfully deleted".'</span>';
 header("location:view_diagnose.php");
?>