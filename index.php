<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="https://png.pngtree.com/png-clipart/20190617/original/pngtree-technology-open-icon-ui-png-image_3840639.jpg">
    <title>Dream Team</title>
</head>

<body>
    <div class="all">
        <div class="header">
            <div class="topbar">
                <div class="topbar_place">
                    <i class="fas fa-map-marker"></i> 34 Dương Thưởng, Hòa Cường Bắc, Hải Châu, Đà Nẵng
                </div>

                <div class="topbar_media">
                    <div class="media_phone">
                        <i class="fas fa-phone"></i>
                        <span>0123456789</span>
                    </div>
                    <div class="media_fb">
                        <a href><i class="fab fa-facebook-f color-while"></i></a>
                        <div class="media_fb_hover media_hover_topleft">
                            <span>Follow on Facebook</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                    <div class="media_insta">
                        <a href><i class="fab fa-instagram color-while"></i></a>
                        <div class="media_insta_hover media_hover_topleft">
                            <span>Follow on Instagram</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                    <div class="media_twitter">
                        <a href><i class="fab fa-twitter color-while"></i></a>
                        <div class="media_twitter_hover media_hover_topleft">
                            <span>Follow on Twitter</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                    <div class="media_ytb">
                        <a href><i class="fab fa-youtube color-while"></i></a>
                        <div class="media_ytb_hover media_hover_topleft">
                            <span>Follow on Youtube</span>
                            <div class="media-hover-square"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="header_main">
                <div class="header_inner">
                    <div class="header_logo">
                        <img class="header_logo_img" src="http://mauweb.monamedia.net/donghohaitrieu/wp-content/uploads/2019/07/logo-mona-2.png" title="Dreamteam">
                    </div>

                    <div class="header_center">
                        <div class="header_search">
                            <input type="search" class="search_web" placeholder="Tìm kiếm">
                        </div>

                        <div class="header_search_logo">
                            <button class="search_btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>

                    <div class="header_right" >
                        <div class="cart" >
                            <a href="./cart.php" class="cart_text">Giỏ Hàng</a>

                            <div class="cart_box">
                                <div class="logo_cart" ><a href="./cart.php">0</a></div>
                            </div>
                        </div>

                        <div class="header_signin">
                            <button class="btn_login js-btn-register" >Đăng Ký</button>
                        </div>

                        <div class="header_login">
                            <button class="btn_login js-btn-login">Đăng Nhập</button>
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
        </div>

        <div class="footer">
            <div class="footer_container">
                <div class="footer_link footer_item">
                    <h3 class="footer_heading ">LIÊN KẾT</h3>
                    <ul>
                        <li><a href="./index.php">Trang chủ</a></li>
                        <li><a href="./dienthoai.php">Điện thoại</a></li>
                        <li><a href="./laptop.php">Laptop</a></li>
                        <li><a href="./tablet.php">Máy tính bảng</a></li>
                        <li><a href="./phukien.php">Phụ kiện</a></li>
                        <li><a href="./contact.php">Liên hệ</a></li>
                    </ul>
                </div>

                <div class="footer_info footer_item">
                    <h3 class="footer_heading ">VỀ DREAMTEAM</h3>
                    <ul>
                        <li><a href="./gtdreamteam/gtdreamteam.html">Giới thiệu DreamTeam</a></li>
                        <li><a href="">Tuyển dụng</a></li>
                        <li><a href="">Điều khoản</a></li>
                        <li><a href="">Chính sách bảo mật</a></li>
                        <li><a href="">Tiếp thị liên kết cùng DreamTeam</a></li>
                    </ul>
                </div>

                <div class="footer_support footer_item">
                    <h3 class="footer_heading">CHĂM SÓC KHÁCH HÀNG</h3>
                    <ul>
                        <li><a href="./customer_support/giaohangvathanhtoan.php">Giao hàng và thanh toán</a></li>
                        <li><a href="./customer_support/chinhsachbaohanh.php">Chính sách bảo hành</a></li>
                        <li><a href="./customer_support/chinhsachdoitra.php">Chính sách đổi trả</a></li>
                        <li><a href="./customer_support/huongdandathang.php">Hướng dẫn đặt hàng</a></li>
                        <li><a href="./customer_support/huongdanbanhang.php">Hướng dẫn bán hàng</a></li>
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
        

    <div class="form-register js-form-register">
        <form class="register__container" id="form_register" action="register_submit.php" method="POST">
            <div class="register-close">
                <i class="fas fa-times"></i>
            </div>
            <header class="register-header">
                Đăng ký
            </header>

            <div class="register-body">
                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="name"class="register-label">
                        Username
                    </label>
                    <input type="text" id="username" name="username"  class="register-input" required placeholder="Username">
                    <span class="form-message"></span>
                </div>

                <div class="form-group " style="margin-bottom: 20px;">
                    <label for="email" class="register-label">
                        Email
                    </label>
                    <input type="text" id="email" name="email"  class="register-input" required placeholder="Email">
                    <span class="form-message"></span>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="password" class="register-label">
                        Mật khẩu
                    </label>
                    <input type="password" name="password"  id="password"  class="register-input" required placeholder="Password">
                    <span class="form-message"></span>
                </div>

                <div class="form-group" style="margin-bottom: 20px;">
                    <label for="repassword" class="register-label">
                        Nhập lại mật khẩu
                    </label>
                    <input type="password"  name="repassword"  id="repassword"  class="register-input" required  placeholder="Retype Password">
                    <span class="form-message"></span>
                </div>

                <p>
                    <?php
                    if( isset($_SESSION["thongbao"])){
                        echo $_SESSION["thongbao"];
                        session_unset("thongbao");
                    }
                    ?>
                </p>
                <button id="register-btn" name="submit">
                    Đăng ký
                </button>
            </div>
            <div style="text-align: center;" class="register_text"> <p>Hoặc đăng ký bằng </p> </div>
                                <div class="register_icon">
                                    <a href=""><i class="fa-brands fa-facebook-square icon"  ><span> Facebook</span> </i></a> 
                                    <a href=""><i class="fa-brands fa-google  icon"><span> Google</span> </i></a>    
                                    <a href=""> <i class="fa-brands fa-github icon"><span> Github</span></i> </a>
                                </div>
        
        </form>
    </div>

    <div class="model_login_main">
    
        <div style="color: #fff; text-align: right;" class="form-login js-form-login">
            <div class="iconclose"><i class="fa-solid fa-xmark"></i></div>
            <form class="login_container"   method="POST" action="login_submit.php">
                <header class="login-header">
                    Đăng nhập
                </header>
    
                <div class="login-body">
                    <div class="form_group_login">
                        <label for="name"class="login-label">
                            Username
                        </label>
                        <input type="text" id="name" class="login-input" required  name="username" placeholder="Username">
                    </div>
                    
                    <div class="form_group_login" >
                        <label for="matkhau" class="login-label">
                            Mật khẩu
                        </label>
                        <input type="password" id="matkhau" class="login-input" required name="password" placeholder="Uassword">
                    </div>
                    <div class="form_group_text">
                        <div style="float: left; color: aliceblue;"> <input type="checkbox" name="rememberme" id="rememberme" value="Remember me"> Remember me</div>
                        <div class="text-wning"> <p ><a href="">Quên mật khẩu?</a></p></div>
                    
                    </div>
    
                    <button class="login-btn" id="login-btn" name="submit_login">
                        Đăng nhập
                    </button>

                    <div class="login-footer" style="color: aliceblue;">
                            <p>To Negister New Account <i class="fa-solid fa-arrow-right-long"></i> </p>
                            <button class="btn_chuyen_register">  CLIKE HERE</button>
                    </div>
                </div>
       
            </form>

        </div>
    </div>
    
           


    <script src="./assets/js/media.js"></script>
    <script src="./assets/js/validator.js"></script>
    <script src="./assets/js/slider.js"></script>
    <script src="./assets/js/login.js"></script>
    
</body>

</html>