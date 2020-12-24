<?php
session_start();
error_reporting(0);
include '../checklogin.php';
check_login();
$_SESSION['dgsmsg']="";

?>
<?php
include '../config.php';
if(isset($_POST['sub'])){
extract($_POST);
$date=date("d-m-y @ g:i A");

$qt=mysqli_fetch_array(mysqli_query($con,"select id from user_login where email='".$_SESSION['email']."' "));
$uid=$qt['id'];

$qu=mysqli_query($con,"select cg,fq,ht,sb,ba,ha,ls,st,rn,vm,dr,result,advice from diagnosis where (cg='$cg' or cg='$fq' or cg='$ht' or cg='$sb' or cg='$ba' or cg='$ha' or cg='$ls' or cg='$st' or cg='$rn' or cg='$vm' or cg='$dr') and (fq='$cg' or fq='$fq' or fq='$ht' or fq='$sb' or fq='$ba' or fq='$ha' or fq='$ls' or fq='$st' or fq='$rn' or fq='$vm' or fq='$dr') and (ht='$cg' or ht='$fq' or ht='$ht' or ht='$sb' or ht='$ba' or ht='$ha' or ht='$ls' or ht='$st' or ht='$rn' or ht='$vm' or ht='$dr') and (sb='$cg' or sb='$fq' or sb='$ht' or sb='$sb' or sb='$ba' or sb='$ha' or sb='$ls' or sb='$st' or sb='$rn' or sb='$vm' or sb='$dr') and (ba='$cg' or ba='$fq' or ba='$ht' or ba='$sb' or ba='$ba' or ba='$ha' or ba='$ls' or ba='$st' or ba='$rn' or ba='$vm' or ba='$dr') and (ha='$cg' or ha='$fq' or ha='$ht' or ha='$sb' or ha='$ba' or ha='$ha' or ha='$ls' or ha='$st' or ha='$rn' or ha='$vm' or ha='$dr') and (ls='$cg' or ls='$fq' or ls='$ht' or ls='$sb' or ls='$ba' or ls='$ha' or ls='$ls' or ls='$st' or ls='$rn' or ls='$vm' or ls='$dr') and (st='$cg' or st='$fq' or st='$ht' or st='$sb' or st='$ba' or st='$ha' or st='$ls' or st='$st' or st='$rn' or st='$vm' or st='$dr') and (rn='$cg' or rn='$fq' or rn='$ht' or rn='$sb' or rn='$ba' or rn='$ha' or rn='$ls' or rn='$st' or rn='$rn' or rn='$vm' or rn='$dr') and (vm='$cg' or vm='$fq' or vm='$ht' or vm='$sb' or vm='$ba' or vm='$ha' or vm='$ls' or vm='$st' or vm='$rn' or vm='$vm' or vm='$dr') and (dr='$cg' or dr='$fq' or dr='$ht' or dr='$sb' or dr='$ba' or dr='$ha' or dr='$ls' or dr='$st' or dr='$rn' or dr='$vm' or dr='$dr')"); 
$r1=mysqli_fetch_array($qu);
$rs=$r1['result'];
$ad=$r1['advice'];
if ($rs>0 && $ad>0) {
$rst=$r1['result'];
$adt=$r1['advice'];
} else {
$rst="no result found";
$adt="no advice found";
}



if($qu){
mysqli_query($con,"insert into report(uid,cg,fq,ht,sb,ba,ha,ls,st,rn,vm,dr,result,date) values('$uid','$cg','$fq','$ht','$sb','$ba','$ha','$ls','$st','$rn','$vm','$dr','$rst','$date')");    
$_SESSION['dgsmsg']='
<div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>DIAGNOSTIC RESULT</h4><hr/>

                                <p>
                        <span class="text-danger">
                            Illness Status: '.$rst.'
                        </span>       
                               </p> <p>
                        <span style="color:#3e0878;">
                             Health Advice : 
                        </span>       
                        <span style="color:#0b154d;">
                           '.$adt.'
                        </span>  
                            </p>

                            </div>
                           

                        </div>
                    </div>
                   
                </div>
                
            </div>';

}


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>SELF-ASSESSMENT COVID-19 RISK EXPOSURE SYSTEM DASHBOARD</title>
    
    <!-- Basic SEO -->
     <meta name="description" content="SELF-ASSESSMENT COVID-19 RISK EXPOSURE SYSTEM ">
    <meta name="keywords" content="SELF-ASSESSMENT COVID-19 RISK EXPOSURE SYSTEM ">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/">
 
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->


    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
   <?php
include "inc/header.php";
   ?>
        <!-- End header header -->
        <!-- Left Sidebar  -->
   <?php
include "inc/sidebar.php";
   ?>     
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Diagnose Now</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->



                                <p>
                               
                                <?php if (!empty($_SESSION['dgsmsg'])) {
                                    echo $_SESSION['dgsmsg'];
                                } 
                                 ?>
                            </p>

            <!-- Container fluid  -->
            <div class="container-fluid">
                 <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>DIAGNOSIS</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#" method="POST">
                                       <div class="row p-t-20">
                                    

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Cough</label>
                                                    <select class="form-control custom-select" name="cg">
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Fatique or Tiredness</label>
                                                    <select class="form-control custom-select" name="fq">
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                             <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">High Temperature</label>
                                                    <select class="form-control custom-select" name="ht">
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Difficulty breathing</label>
                                                    <select class="form-control custom-select" name="sb">
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Muscle or Body ache</label>
                                                    <select class="form-control custom-select" name="ba">
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Headache</label>
                                                    <select class="form-control custom-select" name="ha">
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Loss of Taste or Smell</label>
                                                    <select class="form-control custom-select" name="ls">
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Sore Throat</label>
                                                    <select class="form-control custom-select" name="st">
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Diarrhea</label>
                                                    <select class="form-control custom-select" name="dr">
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Running Nose or Congestion</label>
                                                    <select class="form-control custom-select" name="rn">
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Vomiting</label>
                                                    <select class="form-control custom-select" name="vm">
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            
                                        </div>
   
                                        <br><center>
                                        <div class="form-actions">
                                        <button type="submit" name="sub" class="btn btn-success col-md-4"> <i class="fa fa-stethoscope"></i> Start Diagnosis</button>
                                        <button type="reset" class="btn btn-inverse">Clear</button>
                                    </div></center><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
                   

<!-- FOOTER REGION -->
<?php
include "inc/footer.php";
?>

            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <!--Custom JavaScript -->
    <script src="js/scripts.js"></script>
    

</body>

</html>