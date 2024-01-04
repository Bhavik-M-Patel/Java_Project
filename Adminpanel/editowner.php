<?php

     require './class/apclass.php';
    
     $editid = $_GET['eid'];
     
     if(!isset($_GET['eid']) || empty($_GET['eid']))
     {
         header("location:manageowner.php");
     }
     
     $selectq = mysqli_query($connection, "select * from tbl_seller where seller_id='{$editid}'") or die(mysqli_error($connection));
     $selectraw = mysqli_fetch_array($selectq);
    if($_POST)
    {    
         $id = $_POST['id'];
         $oname = mysqli_real_escape_string($connection, $_POST['oname']);
         $omail = mysqli_real_escape_string($connection, $_POST['omail']);
         $opass = mysqli_real_escape_string($connection, $_POST['opass']);
         $onum = mysqli_real_escape_string($connection, $_POST['onum']);
     
         $query = mysqli_query($connection, "update tbl_seller set seller_name ='{$oname}',seller_email ='{$omail}',seller_password ='{$opass}',seller_mobileno ='{$onum}' where seller_id='{$id}'") or die(mysqli_error($connection));
    
         if($query)
         {
             echo "<script>alert('Record updated');window.location='manageowner.php';</script>";
             
         }
    }    
?>
<!DOCTYPE HTML>
<html>
<head>
    <title> PROPERTY SEARCH & BOOKING SYSREM </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
     <?php
     
        include './theampart/header.php';
     
        include './theampart/sidebar.php';
     
     ?>
      <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>Owner Details</h3>
  	    <div class="well1 white">
                <form id="myform" class="form-floating ng-pristine ng-invalid ng-invalid-required ng-valid-email ng-valid-url ng-valid-pattern" method="post" enctype="multipart/form-data" novalidate="novalidate" ng-submit="submit()">
                    <input type="hidden" name="id" value="<?php echo $selectraw['seller_id'] ?>">
                    <fieldset>
            <div class="form-group">
              <label class="control-label">Enter Name</label>
              <input type="text" re class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $selectraw['seller_name']?>" ng-model="model.name" name="oname" required>
            </div>
            <div class="form-group">
              <label class="control-label">Email</label>
              <input type="email" class="form-control1 ng-invalid ng-valid-email ng-invalid-required ng-touched" value="<?php echo $selectraw['seller_email']?>" ng-model="model.email" name="omail" required>
            </div>
            <div class="form-group">
              <label class="control-label">Password</label>
              <input type="password" class="form-control1 ng-invalid ng-invalid-required ng-touched" value="<?php echo $selectraw['seller_password']?>" ng-model="model.password" name="opass" required>
            </div>
            <div class="form-group">
              <label class="control-label">Contact Number</label>
              <input type="text" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" value="<?php echo $selectraw['seller_mobileno']?>" ng-model="model.number" name="onum" ng-pattern="/[0-9]/" required>
            </div>
            
             <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<script src="mytools/"></script>


<script src="mytools/"></script>


<script src="mytools/jquery.validate.min.js"></script>
<style>
    .error{
        color:red;
    }
</style>
<script>
$().ready(function() {
   $("#myform").validate(); 
});
</script>


</body>
</html>


