<?php 
    session_start();    
    require("connect.php");
    
    if(!isset($_SESSION["username"])){
        echo "<script language='javascript'>alert('Bạn cần phải đăng nhập!');";
        echo " location.href='index.php';</script>";
    }
    if($_SESSION["level"]!=1){
        header("location: user.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kteam</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>
    
    <link rel="stylesheet" href="./assets/css/level.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>

    <body>
        
        <div class="level_header">
            <div class="level_topbar">
                <div class="level_topbar_place">
                    <i class="fas fa-map-marker"></i> 34 Dương Thưởng, Hòa Cường Bắc, Hải Châu, Đà Nẵng
                </div>

                <div class="level_topbar_media">
                    <div class="level_media_phone">
                        <i class="fas fa-phone"></i>
                        <span>0123456789</span>
                    </div>
                    <div class="level_media_fb">
                        <a href><i class="fab fa-facebook-f color-while"></i></a>
                        <div class="level_media_fb_hover media_hover_topleft">
                            <span>Follow on Facebook</span>
                            <div class="level_media-hover-square"></div>
                        </div>
                    </div>

                    <div class="level_media_insta">
                        <a href><i class="fab fa-instagram color-while"></i></a>
                        <div class="level_media_insta_hover media_hover_topleft">
                            <span>Follow on Instagram</span>
                            <div class="level_media-hover-square"></div>
                        </div>
                    </div>

                    <div class="level_media_twitter">
                        <a href><i class="fab fa-twitter color-while"></i></a>
                        <div class="level_media_twitter_hover media_hover_topleft">
                            <span>Follow on Twitter</span>
                            <div class="level_media-hover-square"></div>
                        </div>
                    </div>

                    <div class="level_media_ytb">
                        <a href><i class="fab fa-youtube color-while"></i></a>
                        <div class="level_media_ytb_hover media_hover_topleft">
                            <span>Follow on Youtube</span>
                            <div class="level_media-hover-square"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="level_header_main">
                <div class="level_header_inner">
                    <div class="level_header_logo">
                        <img class="level_header_logo_img" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png" title="Dreamteam">
                    </div>

                    <div class="level_header_center">
                        <div class="level_header_search">
                            <input type="search" class="level_search_web" placeholder="Tìm kiếm">
                        </div>

                        <div class="level_header_search_logo">
                            <button class="level_search_btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="level_header_right">
                        <div class="level_cart">
                            <span class="level_cart_text">Giỏ Hàng</span>

                            <div class="level_cart_box">
                                <div class="level_logo_cart">0</div>
                            </div>
                         </div>
                         <div class="level_admin">
                             <div class="level_admin_icon">
                                <div class="list-icon-user-menu">
                                    <div style="display: flex;">
                                        <img width="30px" class="img-user" onclick="function_menu()" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwbGozsS9QP10p16rZiCrQD0koXVkI4c7LwUHab9dkmFRcN0VqCkB37f2y0EnySItwykg&usqp=CAU" alt="ảnh user">
                                        <span style="margin: 7% 0 0 10%;"><?php echo $_SESSION["username"] ?></span>
                                    </div>
                                    
                                            <div class="icon_noidung_menu_user" id="icon_noidung_menu_user">
                                                <a href="#" id="js-Thongtincanhan" > <i class="far fa-user" ></i> Thông tin cá nhân</a>
                                                <a href="#" id="js-quangtrithanhvien" > <i class="fa-solid fa-users"></i> Quản trị thành viên</a>
                                                <a href="#" id="js-quangtridonhang" > <i class="fa-solid fa-cubes"></i> Quản lý đơn hàng</a>
                                                <form class="logout__container"  action="logout_out.php" action="" method="POST">
                                                <button name="submit_logout"  class="submit_logout_css"> <i class="fas fa-sign-out-alt"></i> Đăng xuất</button>
                                                </form>
                                             </div>
                                                
                                </div>
                             </div>
                           
                        </div>
                    </div>

                </div>


            </div>
            <div class="menu">
                <a href="./index.php" id="home" class="header_home_text">
                    <span>TRANG CHỦ</span>
                </a>
                <a href="./dienthoai.php" id="phone" class="header_home_text">
                    <span>ĐIỆN THOẠI</span>
                </a>
                <a href="./laptop.php" id="laptop" class="header_home_text">
                    <span>LAPTOP</span>
                </a>
                <a href="./tablet.php" id="tablet" class="header_home_text">
                    <span>MÁY TÍNH BẢNG</span>
                </a>
                <a href="./phukien.php" id="phukien" class="header_home_text">
                    <span>PHỤ KIỆN</span>
                </a>
                <a href="./contact.php" id="contact" class="header_home_text">
                    <span>LIÊN HỆ</span>
                </a>
            </div>
           

           
        </div>
        <div class="main">

                <div class="slider">
                    <i class="fa fa-angle-left slider-prev"></i>
                    <ul class="slider-dots">
                        <li class="slider-dot-item active" data-index="0"></li>
                        <li class="slider-dot-item" data-index="1"></li>
                        <li class="slider-dot-item" data-index="2"></li>
                        <li class="slider-dot-item" data-index="3"></li>
                        <li class="slider-dot-item" data-index="4"></li>
                    </ul>
                    <div class="slider-wrapper">
                        <div class="slider-main">
                            <div class="slider-item">
                                <img src="https://cdn1.hoanghamobile.com/tin-tuc/wp-content/uploads/2022/01/Samsung-Galaxy-S22-Ultra-Black-Renders-2048x1153.png" alt="" />
                            </div>
                            <div class="slider-item">
                                <img src="https://www.asus.com/WebsitesBanner/VN/banners/krwnr6g0sftcvu9d/krwnr6g0sftcvu9d-0_0_desktop_1X.jpg" alt="" />
                            </div>
                            <div class="slider-item">
                                <img src="https://cdn.mos.cms.futurecdn.net/WN8YGBZ2S3ULmHM4ceSSB7.jpg" alt="" />
                            </div>
                            <div class="slider-item">
                                <img src="https://didongviet.vn/tin-tuc/wp-content/uploads/2021/03/dai-dien-iphone-flip-didongviet.jpg" alt="" />
                            </div>
                            <div class="slider-item">
                                <img src="https://cellphones.com.vn/sforum/wp-content/uploads/2021/04/tong-hop-thong-tin-iPhone-13-1.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                    <i class="fa fa-angle-right slider-next"></i>
                </div>

                <div class="product_display">
                    <div class="prod_display_img">
                        <img src="https://cdn1.hoanghamobile.com/tin-tuc/wp-content/uploads/2022/02/1-12.jpeg" alt="">
                    </div>

                    <div class="prod_display_img">
                        <img src="https://images.macrumors.com/t/V4f_3wR-6CZghhi2Iv8qr5FOgzw=/800x0/article-new/2019/07/foldpad-filmic-twitter.jpg?lossy" alt="">
                    </div>

                    <div class="prod_display_img">
                        <img src="https://cdn1.hoanghamobile.com/tin-tuc/wp-content/uploads/2022/02/vivo-nex-5-render-1_1280x720-800-resize.jpg" alt="">
                    </div>
                </div>

                <div class="product_featured">
                <div class="product_heading">
                    <hr>
                    <h1 class="">Sản Phẩm Nổi Bật</h1>
                    <hr>
                </div>
            
                <div class="product_main">
                    <?php 
                        require("connect.php");
                        // $username = $_SESSION["username"];
                        // $username = preg_replace('/\s+/', '', $username);
                        
                        $sql = "select * from product where property = 'noibat' ";
                        $result= mysqli_query($conn , $sql);
                        
                        while($row = mysqli_fetch_assoc($result))
                        {
                    ?>

                            <div class="product_item">
                                <div class="dotthree">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                                <div class="addUpdateDel">
                                    <ul>
                                        <li><a href="">Thêm</a></li>
                                        <li><a href="">Sửa</a></li>
                                        <li><a href="">Xóa</a></li>
                                    </ul>
                                </div>
                                <div class="product_item_img">
                                    <img src="<?php echo './assets/img/' .  $row["imgProduct"]?>" alt="">
                                </div>

                                <div class="product_item_info">
                                    <div class="product_item_name">
                                        <span><?php echo $row["tenSp"] ?></span>
                                    </div>

                                    <div class="product_item_price">
                                        <div class="product_item_price_old">
                                            <?php echo $row["giaSale"] ?><sup>đ</sup>
                                        </div>

                                        <div class="product_item_price_new">
                                            <?php echo $row["gia"] ?><sup>đ</sup>
                                        </div>
                                    </div>

                                    <div class="product_item_cart">
                                        <a href="./insertcart.php?key= <?php echo $row['idProduct']; ?>" class="product_item_cart_btn">
                                            <span>THÊM VÀO GIỎ HÀNG</span>
                                        </a>
                                      
                                        
                                    </div>
                                </div>
                            </div>

                    
                        <?php
                        }
                            mysqli_close($conn);
                        ?>
                </div>

          
                
                <div class="product_heading">
                    <hr>
                    <h1 class="">Sản Phẩm Khuyến Mãi</h1>
                    <hr>
                </div>

                <div class="product_main">
                <?php 
                    require("connect.php");
                    // $username = $_SESSION["username"];
                    // $username = preg_replace('/\s+/', '', $username);
                    
                    $sql = "select * from product where property = 'khuyenmai'";
                    $result=mysqli_query($conn , $sql);
                    
                    while($row = mysqli_fetch_assoc($result))
                    {
                ?>

                    <div class="product_item">
                        <div class="product_item_img">
                            <img src="<?php echo './assets/img/' .  $row["imgProduct"]?>" alt="">
                        </div>

                        <div class="product_item_info">
                            <div class="product_item_name">
                                <span><?php echo $row["tenSp"] ?></span>
                            </div>

                            <div class="product_item_price">
                                <div class="product_item_price_old">
                                    <?php echo $row["giaSale"] ?><sup>đ</sup>
                                </div>

                                <div class="product_item_price_new">
                                    <?php echo $row["gia"] ?><sup>đ</sup>
                                </div>
                            </div>

                            <div class="product_item_cart">
                            <a href="./insertcart.php?key= <?php echo $row['idProduct']; ?>" class="product_item_cart_btn">
                                    <span>THÊM VÀO GIỎ HÀNG</span>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php
                }
                    mysqli_close($conn);
                ?>
                </div>
            </div>

            <div class="footer">
                <div class="footer_container">
                    <div class="footer_link footer_item">
                        <h3 class="footer_heading ">LIÊN KẾT</h3>
                        <ul>
                            <li><a href="./index.html">Trang chủ</a></li>
                            <li><a href="./dienthoai.html">Điện thoại</a></li>
                            <li><a href="./laptop.html">Laptop</a></li>
                            <li><a href="./tablet.html">Máy tính bảng</a></li>
                            <li><a href="./phukien.html">Phụ kiện</a></li>
                            <li><a href="./contact.html">Liên hệ</a></li>
                        </ul>
                    </div>

                    <div class="footer_info footer_item">
                        <h3 class="footer_heading ">VỀ DREAMTEAM</h3>
                        <ul>
                            <li><a href="">Giới thiệu DreamTeam</a></li>
                            <li><a href="">Tuyển dụng</a></li>
                            <li><a href="">Điều khoản</a></li>
                            <li><a href="">Chính sách bảo mật</a></li>
                            <li><a href="">Tiếp thị liên kết cùng DreamTeam</a></li>
                        </ul>
                    </div>

                    <div class="footer_support footer_item">
                        <h3 class="footer_heading">CHĂM SÓC KHÁCH HÀNG</h3>
                        <ul>
                            <li><a href="">Giao hàng và thanh toán</a></li>
                            <li><a href="">Chính sách bảo hành</a></li>
                            <li><a href="">Chính sách đổi trả</a></li>
                            <li><a href="">Hướng dẫn đặt hàng</a></li>
                            <li><a href="">Hướng dẫn bán hàng</a></li>
                        </ul>
                    </div>

                    <div class="footer_contact footer_item">
                        <h3 class="footer_heading">THÔNG TIN LIÊN HỆ</h3>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> 666 ABC3 Nguyễn Hữu Thọ, Phường 22, Hải Châu, Tp.Đà Nẵng</li>
                            <li><i class="fa fa-phone"></i><a href="tel:0123456789"> 0123 456 789</a></li>
                            <li><i class="fa fa-envelope"></i><a href="mailto:dreamteam@gmail.com"> dreamteam@gmail.com</a></li>
                            <li><i class="fab fa-facebook"></i><a href=""> Facebook</a></li>
                            <li><i class="fab fa-instagram"></i><a href=""> Instagram</a></li>
                        </ul>
                    </div>
                </div>

                <div class="footer_copyright">Copyright © 2022 Bản quyền thuộc về DreamTeam
                    <!-- © Bản quyền thuộc về Trần Cường, Nguyễn Thanh Tiến, Đỗ Vạn Lâm -->
                </div>
            </div>
        </div>

      
        
        
        <div class="footer">
            <div class="footer_container">
                <div class="footer_link footer_item">
                    <h3 class="footer_heading ">LIÊN KẾT</h3>
                    <ul>
                        <li><a href="./index.html">Trang chủ</a></li>
                        <li><a href="./dienthoai.html">Điện thoại</a></li>
                        <li><a href="./laptop.html">Laptop</a></li>
                        <li><a href="./tablet.html">Máy tính bảng</a></li>
                        <li><a href="./phukien.html">Phụ kiện</a></li>
                        <li><a href="./contact.html">Liên hệ</a></li>
                    </ul>
                </div>

                <div class="footer_info footer_item">
                    <h3 class="footer_heading ">VỀ DREAMTEAM</h3>
                    <ul>
                        <li><a href="">Giới thiệu DreamTeam</a></li>
                        <li><a href="">Tuyển dụng</a></li>
                        <li><a href="">Điều khoản</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>
                        <li><a href="">Tiếp thị liên kết cùng DreamTeam</a></li>
                    </ul>
                </div>

                <div class="footer_support footer_item">
                    <h3 class="footer_heading">CHĂM SÓC KHÁCH HÀNG</h3>
                    <ul>
                        <li><a href="">Giao hàng và thanh toán</a></li>
                        <li><a href="">Chính sách bảo hành</a></li>
                        <li><a href="">Chính sách đổi trả</a></li>
                        <li><a href="">Hướng dẫn đặt hàng</a></li>
                        <li><a href="">Hướng dẫn bán hàng</a></li>
                    </ul>
                </div>

                <div class="footer_contact footer_item">
                    <h3 class="footer_heading">THÔNG TIN LIÊN HỆ</h3>
                    <ul>
                        <li><i class="fa fa-map-marker"></i> 666 ABC3 Nguyễn Hữu Thọ, Phường 22, Hải Châu, Tp.Đà Nẵng</li>
                        <li><i class="fa fa-phone"></i><a href="tel:0123456789"> 0123 456 789</a></li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:dreamteam@gmail.com"> dreamteam@gmail.com</a></li>
                        <li><i class="fab fa-facebook"></i><a href=""> Facebook</a></li>
                        <li><i class="fab fa-instagram"></i><a href=""> Instagram</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer_copyright">Copyright © 2022 Bản quyền thuộc về DreamTeam
                <!-- © Bản quyền thuộc về Trần Cường, Nguyễn Thanh Tiến, Đỗ Vạn Lâm -->
            </div>
        </div>

        
        <script src="./assets/js/update.js"></script>
        <!-- <script src="./assets/js/media.js"></script>
        <script src="./assets/js/validator.js"></script>
        <script src="./assets/js/slider.js"></script>
        <script src="./assets/js/level.js"></script>
        <script src="./assets/js/pagination.js"></script>
        <script src="./assets/js/login.js"></script> -->

        <!-- <script>
                const  xemchitiet =  document.querySelector(".qtridonhang_xemchitiet");

                const donhang =  document.querySelector(".level_main_quantridonhang_main");
                const back =  document.querySelector(".back_qtridonhang");
                const Maindonhang =  document.querySelector(".level_main_quantridonhang");
                const cuchang = document.querySelector(".level_main_quantridonhang_left");
              
                xemchitiet.addEventListener('click', function (){
                    donhang.classList.add('is-show');
                    Maindonhang.classList.remove('is-show');
                    
                })
                back.addEventListener('click' , function(){
                    donhang.classList.remove('is-show');
                    Maindonhang.classList.add('is-show');
                })

        </script>
        <script  >
                const caidat =  document.getElementById("button_caidat_level");
                const mainnn =document.querySelector(".main");
                const  thongtinuser= document.querySelector(".user_main_thongtinuser");
                const Mainquangtrithanhvien = document.querySelector(".level_main_quantrithanhvien")
                
              
                caidat.onclick = function(){
                            Block(thongtinuser);
                            None(Mainquangtrithanhvien);
                    }

                function Block(e) {
                        e.classList.add('is-show');
                    }
                    function None(e) {
                        e.classList.remove('is-show');
                    }
                    function BNON(e){
                        e.classList.add('not-show')
                    }

        </script>
        <script>
                    const JSthongtincanhan = document.getElementById("js-Thongtincanhan")
                    const JSquangtrithanhvien = document.getElementById("js-quangtrithanhvien")
                    const JSquangtridonhang = document.getElementById("js-quangtridonhang")
                    const anh =  document.getElementById("level_header_logo_img")

                    const thongtincanhan = document.querySelector(".level_main_thongtincanhan")
                    const quangtrithanhvien = document.querySelector(".level_main_quantrithanhvien")
                    const quangtridonhang = document.querySelector(".level_main_quantridonhang")
                    const Mainqtridonhang = document.querySelector(".level_main_quantridonhang_main")
                    const  main = document.querySelector(".main")
                    
                    JSthongtincanhan.onclick = function(){
                        Block(thongtincanhan);
                        None(quangtridonhang);
                        None(quangtrithanhvien);
                        None(Mainqtridonhang);
                        BNON(main);

                        cssbgr(JSthongtincanhan);
                        nocss(JSquangtrithanhvien);
                        nocss(JSquangtridonhang);
                    }
                    JSquangtrithanhvien.onclick = function(){
                        None(thongtincanhan);
                        Block(quangtrithanhvien);
                        None(quangtridonhang);
                        None(Mainqtridonhang);
                        BNON(main);
                        
                        nocss(JSthongtincanhan);
                        cssbgr(JSquangtrithanhvien);
                        nocss(JSquangtridonhang);
                    }
                    JSquangtridonhang.onclick =function(){
                        None(thongtincanhan);
                        None(quangtrithanhvien);
                        Block(quangtridonhang);
                        None(Mainqtridonhang);
                        BNON(main);
                        
                        nocss(JSthongtincanhan);
                        nocss(JSquangtrithanhvien);
                        cssbgr(JSquangtridonhang);
                    }
                   
                    function nocss(e) {
                        e.style.backgroundColor = '#FFF';
                        e.style.borderLeft = 'none';
                        e.style.color = ' #959a9e';
                    }

                function cssbgr(e) {
                    e.style.backgroundColor = '#2d3238';
                    e.style.borderLeft = '3px solid#4095da';
                    e.style.color = '#4095da';
                }

                    
                    function Block(e) {
                        e.classList.add('is-show');
                    }
                    function None(e) {
                        e.classList.remove('is-show');
                    }
                    function BNON(e){
                        e.classList.add('not-show')
                    }
        </script> -->

    </body>
    </html>