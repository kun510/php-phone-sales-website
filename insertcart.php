<?php 
    session_start();
    require('connect.php');
    
    $idProduct = $_GET["key"];
    $idUser = $_SESSION["id"];

    $sql = " insert into cart (idProduct, idUser) 
    value ($idProduct,$idUser)";
    
    if(mysqli_query($conn, $sql))
    {
    echo "<script language='javascript'>alert('Thêm vào cart thành công');";
    echo "location.href='cart.php';</script>";
    }
    ?>
?>
	