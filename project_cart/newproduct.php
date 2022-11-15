<?php
include("conndb.php");

if (isset($_POST["pnew"])) { 
    $sql="INSERT INTO `list2`(`Id`, `name`, `number`, `price`) VALUES (";
    $sql.="'".$_POST["id"]."',";
    $sql.="'".$_POST["name"]."',";
    $sql.="'".$_POST["num"]."',";
    $sql.="'".$_POST["price"]."')";
    mysqli_query($db_link, $sql);	
}
?>
<script type="text/javascript">
    window.location.href='manage.php';
</script>

