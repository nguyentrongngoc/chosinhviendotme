<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<title>ChơsinhViên | Đăng tin</title>
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


  include('connect.php');
   if (!isset($_SESSION['id_member'])) 
{ //chưa đăng nhập
     echo "<div class='alert alert-warning'> <span class='glyphicon glyphicon-remove'></span> Bạn chưa đăng nhập,hãy đăng nhâp để đăng tin rao vặt</a>
     <br/><span class='glyphicon glyphicon-pencil'></span> Nếu bạn chưa là thành viên hãy  <a href='signup.php' class='alert-link'> đăng kí thành viên tại đây </a></div>";
     echo "<div class='modal-dialog'>  <div class='loginmodal-container'>    <h1>Đăng nhập</h1><br>    <form method='POST' action='loginpost.php'>    <input type='text' name='email' placeholder='Email'>    <input type='password' name='password' placeholder='Mật khẩu'>   <input type='submit' class='btn btn-primary' value='Đăng nhập'>    </form>  <div class='login-help'>   <a style='color:black' href='http://localhost:8080/chosinhvien/signup.php'><strong>Bạn chưa có tài khoản ?</strong>    </div>  </div></div>";
     include('footer.php');

    exit;
}
  if (!$_POST)
  {
    print "<div class='alert alert-danger alert-dismissable'>     <strong><span class='glyphicon glyphicon-remove'></span> Lỗi!</strong> Xin vui lòng nhập đầy đủ các thông tin trước khi đăng bài. <a href='createpost.php' class='alert-link'>Thử lại</a> </div> ";
        include('footer.php');
        exit;
  }





     
  $id_member      = $_SESSION['id_member'];
	$title			= $_POST["title"];
	$content   	= $_POST["content"];
	$price      = $_POST["price"];
	$address		= $_POST["address"];
  $contact    = $_POST["contact"];
  $category   = $_POST["category"];
  $user       = $_POST["user"];
  $time       = $_POST["time"];
  $img[0]='data/default-image.jpg';
  $img[1]='data/default-image.jpg';
  $img[2]='data/default-image.jpg';
  $img[3]='data/default-image.jpg';





// start upload ảnh
	if(isset($_POST['ok']))
    {
      if($_FILES['file']['name'] != NULL)
      { 
            
        for($i=0; $i< 4; $i++)
        {
          if($_FILES['file']['type'][$i] == "image/jpeg"|| $_FILES['file']['type'][$i] == "image/png" || $_FILES['file']['type'][$i] == "image/gif")
          {
            move_uploaded_file($_FILES['file']['tmp_name'][$i],"data/".$_FILES['file']['name'][$i]);
            $url="data/".$_FILES['file']['name'][$i];

            
              
                   if (!file_exists($img[$i]))
                    echo "";
                  else
                  {
                      $img[$i]=$url;
                  }
        
          }
          
        }
      }
    }          





$sql = "INSERT INTO postads(id_member,title,content,price,address,contact,category,user,time,img_1,img_2,img_3,img_4)
  VALUES ('$id_member','$title','$content','$price','$address','$contact','$category','$user','$time','$img[0]','$img[1]','$img[2]','$img[3]')";

  


	if ($conn->query($sql) === TRUE) {
        include('footer.php');
       echo "<meta http-equiv='refresh' content='0;url=http://localhost:8080/chosinhvien/index.php'>";

     exit;
     /*
		echo "<div class='alert alert-success'> <span class='glyphicon glyphicon-ok'></span> Bài viết của bạn đã đăng tải thành công <a href='index.php' class='alert-link'>Quay lại trang chủ</a></div> ";

    echo "  <div class='panel-group'>
    <div class='panel panel-info'>
      <div class='panel-heading'>Nội dung bài đăng của bạn</div>
      <div class='panel-body'>
    <b>Tiêu đề</b> $title<br/>
	 <b>Ngày đăng</b> $time <br/>
    <b>Giá</b> $price VNĐ<br/>
    <b>Người đăng</b> $user <br/>
    <b>Chuyên mục</b> $category <br/>
    <b>Đia chỉ</b> $address <br/>
    <b>Thông tin liên hệ</b> $contact <br/>
    <b>Mô tả</b> $content <br/><br/>
    <img src='$img[0]' class='img-responsive' /><br/>
    <img src='$img[1]' class='img-responsive'/><br/>
    <img src='$img[2]' class='img-responsive'/><br/>
    <img src='$img[3]' class='img-responsive'/><br/>
    </div>
    </div>
    ";// xem nội dung đã đăng
*/

   

    

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
