<?php 
include 'config.php';


?>

<body onload="window.print();">

<table border='1' width='100%' align='center'>
							<tr>
							<th>Sl</th>
							<th>Name</th>
							<th>Roll</th>
							<th>Class</th>
							<th>Sec</th>
							<th>Capacity</th>

							<?PHP
							$f=0;

								$get1=mysqli_query($conn,"select * from student ") or die(mysqli_error());
								
								while($ro1=mysqli_fetch_array($get1))
								{	
									$f++;
									$nm=$ro1['name'];
									$rl=$ro1['roll'];
									$clsid=$ro1['clsid'];
									$secid=$ro1['secid'];
									
									
									 $get2=mysqli_query($conn,"select * from main_cls where sl='$clsid'") or die(mysqli_error());
								while($ro2=mysqli_fetch_array($get2))
								{	
									$cls=$ro2['class'];
								}	
									$get3=mysqli_query($conn,"select * from class_dtls where sl='$secid'") or die(mysqli_error());
									
									
								while($ro3=mysqli_fetch_array($get3))
								{	
							
							        $sec=$ro3['sec'];
									$capa=$ro3['capacity'];
									
								}	
								
?>
<tr>
<td><?php echo $f;?></td>
<td><?php echo $nm;?></td>
<td><?php echo $rl;?></td>
<td><?php echo $cls;?></td>
<td><?php echo $sec;?></td>
<td><?php echo $capa;?></td>
</tr>

<?PHP
	}

?>

</table>




