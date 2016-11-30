<!DOCTYPE html>
<html lang="en">

<body>
 <!------------------------- Menu bar & login -------------->

<?php
include('menu_login.php');
?>
    
        <!------------------------- End Menu Bar & login -------------->
    
    
         <!-- Start container --> 
    
      <div class="container">
          <div class="row">

<!-- Category -->
<?php
include('category_post.php');
?> 
<!-- end Category -->


<!-- End Category -->


           <!----------------------- Content -------------->
            
                
            <div class="col-md-9">
   
<?php
//Khai báo sử dụng session

 
//Khai báo utf-8 để hiển thị được tiếng việt
 if (!isset($_SESSION['email'])) 
{ //chưa đăng nhập
     echo "";
}
else
  { //đã đăng nhâp
    echo "<div class='alert alert-success'> <span class='glyphicon glyphicon-ok'></span> Bạn đã đăng nhập thành công <a href='index.php' class='alert-link'>Quay lại trang chủ</a></div>  ";
      include('footer.php');
    exit;
    
  }



    //Xử lý đăng nhập
    //Kết nối tới database
    include('connect.php');
    //Lấy dữ liệu nhập vào
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$email || !$password) {
      
        echo " <div class='modal-dialog'>  <div class='loginmodal-container'>    <h1>Đăng nhập</h1><br>    <form method='POST' action='loginpost.php'>    <input type='text' name='email' placeholder='Email'>    <input type='password' name='password' placeholder='Mật khẩu'><span style='color:red'>Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu</span>    <input type='submit' class='btn btn-primary' value='Đăng nhập'>    </form>  <div class='login-help'>    <a style='color:black' href='http://localhost:8080/chosinhvien/signup.php'><strong>Bạn chưa có tài khoản ?</strong>    </div>  </div></div>"; //bảng đăng nhập lại
        include('footer.php');
        exit;
    }
     
    // mã hóa pasword
    $password = md5($password);
    
    //lay thong tin tu database
    $sql = "SELECT * FROM member WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($data['password'] != $password) {

        echo " <div class='modal-dialog'>  <div class='loginmodal-container'>    <h1>Đăng nhập</h1><br>    <form method='POST' action='loginpost.php'>    <input type='text' name='email' placeholder='Email'>    <input type='password' name='password' placeholder='Mật khẩu'><span style='color:red'>Mật khẩu hoặc Email nhập không đúng. Vui lòng kiểm lại.</span>    <input type='submit' class='btn btn-primary' value='Đăng nhập'>    </form>  <div class='login-help'>      <a style='color:black' href='http://localhost:8080/chosinhvien/signup.php'><strong>Bạn chưa có tài khoản ?</strong></a>      </div>  </div></div>";// bảng đăng nhập lại
        include('footer.php');
        exit;
    }
     
    //Lưu tên đăng nhập

   

    echo "<div class='alert alert-success'> <span class='glyphicon glyphicon-ok'></span> Tài khoản <b>$email</b> đã đăng nhập thành công <a href='index.php' class='alert-link'>Quay lại trang chủ</a></div>  ";
    include('footer.php');

    $_SESSION['email'] = $email;
    $_SESSION['first_name'] = $data['first_name'];
    $_SESSION['last_name'] = $data['last_name'];



    die();
 
?>






            </div>

        </div>

    </div>
  
   
</body>

</html>