<?php
include'config.php';
$count=$_REQUEST['count'];
$nm=$_POST['nm'];
$rl=$_POST['rl'];
$cls=$_POST['cls'];
$sec=$_POST['sec'];
$capa=$_POST['capa'];

if($capa <= $count)
{
?>
<script language="javascript">
alert('XXXXX .......');
window.history.go(-1);
</script>
<?php	
}
else
{
$query2="INSERT INTO student (name,roll,clsid,secid) VALUE('$nm','$rl','$cls','$sec')";
$result2= mysqli_query($conn,$query2);
$msg="Submitted Sucessfully. thank you";
?>
<script language="javascript">
alert('<?=$msg;?>');
document.location="index.php";
</script>
<?php
}
?>