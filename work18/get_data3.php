<?php 
include 'config.php';
$sec=$_REQUEST['sec'];
							$f=0;

								$get1=mysqli_query($conn,"select * from student where secid='$sec'") or die(mysqli_error());
								$count=mysqli_num_rows($get1);
														
?>
	<input type="number" name="count" id="count" value="<?php echo $count ?>" readonly>



