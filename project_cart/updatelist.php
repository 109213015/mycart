<?php
include("conndb.php");

if (isset($_POST["nname"])) { 
    $sqln="UPDATE `list2` SET `name`=\"".$_POST["newname"]."\" where name=\"".$_POST["update"]."\"";
    mysqli_query($db_link, $sqln);	
}

if (isset($_POST["nprice"])) {    
    $sqlp="UPDATE `list2` SET `price`=\"".$_POST["newprice"]."\" where name=\"".$_POST["update"]."\"";
    mysqli_query($db_link, $sqlp);	
}

if (isset($_POST["nnum"])) {     
    $sqlnum="UPDATE `list2` SET `number`=\"".$_POST["newnum"]."\" where name=\"".$_POST["update"]."\"";
    mysqli_query($db_link, $sqlnum);	
}

if (isset($_POST["delp"])) {     
    $sqldel="DELETE FROM `list2` where `name`=\"".$_POST["del"]."\"" ;
    mysqli_query($db_link, $sqldel);	
}

?>

<script type="text/javascript">
    window.location.href='manage.php';
</script>
