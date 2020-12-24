<?php
  session_start();
  $id=$_GET['id'];
  include('../config.php');
 mysqli_query($con,"delete from diagnosis where id='$id'");
 $_SESSION['xmsg']= '<span style="color:green;">'."Diagnosis Data was successfully deleted".'</span>';
 header("location:view_diagnosis.php");
?>