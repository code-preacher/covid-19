<?php
session_start();
error_reporting(0);
include '../checklogin.php';
check_login();
$_SESSION['dtmsg']="";
?>
<?php
include '../config.php';
$x=mysqli_query($con,"select * from diagnosis where id='".$_GET['id']."'");
$xx=mysqli_fetch_array($x);

if(isset($_POST['sub'])){
extract($_POST);
$date=date("d-m-y @ g:i A");
$qu=mysqli_query($con,"update diagnosis set fv='$fv',cg='$cg',fq='$fq',ht='$ht',sb='$sb',ba='$ba',ha='$ha',ls='$ls',st='$st',rn='$rn',vm='$vm',dr='$dr',result='$rs',advice='$ad' where id='".$_GET['id']."'");
if($qu){
$_SESSION['dtmsg']='<span style="color:green;">'."Diagnosis was successfully Updated".'</span>';
}
else{
$_SESSION['dtmsg']='<span style="color:red;">'."Diagnosis was not successfully Updated".'</span>';    
}
 header("location:view_diagnosis.php");
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
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Update Diagnosis</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                        <div class="card">
                            <div class="card-title">
                                <h4>UPDATE DIAGNOSIS</h4>

                                <p>
                               
                                <?php if (!empty($_SESSION['xgmsg'])) {
                                    echo $_SESSION['xgmsg'];
                                } 
                                 ?>
                            </p>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="#" method="POST">
                                       <div class="row p-t-20">
                                       <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Fever</label>
                                                    <select class="form-control custom-select" name="fv">
                                                    	<option value="<?php echo $xx['fv']; ?>">
                                                    		<?php
                                                    		if ($xx['fv']=1) {
                                                    			echo "YES";
                                                    		} else {
                                                    			echo "NO";
                                                    		}
                                                    		 ?>
                                                    		</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Cough</label>
                                                    <select class="form-control custom-select" name="cg">
                                                    	<option value="<?php echo $xx['cg']; ?>">
                                                    		<?php
                                                    		if ($xx['cg']=1) {
                                                    			echo "YES";
                                                    		} else {
                                                    			echo "NO";
                                                    		}
                                                    		 ?>
                                                    		</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Fatique or Tiredness</label>
                                                    <select class="form-control custom-select" name="fq">
                                                    	<option value="<?php echo $xx['fq']; ?>">
                                                    		<?php
                                                    		if ($xx['fq']=1) {
                                                    			echo "YES";
                                                    		} else {
                                                    			echo "NO";
                                                    		}
                                                    		 ?>
                                                    		</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                             <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">High Temperature</label>
                                                    <select class="form-control custom-select" name="ht">
                                                    	<option value="<?php echo $xx['ht']; ?>">
                                                    		<?php
                                                    		if ($xx['ht']=1) {
                                                    			echo "YES";
                                                    		} else {
                                                    			echo "NO";
                                                    		}
                                                    		 ?>
                                                    		</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>

                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Difficulty breathing</label>
                                                    <select class="form-control custom-select" name="sb">
                                                    	<option value="<?php echo $xx['sb']; ?>">
                                                    		<?php
                                                    		if ($xx['sb']=1) {
                                                    			echo "YES";
                                                    		} else {
                                                    			echo "NO";
                                                    		}
                                                    		 ?>
                                                    		</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Muscle or Body ache</label>
                                                    <select class="form-control custom-select" name="ba">
                                                    	<option value="<?php echo $xx['ba']; ?>">
                                                    		<?php
                                                    		if ($xx['ba']=1) {
                                                    			echo "YES";
                                                    		} else {
                                                    			echo "NO";
                                                    		}
                                                    		 ?>
                                                    		</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Headache</label>
                                                    <select class="form-control custom-select" name="ha">
                                                    	<option value="<?php echo $xx['ha']; ?>">
                                                    		<?php
                                                    		if ($xx['ha']=1) {
                                                    			echo "YES";
                                                    		} else {
                                                    			echo "NO";
                                                    		}
                                                    		 ?>
                                                    		</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Loss of Taste or Smell</label>
                                                    <select class="form-control custom-select" name="ls">
                                                    	<option value="<?php echo $xx['ls']; ?>">
                                                    		<?php
                                                    		if ($xx['ls']=1) {
                                                    			echo "YES";
                                                    		} else {
                                                    			echo "NO";
                                                    		}
                                                    		 ?>
                                                    		</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Sore Throat</label>
                                                    <select class="form-control custom-select" name="st">
                                                    	<option value="<?php echo $xx['st']; ?>">
                                                    		<?php
                                                    		if ($xx['st']=1) {
                                                    			echo "YES";
                                                    		} else {
                                                    			echo "NO";
                                                    		}
                                                    		 ?>
                                                    		</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Diarrhea</label>
                                                    <select class="form-control custom-select" name="dr">
                                                    	<option value="<?php echo $xx['dr']; ?>">
                                                    		<?php
                                                    		if ($xx['dr']=1) {
                                                    			echo "YES";
                                                    		} else {
                                                    			echo "NO";
                                                    		}
                                                    		 ?>
                                                    		</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="control-label">Running Nose or Congestion</label>
                                                    <select class="form-control custom-select" name="rn">
                                                    	<option value="<?php echo $xx['rn']; ?>">
                                                    		<?php
                                                    		if ($xx['rn']=1) {
                                                    			echo "YES";
                                                    		} else {
                                                    			echo "NO";
                                                    		}
                                                    		 ?>
                                                    		</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                             <div class="col-md-2">
                                                <div class="form-group">
                                                    <label class="control-label">Vomiting</label>
                                                    <select class="form-control custom-select" name="vm">
                                                    	<option value="<?php echo $xx['vm']; ?>">
                                                    		<?php
                                                    		if ($xx['vm']=1) {
                                                    			echo "YES";
                                                    		} else {
                                                    			echo "NO";
                                                    		}
                                                    		 ?>
                                                    		</option>
                                                        <option value="1">YES</option>
                                                        <option value="0">NO</option>
                                                    </select>
                                                     </div>
                                            </div>
                                            
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label class="control-label">Result :</label>
                                                  <input type="text" name="rs" class="form-control" value="<?php echo $xx['result']; ?>" required="required" >
                                                     </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Medical Advice :</label>
                                                  <input type="text" name="ad" value="<?php echo $xx['advice']; ?>" class="form-control" required="required" >
                                                     </div>
                                            </div>
                                        </div>
                                        <center>
                                        <div class="form-actions">
                                        <button type="submit" name="sub" class="btn btn-success col-md-4"> <i class="fa fa-refresh"></i> Update Diagnosis</button>
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
            <!-- footer -->

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
    <script src="js/scripts.js"></script>

</body>

</html>