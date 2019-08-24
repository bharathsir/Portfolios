<?php


include_once('fixnav.php');


?>
<?php
$id=$_GET['id'];
include_once('dbcon.php');
$select1="select *from musicta where movie='$id'";
$result1=mysqli_query($con,$select1);



?>
<?php
$music=mysqli_fetch_array($result1);

?>
<?php
$email=$_SESSION['email'];
if($email=="")
{
session_destroy();
header('location:music.php');
}

?>

<style type="text/css">
*
{
margin:0px;
padding:0px;
}

.audio
{
color:yellow;	
}

	



</style>
<br />
<h3 class="ml-5"><?php echo $music[1]?></h3>
<div class="container">
<div class="row">

<div class="col-lg-8">
<img src="images/<?php echo $music[2]?>" height="350" width="350"  />




</div>

<div class="col-lg-4">
<table>
<tr>
<td><?php echo $music[3]?></td>
</tr>
<tr>
<td><audio controls>
  <source src="songs/<?php echo $music[3]?>.ogg" type="audio/ogg">
  <source src="songs/<?php echo $music[3]?>.mp3" type="audio/mpeg">
  
</audio>
</td>

</tr>
<tr>
<td><?php echo $music[4]?></td>
</tr>
<tr>
<td><audio controls>
  <source src="songs/<?php echo $music[4]?>.ogg" type="audio/ogg">
  <source src="songs/<?php echo $music[4]?>.mp3" type="audio/mpeg">
  
</audio>
</td>

</tr>



<tr>
<td><?php echo $music[5]?></td>
</tr>
<tr>
<td><audio controls>
  <source src="songs/<?php echo $music[5]?>.ogg" type="audio/ogg">
  <source src="songs/<?php echo $music[5]?>.mp3" type="audio/mpeg">
  
</audio>
</td>

</tr>



<tr>
<td><?php echo $music[6]?></td>
</tr>
<tr>
<td><audio controls>
  <source src="songs/<?php echo $music[6]?>.ogg" type="audio/ogg">
  <source src="songs/<?php echo $music[6]?>.mp3" type="audio/mpeg">
  
</audio>
</td>

</tr>
 
 
 
 
 <tr>
<td><?php echo $music[7]?></td>
</tr>
<tr>
<td><audio controls>
  <source src="songs/<?php echo $music[7]?>.ogg" type="audio/ogg">
  <source src="songs/<?php echo $music[7]?>.mp3" type="audio/mpeg">
  
</audio>
</td>

</tr>



<tr>
<td><?php echo $music[8]?></td>
</tr>
<tr>
<td><audio controls>
  <source src="songs/<?php echo $music[8]?>.ogg" type="audio/ogg">
  <source src="songs/<?php echo $music[8]?>.mp3" type="audio/mpeg">
  
</audio>
</td>

</tr>



</table>




</div>






</div>





</div>
<?php
include_once('fixfoot.php');


?>


