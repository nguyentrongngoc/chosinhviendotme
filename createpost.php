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
 
 

 if (!isset($_SESSION['email'])) 
{ //chưa đăng nhập
     echo "<div class='alert alert-warning'> <span class='glyphicon glyphicon-remove'></span> Bạn chưa đăng nhập,hãy đăng nhâp để đăng tin rao vặt</a>
     <br/><span class='glyphicon glyphicon-pencil'></span> Nếu bạn chưa là thành viên hãy  <a href='signup.php' class='alert-link'> đăng kí thành viên tại đây </a></div>";
     echo "<div class='modal-dialog'>  <div class='loginmodal-container'>    <h1>Đăng nhập</h1><br>    <form method='POST' action='loginpost.php'>    <input type='text' name='email' placeholder='Email'>    <input type='password' name='password' placeholder='Mật khẩu'>   <input type='submit' class='btn btn-primary' value='Đăng nhập'>    </form>  <div class='login-help'>   <a style='color:black' href='http://localhost:8080/chosinhvien/signup.php'><strong>Bạn chưa có tài khoản ?</strong>    </div>  </div></div>";
     include('footer.php');

    exit;
}

?>


            <div class="col-md-8 col-md-offset-2 well well-sm">
    
 
<form  data-toggle="validator" role="form" method="POST" action="createpostpost.php" enctype="multipart/form-data">

                  <legend class="text-center active">  <label>Đăng Tin Rao Vặt</label></legend>

                    <fieldset>

                  <input type="hidden" name="user" value="<?php     
                  echo $_SESSION['first_name'];
                  echo ' ';
                  echo $_SESSION['last_name'];?>" />

              <input type="hidden" name="email" value="<?php     
                  echo $_SESSION['email'];?>" />

             <input type="hidden" name="time" value="<?php
                    $t=time();
                    echo(date("h:i Y-m-d",$t));
                    ?>" />


                        <div class="form-group col-md-12">
                            <label for="">Tiêu Đề</label>
                            <input data-error="Vui lòng nhập tiêu đề" type="text" class="form-control" name="title" id="" placeholder="Nhập tiêu đề" required>
                            <div class="help-block with-errors"></div>
                        </div>
                          <div class="form-group col-md-12">
                            <label for="specify">Mô tả</label>

                           <div class="form-group"> <textarea data-error="Vui lòng mô tả thêm về sản phẩm" class="form-control" id="specify" name="content" placeholder="Mô tả của bạn" required></textarea></div>
                            <div class="help-block with-errors"></div>
                        </div>
                <div class="form-group col-md-12">
                            <label for="">Giá</label>
                            <div class="input-group">
                            <input type="number" data-error="Vui lòng nhập giá bán sản phẩm"  class="form-control" name="price" id="" placeholder="Giá VNĐ" required><span class="input-group-addon">VNĐ</span>
                            
                            </div><div class="help-block with-errors"></div>
                        </div>
                   


                    </fieldset>

                    <fieldset>
                    
 
                        
                         <div class="form-group col-md-12">
                            <label for="">Thông tin liên hệ</label>
                            <input data-error="Vui lòng nhập thông tin liên hệ" type="text"  class="form-control" name="contact" id="contact" placeholder="Thông tin liên hệ" required>     
                             <div class="help-block with-errors"></div>
                        </div>

                         
                        
                        <div class="form-group col-md-6">
                            <label for="country">Chuyên Mục</label>
                            <select class="form-control" name="category" id="category">
                               
                    <option>Thời Trang</option>
                     <option>Việc Làm</option>
                     <option>Nhà ở</option>
                     <option>Đồ ăn/Thức uống</option>
                     <option>Sách vở</option>
                     <option>Điện Tử</option>
                     <option>Điện Thoại</option>
                     <option>Máy ảnh</option>
                     <option>Tai Nghe</option>
                     <option>Xe Máy/Xe đạp</option>
                     <option>Linh Tinh </option>
                            </select>
                            
                        </div>
            


                        <div class="form-group col-md-6">
                            <label for="country">Quận/Huyện</label>
                            <select class="form-control" name="address" id="address">
                              <option>Quận 1</option>
                              <option>Quận 2</option>
                              <option>Quận 3</option>
                              <option>Quận 4</option>
                              <option>Quận 5</option>
                              <option>Quận 6</option>
                              <option>Quận 7</option>
                              <option>Quận 8</option>
                              <option>Quận 9</option>
                              <option>Quận 10</option>
                              <option>Quận 11</option>
                              <option>Quận 12</option>
                              <option>Quận Thủ Đức</option>
                              <option>Quận Gò Vấp</option>
                              <option>Quận Bình Thạnh</option>
                              <option>Quận Tân Bình</option>
                              <option>Quận Tân Phú</option>
                              <option>Quận Phú Nhuận</option>
                              <option>Quận Bình Tân</option>

                    
                    
                            </select>
                        </div>
  


          
          
    


  <div class="form-group col-md-12">
 <i>Hãy tải lên ít nhất 1 hình ảnh về sản phẩm của bạn</i>



<?php
    for ($i=1; $i <= 4; $i++)
    {
          echo "<div class='input-group' style='margin-bottom:2px'><input type='text' class='form-control' readonly > <span class='input-group-btn'> <span class='btn btn-primary btn-file'> <span class='glyphicon glyphicon-folder-open'></span> Tải ảnh lên<input name='file[]' type='file' id='imgInp$i' vaule=''></span></span></div> ";
    }
  ?>


    <?php
    for ($i=1; $i <= 4; $i++)
    {
          echo "<img class='col-md-6 img-responsive' id='img-upload$i'/>  ";
    }
  ?>
  </div>

 <div class="help-block with-errors"></div>


                    </fieldset>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input data-error="Hãy đồng ý với điều khoản của chúng tôi" type="checkbox" value="" id="" required>
                                    Tôi đồng ý với <a href="#">Điều khoản dịch vụ</a> của Chơsinhvien.
                                    <div class="help-block with-errors"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" name="ok" class="btn btn-primary">
                                Đăng Tin
                            </button>
                           
                        </div>
                    </div>

                </form>

            </div>

       
           

                </div>

            </div>

        </div>

    </div>

         <!------------------------- END Content -------------->
            
      <!-- end container -->
    

  <!-- footer -->
<?php


include('footer.php');

?>
    <!-- end footer -->

</body>

</html>
