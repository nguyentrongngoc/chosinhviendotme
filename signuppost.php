<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<title>ChơsinhViên | Đăng kí tài khoản</title>
<?php
include('header.php');
?>

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
            
              
                 <div class="col-md-9">
  
            
           <!----------------------- Content -------------->
            

<?php

 if (!isset($_SESSION['id_member'])) 
{ //chưa đăng nhập
     echo "";
    
}
else
  { //đã đăng nhâp
    echo "<div class='alert alert-success'> <span class='glyphicon glyphicon-ok'></span> Bạn đã đăng nhập thành công <a href='index.php' class='alert-link'>Quay lại trang chủ</a></div>  ";
      include('footer.php');
    exit;
    
  }

  
  include('connect.php');
   
	$first_name			= $_POST["first_name"];
	$last_name  		= $_POST["last_name"];
	$email   			= $_POST["email"];
	$phone      		= $_POST["phone"];
	$password			= $_POST["password"];
	$confirm_password 	= $_POST["confirm_password"];



  //Kiểm tra điền thông tin đầy đủ
  if ($first_name  == "" || $last_name == "" || $email == "" || $phone== "" || $password == ""|| $confirm_password  == "")
    {
        print "<div class='alert alert-warning alert-dismissable'>     <a href='javascript:history.go(-1)' class='close' data-dismiss='alert' aria-label='close'>×</a> <strong><span class='glyphicon glyphicon-remove'></span> Lỗi!</strong> Xin vui lòng nhập đầy đủ các thông tin. <a href='index.php' class='alert-link'>Quay trờ lại trang chủ</a> </div> ";
        include('footer.php');
        exit;
    }

  $sql = "SELECT email FROM member WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    //Kiểm tra tên đăng nhập có tồn tại không?
    if ($data['email'] == $email ){ 
        echo " <div class='alert alert-danger alert-dismissable'>    <a href='javascript:history.go(-1)' class='close' data-dismiss='alert' aria-label='close'>×</a>  <strong><span class='glyphicon glyphicon-remove'></span> Lỗi !</strong> Tên Email này đã có người dùng hãy sử dụng email khác. <a href='javascript:history.go(-1)' class='alert-link'>Nhấp vào đây để quay trở lại</a> </div>";
        include('footer.php');
        exit;
    }





	$password = md5($password);

	//đăng kí thành công

	$sql = "INSERT INTO member(first_name,last_name,email,phone,password)
	VALUES ('$first_name','$last_name','$email','$phone','$password')";

	if ($conn->query($sql) === TRUE) {
		echo "<div class='alert alert-success'> <span class='glyphicon glyphicon-ok'></span> Xin chúc mừng bạn thành công tài khoản <b>$email</b> <br/>Hãy đăng nhập ngay bên dưới</div><div class='modal-dialog'>  <div class='loginmodal-container'>    <h1>Đăng nhập</h1><br>    <form method='POST' action='loginpost.php'>    <input type='text' name='email' placeholder='Email'>    <input type='password' name='password' placeholder='Mật khẩu'><span style='color:red'></span>    <input type='submit' class='btn btn-primary' value='Đăng nhập'>    </form> </div></div>  ";
    
    include('footer.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();

?>






            </div>

        </div>

    </div>
  


</body>

</html>
