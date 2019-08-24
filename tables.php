<?php

include_once('adminnav.php');

?>
<?php
if($email=="")
{
session_destroy();
header('location:adminlogin.php');
}


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/sb-admin.css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>
<body>
	





<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link" href="adminindex2.php?page=1">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="forgotbar.php">
          <i class="fas fa-question"></i>
          <span>Forgot Password</span>
        </a>
      </li>
    
  <li class="nav-item ">
        <a class="nav-link" href="adminlogout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
        </a>
      </li>
    

	      
      <li class="nav-item active">
        <a class="nav-link" href="tables.php?page=1">
          <i class="fas fa-users"></i>
          <span>User details</span>
        </a>
      </li>
    
          </ul>

<?php


include_once('dbcon.php');
$page=$_GET['page'];
$maxrecords=6;
if($page==0)
{
$index=0;	
}

else
{
$index=$page*$maxrecords-$maxrecords;
}

$sql="select *from registration   limit $index,$maxrecords  ";
$res=mysqli_query($con,$sql);

?>
<div id="content-wrapper">

      <div class="container-fluid">

	  
	  
  
	  
	  
	 <div class="card mb-3 table">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table </div>
          <div class="card-body">
            <div class="table-responsive">
			
			
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>S.no</th>
				  <th>Profile</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Age</th>
                    <th>Martial status</th>
                    
                  </tr>
                </thead>
                <tfoot>
                  <tr>
				    <th>S.no</th>
					<th>Profile</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Age</th>
                    <th>Martial status</th>
                    
                  </tr>
                </tfoot>
        
<tbody>
<?php
while($result=mysqli_fetch_array($res))
{
?>
<tr>
	<td><?php echo  $result['no']?></td>
	
                    <td><img src="images/<?php echo  $result[6]?>" height="80" width="80" class="rounded-circle " /><td><?php echo  $result[1]?></td></td>
                    <td><?php echo  md5($result[2])?></td>
                    <td><?php echo md5( $result[4])?></td>
                    <td><?php echo  md5($result[24])?></td>
                    <td><?php echo  md5($result[25])?></td>
</tr>
</tbody>
<?php	
}
?>
</table>
<?php
$sql1="select *from registration ";
$res1=mysqli_query($con,$sql1);
$trecords=mysqli_num_rows($res1);
$tlinks=ceil($trecords/$maxrecords);




?>

<nav>
<ul class="pagination">

<?php

for($a=1;$a<=$tlinks;$a++)
{
echo "
<a href='tables.php?page=$a'  class='page-link' class='nav-link'>".$a."</a>";

}

?>
</ul>
</nav>

</div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>



</body>
</html>
