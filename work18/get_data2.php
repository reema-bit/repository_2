<?php 
include 'config.php';
$cls=$_REQUEST['cls'];

							$f=0;

								$get1=mysqli_query($conn,"select * from student where clsid='$cls'") or die(mysqli_error());
								$count=mysqli_num_rows($get1);
														
?>
	<input type="number" name="count" id="count" value="<?php echo $count ?>" readonly>



