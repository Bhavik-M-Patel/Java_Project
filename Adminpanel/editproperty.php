<?php
require './class/apclass.php';

     $editid = $_GET['eid'];
     
     if(!isset($_GET['eid']) || empty($_GET['eid']))
     {
         header("location:manageproperty.php");
     }
     
     $selectq = mysqli_query($connection, "select * from tbl_property where property_id='{$editid}'") or die(mysqli_error($connection));
     $selectraw = mysqli_fetch_array($selectq);

if ($_POST) 
{
    $id = $_POST['id'];
    $pname = mysqli_real_escape_string($connection, $_POST['pname']);
    $ptype = mysqli_real_escape_string($connection, $_POST['ptype']);
    $pdetails = mysqli_real_escape_string($connection, $_POST['pdetails']);
    $paddress = mysqli_real_escape_string($connection, $_POST['paddress']);
    $pcity = mysqli_real_escape_string($connection, $_POST['pcity']);
    $pcode = mysqli_real_escape_string($connection, $_POST['pcode']);
    $pimage = mysqli_real_escape_string($connection, $_POST['pimage']);

     $query = mysqli_query($connection, "update tbl_property set property_name ='{$pname}',property_type ='{$ptype}',property_details ='{$pdetails}',property_address ='{$paddress}',property_city ='{$pcity}',property_area ='{$pcode}',property_image ='{$pimage}' where property_id='{$id}'") or die(mysqli_error($connection));
    

    if ($query) {
        echo "<script>alert('Record Updated');window.location='manageproperty.php'</script>";
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
                <div class="graphs">
                    <div class="xs">
                        <h3>Property Details</h3>
                        <form id="myform" method="post" class="form-horizontal">
                        <input type="hidden" name="id" value="<?php echo $selectraw['property_id'] ?>">
                        <div class="tab-content">
                           
                                <div class="tab-pane active" id="horizontal-form">
                                    <div class="form-group">
                                        <label for="focusedinput" class="col-sm-2 control-label">Owner Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control1" id="focusedinput"value="<?php echo $selectraw['property_name']?>" name="pname" required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="selector1" class="col-sm-2 control-label">Property Type</label>
                                        <div class="col-sm-8">
                                             <?php 
                                                $q = mysqli_query($connection, "select * from   tbl_property_type") or die(mysqli_error($connection));
                                           echo "<select name='ptype'  id='selecttor1' class='form-control1'>";
                                            while($data = mysqli_fetch_array($q)){
                                                echo "<option value='{$data['property_typeid']}'>{$data['property_typename']}</option>";
                                            }
                                           echo "<select>"; 
                                            ?></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtarea1" class="col-sm-2 control-label">Property Details</label>
                                        <div class="col-sm-8"><textarea value="<?php echo $selectraw['property_details']?>" name="pdetails" id="txtarea1" cols="50" rows="4" class="form-control1" ></textarea></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtarea1" class="col-sm-2 control-label"> Address</label>
                                        <div class="col-sm-8"><textarea name="paddress" value="<?php echo $selectraw['property_address']?>" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="selector1" class="col-sm-2 control-label">Choose Area</label>
                                        <div class="col-sm-8">
                                    
                                            <?php 
                                                $q = mysqli_query($connection, "select * from   tbl_area") or die(mysqli_error($connection));
                                           echo "<select name='pcity' id='selecttor1' class='form-control1'>";
                                            while($data = mysqli_fetch_array($q)){
                                                echo "<option value='{$data['area_id']}'>{$data['area_name']}</option>";
                                            }
                                           echo "<select>"; 
                                            ?>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtarea1" class="col-sm-2 control-label">Pincode</label>
                                        <div class="col-sm-8"><input type="text" class="form-control1 ng-invalid ng-invalid-required ng-valid-pattern ng-touched" ng-model="model.number"value="<?php echo $selectraw['property_area']?>" ng-pattern="/[0-9]/" name="pcode" required></div>
                                    </div>

                                    
                        </div>
                    </div>
                    <div class="bs-example" data-example-id="form-validation-states-with-icons">


                        <div class="form-group">
                            <label for="exampleInputFile">Uplod property image</label>
                            <input type="file" id="exampleInputFile" value="<?php echo $selectraw['property_image']?>" name="pimage">
                            <p class="help-block">Upload your document here.</p>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                <div class="col-sm-8 col-sm-offset-2">
                                    <button type="submit" class="btn-success btn">Submit</button>
                                    <button  class="btn-default btn">Cancel</button>
                                    <button type="reset" class="btn-inverse btn">Reset</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- footer -->

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




