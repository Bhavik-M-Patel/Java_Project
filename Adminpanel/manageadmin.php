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
                        <h3>Manage Admin</h3>
                        <div class="bs-example4" data-example-id="contextual-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Admin id</th>
                                        <th>Admin name</th>
                                        <th>Admin email</th>
                                        <th>Admin Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php
                                
                                if(isset($_GET['did']))
                                {
                                    $did = $_GET['did'];
                                    
                                    $deleteq =  mysqli_query($connection, "delete from tbl_admin where admin_id ='{$did}'") or die(mysqli_errno($connection));
                                   
                                    if($deleteq)
                                    {
                                        echo "<script>alert('Recored Deleted');</script>";
                                    }
                                }
                                    $selectq = mysqli_query($connection, "select * from tbl_admin") or die(mysqli_error($connection));
                                    
                                    while($ownerrow = mysqli_fetch_array($selectq))
                                    {
                                        echo "<tr>";
                                        echo "<td>{$ownerrow['admin_id']}</td>";
                                        echo "<td>{$ownerrow['admin_name']}</td>";
                                        echo "<td>{$ownerrow['admin_email']}</td>";
                                        echo "<td>{$ownerrow['admin_password']}</td>";
                                        echo "<td> <a href=''>Edit</a> |<a href='manageadmin.php?did={$ownerrow['admin_id']}'> Delete</a></td>";
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

