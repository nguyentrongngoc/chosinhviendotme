

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

      
    <a class="navbar-brand" href="http://localhost:8080/chosinhvien/index.php"><span class="glyphicon glyphicon-shopping-cart"></span>  Chợsinhviên.me</a>
	
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#search">
     <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
      </button>
	  
    </div>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav">
          <li>
                        <a href="http://localhost:8080/chosinhvien/aboutus.php"><span class="glyphicon glyphicon-exclamation-sign"></span> Giới thiệu</a>
                    </li>
				
						
						<!-- Search bar PC -->
         <form   data-toggle="validator" class="navbar-form navbar-right hidden-sm hidden-xs" role="search" action="http://localhost:8080/chosinhvien/search" method="GET">
      <div class="input-group">
      <span class="input-group-btn">
        <select class="form-control" style='max-width:20%;' name="address" id="address">
                                      <option value="TP.HCM">TP.HCM</option>
                                      <option value="ĐH CNTT">ĐH Công nghệ thông tin</option>
                                      <option value="ĐH CNTT">ĐH Công nghệ thông tin</option>
                                      <option value="ĐH KHXHNV">ĐH Khoa học XH và NV</option>
                                      <option value="ĐH B.Khoa">ĐH Bách Khoa</option>
                                      <option value="ĐH KHTN">ĐH Khoa học Tự nhiên</option>
                                      <option value="ĐH Q.Tế">ĐH Quốc tế</option>
                                      <option value="ĐH KTLuật" >ĐH Kinh Tế Luật</option>
                                      <option value="KHoa Y">Khoa Y</option>
                                      <option value="Quận 1">Quận 1</option>
                                      <option value="Quận 2">Quận 2</option>
                                      <option value="Quận 3">Quận 3</option>
                                      <option value="Quận 4">Quận 4</option>
                                      <option value="Quận 5">Quận 5</option>
                                      <option value="Quận 6">Quận 6</option>
                                      <option value="Quận 7">Quận 7</option>
                                      <option value="Quận 8">Quận 8</option>
                                      <option value="Quận 9">Quận 9</option>
                                      <option value="Quận 10">Quận 10</option>
                                      <option value="Quận 11">Quận 11</option>
                                      <option value="Quận 12">Quận 12</option>
                                      <option value="Quận T.Đức">Quận Thủ Đức</option>
                                      <option value="Quận G.Vấp">Quận Gò Vấp</option>
                                      <option value="Quận B.Thạnh">Quận Bình Thạnh</option>
                                      <option value="Quận T.Bình">Quận Tân Bình</option>
                                      <option value="Quận T.Phú">Quận Tân Phú</option>
                                      <option value="Quận P.Nhuận">Quận Phú Nhuận</option>
                                      <option value="Quận B.Tân">Quận Bình Tân</option>
                            </select>
      <input type="text" class="form-control" style="width:275px" name="keyword" placeholder="Bạn muốn tìm gì.."  required/>
      
        <button class="btn btn-default" style='border-top-right-radius: 4px;border-bottom-right-radius: 4px;' type="submit">  <i class="glyphicon glyphicon-search"></i> Tìm kiếm</button>
      </span>
      </div>
      </form>
	  

<!-- Search bar PC -->
	
      </ul>
	      <ul class="nav navbar-nav navbar-right">




<?php

//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['id_member'])) 
{ //chưa đăng nhập
     echo "      <li><a href='http://localhost:8080/chosinhvien/signup.php'><span class='glyphicon glyphicon-pencil'></span> Đăng kí</a></li>
      <li>
    <a href='#' data-toggle='modal' data-target='#login-modal'> <span class='glyphicon glyphicon-user'></span> Đăng nhập</a></li>";
}
else
  { //đã đăng nhâp
    echo " <li><a href='http://localhost:8080/chosinhvien/user/?id_member=";
    echo $_SESSION['id_member'];
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

      <form  data-toggle="validator" class="mobile_search hidden-md hidden-lg" role="search" action="http://localhost:8080/chosinhvien/search" method="GET">
      <div class="input-group">
        <span class="input-group-form">
       
        <select class="form-control" name="address" id="address"  style="width:35%">
                                      <option value="TP.HCM">TP.HCM</option>
                                      <option value="ĐH CNTT">ĐH Công nghệ thông tin</option>
                                      <option value="ĐH CNTT">ĐH Công nghệ thông tin</option>
                                      <option value="ĐH KHXHNV">ĐH Khoa học XH và NV</option>
                                      <option value="ĐH B.Khoa">ĐH Bách Khoa</option>
                                      <option value="ĐH KHTN">ĐH Khoa học Tự nhiên</option>
                                      <option value="ĐH Q.Tế">ĐH Quốc tế</option>
                                      <option value="ĐH KTLuật" >ĐH Kinh Tế Luật</option>
                                      <option value="KHoa Y">Khoa Y</option>
                                      <option value="Quận 1">Quận 1</option>
                                      <option value="Quận 2">Quận 2</option>
                                      <option value="Quận 3">Quận 3</option>
                                      <option value="Quận 4">Quận 4</option>
                                      <option value="Quận 5">Quận 5</option>
                                      <option value="Quận 6">Quận 6</option>
                                      <option value="Quận 7">Quận 7</option>
                                      <option value="Quận 8">Quận 8</option>
                                      <option value="Quận 9">Quận 9</option>
                                      <option value="Quận 10">Quận 10</option>
                                      <option value="Quận 11">Quận 11</option>
                                      <option value="Quận 12">Quận 12</option>
                                      <option value="Quận T.Đức">Quận Thủ Đức</option>
                                      <option value="Quận G.Vấp">Quận Gò Vấp</option>
                                      <option value="Quận B.Thạnh">Quận Bình Thạnh</option>
                                      <option value="Quận T.Bình">Quận Tân Bình</option>
                                      <option value="Quận T.Phú">Quận Tân Phú</option>
                                      <option value="Quận P.Nhuận">Quận Phú Nhuận</option>
                                      <option value="Quận B.Tân">Quận Bình Tân</option>
                            </select>
       </span>
      <input  style="width:65%" data-error="Vui lòng nhập từ khóa muốn tìm kiếm" type="text" class="form-control" name="keyword" placeholder="Bạn muốn tìm gì..."  required/>
      <span class="input-group-btn">
        <button  class="btn btn-default" type="submit">  <i class="glyphicon glyphicon-search"></i></button>
      
       </span>
       </div>
</form>


    </div>

    <!-- Search bar Mobile -->


  </div><!-- /.container -->
  
</nav>


 <!-- END Navigation -->

 

	
    <!-- Login  form-->
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
    <!-- Login form-->
	
	    <!------------------------- END Header -------------->
	
