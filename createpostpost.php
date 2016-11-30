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
            
              
                 <div class="col-md-9">
  
            
           <!----------------------- Content -------------->
            

<?php


  include('connect.php');
  $email      = $_POST["email"];
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



	if ($title == "" || $content == "" || $price== "")
    {
        print "<div class='alert alert-danger alert-dismissable'>     <a href='javascript:history.go(-1)' class='close' data-dismiss='alert' aria-label='close'>×</a> <strong><span class='glyphicon glyphicon-remove'></span> Lỗi!</strong> Xin vui lòng nhập đầy đủ các thông tin. <a href='javascript:history.go(-1)' class='alert-link'>Nhấp vào đây để quay trở lại</a> </div> ";
        include('footer.php');
        exit;
    }


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


            //$sql="INSERT INTO img(phone, imglink) VALUES ('$phone','$url')";
            //$conn->query($sql);               
          }
          
        }
      }
    }          





$sql = "INSERT INTO postads(email,title,content,price,address,contact,category,user,time,img_1,img_2,img_3,img_4)
  VALUES ('$email','$title','$content','$price','$address','$contact','$category','$user','$time','$img[0]','$img[1]','$img[2]','$img[3]')";




	if ($conn->query($sql) === TRUE) {
		echo "<div class='alert alert-success'> <span class='glyphicon glyphicon-ok'></span> Bài viết của bạn đã đăng tải thành công <a href='index.php' class='alert-link'>Quay lại trang chủ</a></div> ";

    echo "  <div class='panel-group'>
    <div class='panel panel-info'>
      <div class='panel-heading'>Nội dung bài đăng của bạn</div>
      <div class='panel-body'>
    <b>Tiêu đề</b> $title<br/>
	 <b>Ngày đăng</b> $time <br/>
    <b>Giá</b> $price VNĐ<br/>
    <b>Người đăng</b> $user <br/>
    <b>Email</b> $email <br/>
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
