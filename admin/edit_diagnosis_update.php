<?php
  session_start();
  include('../config.php');

if(isset($_POST['sub'])){
extract($_POST);
$date=date("d-m-y @ g:i A");
$qu=mysqli_query($con,"update diagnosis set fv='$fv',cg='$cg',fq='$fq',ht='$ht',sb='$sb',ba='$ba',ha='$ha',ls='$ls',st='$st',rn='$rn',vm='$vm',dr='$dr',result='$rs',advice='$ad' where id='".$_GET['id']."'");
if($qu){
$_SESSION['xgmsg']='<span style="color:green;">'."Diagnosis was successfully Updated".'</span>';
}
else{
$_SESSION['xgmsg']='<span style="color:red;">'."Diagnosis was not successfully Updated".'</span>';    
}
}

 header("location:edit_diagnosis.php?id=".$_GET['id']."");
?>