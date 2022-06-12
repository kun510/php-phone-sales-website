<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/hoadon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-clipart/20190617/original/pngtree-technology-open-icon-ui-png-image_3840639.jpg">
    <title>Hoá Đơn</title>
</head>
<body>
<div id="page" class="page">
    <div class="header">
        <div class="logo"><img src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png"/></div>
        <div class="company">DreamTeam_technology</div><br/>
        <div class="diachicpn"><i class="fas fa-map-marker-alt"></i> 34 dương thưởng, hoà cường bắc, Hải châu, Đà Nẵng </div>
        <div class="SDTcpn"><i class="fa-solid fa-mobile"></i> 0123456789</div>
    </div>
  <br/>
  <div class="title">
        HÓA ĐƠN THANH TOÁN
        <br/>
        -------oOo-------
  </div>
  <br/>
  <div class="hoadon_ttkh">

  <?php 
    require("connect.php");
    $idUser = $_SESSION['id'];
    
    $sqll = "select * from user where id = '$idUser' ";
    $resultt= mysqli_query($conn , $sqll);
    $rowww = mysqli_fetch_assoc($resultt);
    $tinh = "abc";
    $huyen ="";

    if(isset($_POST["tinh"])) 
    { $tinh = $_POST['tinh']; }

    if(isset($_POST["huyen"])) 
    { $huyen = $_POST['huyen']; }

    if(isset($_POST["xa"])) 
    { $xa = $_POST['xa']; }
    ?>
    
    <div class="hotenkh">Khách Hàng: <?php echo $rowww['username']; ?></div>
    <div class="sdtkh">SDT: 0358838507</div>
    <div class="diachikh">ĐỊA CHỈ: <?php echo $xa . ", " . $huyen . ", " . $tinh; ?> </div>
  </div>
  <br/>
  <table class="TableData">
  
  <tr>
    <th>STT</th>
    <th>Tên</th>
    <th>Số lượng</th>
    <th>Thành tiền</th>
    
  </tr>
  <?php 
      require("connect.php");
      $idUser = $_SESSION['id'];
      $phigiaohang = 20000;
      $tong =0;
      $sqll = "select * from cart where idUser = '$idUser' ";
      $resultt= mysqli_query($conn , $sqll);
      $stt = 0;
      while($rowww = mysqli_fetch_assoc($resultt))
      {
          $stt +=1;
          $idProduct = $rowww["idProduct"];
          $sql = "select * from product where idProduct = $idProduct";
          $result = mysqli_query($conn , $sql);
          $row = mysqli_fetch_assoc($result);

          $gia = (int)$row["gia"];
          $tamtinh = $gia*$rowww["soluong"];
          $tong += (int)$tamtinh;
          $tenSp = $row['tenSp'];
  ?>
  
    <tr>
      <td><?php echo $stt ?></td>
      <td><?php echo $row["tenSp"]?></td>
      <td><?php echo $rowww["soluong"]?></td>
      <td><?php echo $tamtinh?></td>
    </tr>
    
    
    
 
  <?php
    
                    }
                    mysqli_close($conn);
                ?>
                <tr>
      <td colspan="4" class="tong">Tổng cộng</td>
      <td class="cotSo"><?php echo $tong ?><sup>đ</sup></td>
    </tr>
     </table>
    <div class="day">
        <div class="dayleft">
            <!-- <div class="footer-left" id="hvn"></div>
            <div class="footer-bot"> Khách hàng</div> -->
        </div>

        <div class="dayright">
            <div class="footer-right" id="hvm"></div>
            <div class="footer-bot"> Nhân viên</div>
        </div>
    </div>
    
    <div class="inrahoadon">
      <button onclick="window.print();">IN hoá đơn</button>
    </div>
</div>
</body>
    <script>
    var today = new Date();
    var date ="Đà Nẵng, Ngày"+ '  ' + today.getDate()+ '  ' +"Tháng"+ '  ' + (today.getMonth()+1) + '  '+"Năm" + '  '+ today.getFullYear();
    var time = today.getHours() + "H" + today.getMinutes() + ":" + today.getSeconds();
    var dateTime = date+' '+time;

    // document.getElementById("hvn").innerHTML = dateTime;
    document.getElementById("hvm").innerHTML = dateTime;

    </script>
</html>