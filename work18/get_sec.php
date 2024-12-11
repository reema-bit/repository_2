<?php 
include 'config.php';
$cls=$_REQUEST['cls'];
?>
<select name="sec" id="sec" onchange="fun_get_capa(this.value)">
<option value="">---Select---</option>
<?php
    $query=mysqli_query($conn,"select * from class_dtls where clsid='$cls'");
    while($result=mysqli_fetch_assoc($query)){
        $sl=$result['sl'];
        $scnm=$result['sec'];
        ?>
        <option value="<?php echo $sl;?>"><?php echo $scnm; ?></option>
        <?php
    }
    ?>
</select>
