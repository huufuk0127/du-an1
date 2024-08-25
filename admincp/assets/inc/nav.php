<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<!-- topbar -->
<div class="topbar">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="full">
            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
            <div class="logo_section">
                <a href="index.html"><img class="img-responsive" src="assets/images/logo/logo.png" alt="#" /></a>
            </div>
            <div class="right_topbar">
                <div class="icon_info">
                    <ul>
                        <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                    </ul>
                    <ul class="user_profile_dd">
                        <li>
                            <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="assets/images/layout_img/user_img.jpg" alt="#" /><span class="name_user"> <?php echo $_SESSION['admin_name']; ?>   </span></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Email:<span><?php echo $_SESSION['admin_email']; ?></span></a>
                                <a class="dropdown-item" href="logout.php">Đăng xuất</a>
                                <a class="dropdown-item" href="login.php"><span>Đăng nhập</span> <i class="fa fa-sign-out"></i></a>
                                <a class="dropdown-item" href="register.php">Đăng ký</a>

                             

                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- end topbar -->