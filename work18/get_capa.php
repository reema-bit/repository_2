<?php 
include 'config.php';
$sec=$_REQUEST['sec'];

 $query=mysqli_query($conn,"select * from class_dtls where sl='$sec'");
    while($result=mysqli_fetch_assoc($query)){
        $capa=$result['capacity'];
	}

 ?>
<input type="text" name="capa" id="capa" value="<?PHP echo $capa;?>" readonly>