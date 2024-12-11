<?php 
include 'config.php';
?>
<html>
<head>
<script type="text/javascript" src="jquery-1.6.4.min.js"></script>
<script>
				
				function fun_get_sec(cls)
						{
							  $('#sec').load('get_sec.php?cls='+cls).fadeIn('fast');
							  $('#data').load('get_data.php?cls='+cls).fadeIn('fast');
							  $('#current').load('get_data2.php?cls='+cls).fadeIn('fast');
							 
						}

				function fun_get_capa(sec)
						{
							  $('#capa').load('get_capa.php?sec='+sec).fadeIn('fast');
							  $('#data').load('get_data1.php?sec='+sec).fadeIn('fast');  
							   $('#current').load('get_data3.php?sec='+sec).fadeIn('fast');
						}
						
							function fun_get_excel()
				{
					
					 document.location="get_excel.php";
				}					
							function fun_get_print()
				{
					
					
					 window.open("get_print.php", '_blank');
				}
				</script>
<title> Student Details </title>
</head>
<body>
<form name="main" method="post" action="value.php">
<table border="0" width="100%" align="center">
				<tr>
				<td align="right" width="10%"> Class: </td>
				<td align="left" width="10%">
				<select name="cls" id="cls" onchange="fun_get_sec(this.value)">
				<option value="">---Select---</option>
				<?PHP
				$getdata1=mysqli_query($conn,"select * from main_cls order by sl ") ;
					while($ro1=mysqli_fetch_array($getdata1))
					{	
						$sl=$ro1['sl'];
						$cnm=$ro1['class'];
				?>
				<option value="<?php echo $sl;?>"><?php echo $cnm;?></option>
				<?PHP
					}
				?>
				</select>
				</td>
				
				<td align="right" width="10%"> Sec : </td>
				<td align="left" width="10%">
				<div id="sec">
                <select name="sec" id="sec">
				<option value="">---Select---</option>
				</select>
				</div> 
				</td>
					
			
				<td align="right" width="10%"> Capacity: </td>
				<td align="left" width="10%">
				<div id="capa">
				<input type="text" name="capa" id="capa" value="">
				</div> 
				</td>
				</td>
				</tr>
				
				
				<tr>
				<td align="right" width="10%"> Name : </td>
				<td align="left" width="10%"><input type="text" name="nm" id="nm"></td>
			
				<td align="right" width="10%"> Roll : </td>
				<td align="left" width="10%"><input type="number" name="rl" id="rl"></td>
				
				<td align="right" width="10%"> Current : </td>
				<td align="left" width="10%">
				<div id="current">
				<input type="number" name="count" id="count">
				</div>
				</td>
				</tr>
				<tr>
				<td align="right" width="100%" colspan="4"><input type="submit" value=" SUBMIT ">&nbsp;&nbsp;&nbsp;&nbsp;</td>
				</tr>
				</table>
				</form>
				</body>
				
                 <div id="data">
			
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
<input type="button" value="Excel export" onclick="fun_get_excel()">
<input type="button" value="Print" onclick="fun_get_print()">

</div>


</body>
</html>







