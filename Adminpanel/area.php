<?php
    require './class/apclass.php';
   
?>
<!DOCTYPE HTML>
<html>
<head>
    <title> PROPERTY SEARCH & BOOKING SYSTEM </title>
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
                        <h3>Property Area Table</h3>
                        <div class="bs-example4" data-example-id="contextual-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Area id</th>
                                        <th>Area Name</th>
                                        <th>Area Pincode</th>
                                        <th>City Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                               
                               if(isset($_GET['did']))
                                {
                                    $did = $_GET['did'];
                                    
                                    $deleteq =  mysqli_query($connection, "delete from tbl_area where area_id ='{$did}'") or die(mysqli_errno($connection));
                                   
                                    if($deleteq)
                                    {
                                        echo "<script>alert('Recored Deleted');</script>";
                                    }
                                }
                                 $selectq = mysqli_query($connection, "select * from tbl_area") or die(mysqli_error($connection));
                                    
                                    while($ownerrow = mysqli_fetch_array($selectq))
                                    {
                                        echo "<tr>";
                                        echo "<td>{$ownerrow['area_id']}</td>";
                                        echo "<td>{$ownerrow['area_name']}</td>";
                                        echo "<td>{$ownerrow['area_pincode']}</td>";
                                        echo "<td>{$ownerrow['area_city']}</td>";
                                        echo "<td><a href='area.php?did={$ownerrow['area_id']}'>Delete</a></td>";
                                        
                                        echo "</tr>";
                                    }
                                ?>
                            </table>
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
    </body>
</html>

