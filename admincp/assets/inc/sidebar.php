
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="assets/images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                           <h6><?php echo $_SESSION['admin_name']; ?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Danh sách</h4>
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="admin_page2.php" > <i class="fa fa-dashboard yellow_color"></i><span>Trang chủ</span></a>
                     </li>
                     <li>
                        <a href="donhang.html" ><i class="fa fa-object-group blue2_color"></i> <span>Đơn hàng</span></a>
                        
                     </li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-briefcase blue1_color"></i> <span>Sản phẩm</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="themdon.php">> <span>Thêm sản phẩm</span></a></li>
                           <li><a href="qldon.php">> <span>Quản lí sản phẩm</span></a></li>
                        </ul>
                     </li>
                    
                     <li>
                        <a href="phanhoi.html">
                        <i class="fa fa-paper-plane red_color"></i> <span>Phản hồi</span></a>
                     </li>
                     <li><a href="settings.html"><i class="fa fa-cog yellow_color"></i> <span>Cài đặt</span></a></li>
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
