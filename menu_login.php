<head>
<link rel="shortcut icon" href="http://localhost:8080/chosinhvien/img/favicon.png" type="image/x-icon" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Chosinhvien.me | Kênh rao vặt dành cho Sinh Viên</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://bootswatch.com/flatly/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost:8080/chosinhvien/css/shop-homepage.css" rel="stylesheet">
<link href="http://localhost:8080/chosinhvien/css/login.css" rel="stylesheet">
<script src="http://localhost:8080/chosinhvien/js/jquery.js"></script>
<script src="http://localhost:8080/chosinhvien/js/uploadimg.js"></script>
    <script src="http://localhost:8080/chosinhvien/js/bootstrap.min.js"></script>
 <script src="http://localhost:8080/chosinhvien/js/gotop.js"></script>
 <script src="http://localhost:8080/chosinhvien/js/validador.js"></script>

<?php
///error_reporting(0); // chăn thông báo lỗi
?>
</head>

    <!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed menuleft" data-toggle="collapse" data-target="#menu">
        <span class="sr-only">Trình đơn</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      
    <a class="navbar-brand " style="color:white" href="http://localhost:8080/chosinhvien/index.php"><span class="glyphicon glyphicon-shopping-cart"></span>  Chợsinhviên.me</a>
	
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#search">
     <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </button>
	  
    </div>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav">
	   <li>
                        <a href="http://localhost:8080/chosinhvien/index.php"><span class="glyphicon glyphicon-home"></span> Trang Chủ</a>
                    </li>
          <li>
                        <a href="aboutus.html"><span class="glyphicon glyphicon-exclamation-sign"></span> About us</a>
                    </li>
				
					
                    
						
						
						
						<!-- Search bar PC -->
         <form class="navbar-form navbar-right hidden-sm hidden-xs" role="search" action="http://localhost:8080/chosinhvien/search" method="GET">
      <div class="input-group">
      <input type="text" class="form-control" style="width:350px" name="keyword" placeholder="Bạn muốn tìm gì.."/>
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">  <i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
      </span>
      </form>
	  

<!-- Search bar PC -->

	  
	
      </ul> 





	      <ul class="nav navbar-nav navbar-right">




<?php
    session_start();

//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['email'])) 
{ //chưa đăng nhập
     echo "      <li><a href='http://localhost:8080/chosinhvien/signup.php'><span class='glyphicon glyphicon-pencil'></span> Đăng kí</a></li>
      <li>
    <a href='#' data-toggle='modal' data-target='#login-modal'> <span class='glyphicon glyphicon-user'></span> Đăng nhập</a></li>";
}
else
  { //đã đăng nhâp
    echo " <li><a href='http://localhost:8080/chosinhvien/user/?email=";
    echo $_SESSION['email'];
    echo "'> <span class='glyphicon glyphicon-user'></span> ";

    echo $_SESSION['first_name'];
    echo ' ';
    echo $_SESSION['last_name'];
    echo "<li><a href='http://localhost:8080/chosinhvien/logout.php'><span class='glyphicon glyphicon-off'></span> Đăng Xuất</a></li>";

    
  }
?>



    </ul>
	
    </div>
    <!-- Search bar Mobile -->
    <div class="collapse navbar-collapse hidden-lg" id="search">
      <form class="mobile_search hidden-md hidden-lg" role="search" action="http://localhost:8080/chosinhvien/search" method="GET">
      <div class="input-group">
      <input type="text" class="form-control" name="keyword" placeholder="Bạn muốn tìm gì..."/>
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">  <i class="glyphicon glyphicon-search"></i></button>
      </span>
</form>
    </div>

    <!-- Search bar Mobile -->


  </div><!-- /.container -->
  
</nav>


 <!-- END Navigation -->

 
  
	
	
    <!-- Sign In -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Đăng nhập</h1><br>
				  <form method="POST" action="http://localhost:8080/chosinhvien/loginpost.php">
					<input type="text" name="email" placeholder="Email"  >


					<input type="password" name="password" placeholder="Mật khẩu">
					<input type="submit" class="btn btn-primary" value="Đăng nhập">
				  </form>
					
				  <div class="login-help">
				<a style='color:black' href='http://localhost:8080/chosinhvien/signup.php'><strong>Bạn chưa có tài khoản ?</strong>
				  </div>
				</div>
			</div>
		  </div>
    <!-- Sign In -->
	
	    <!------------------------- END Header -------------->
	
	