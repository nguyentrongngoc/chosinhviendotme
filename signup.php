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
            
            














           <!----------------------- Content -------------->
            
                
            <div class="col-md-9">

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
?>


            <div class="col-md-8 col-md-offset-2 well well-sm">
    
               <form data-toggle="validator" role="form" method="POST" action="signuppost.php">

                  <legend class="text-center active">  <label>Đăng kí tài khoản</label></legend>

                    <fieldset>
                        <legend>Thông tin tài khoản</legend>

                        <div class="form-group col-md-6">
                            <label for="first_name">Tên của bạn</label>
                             <input  data-error="Vui lòng nhập tên của bạn" type="text" class="form-control" name="first_name" id="first_name" placeholder="Nhập tên" required>
               <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Họ của bạn</label>
                             <input  data-error="Vui lòng nhập họ của bạn" type="text" class="form-control" name="last_name" id="" placeholder="Nhập Họ" required>
                         <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Email</label>
                              <input data-error="Vui lòng nhập đúng định dạng email" type="email" class="form-control" name="email" id="" placeholder="Email" required>     
               <div class="help-block with-errors"></div>
                        </div>


                        <div class="form-group col-md-12">
                            <label for="">Số điện thoại</label>
                             <input data-minlength="10" type="number" data-error="Vui lòng nhập đúng số điên thoại" class="form-control" name="phone" id="" placeholder="Số điện thoại" required>    
               <div class="help-block with-errors"></div>
                        </div>




                        <div class="form-group col-md-6">
                            <label for="password">Mật khẩu</label>
                             <input data-error="Mật khẩu có ít nhất 6 kí tự" data-minlength="6" type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu" required>  
               <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="confirm_password">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Nhập lại mật khẩu" data-match="#password" data-error="Mật khẩu có ít nhất 6 kí tự" data-match-error="Mật khẩu không giống nhau" required>
                                   <div class="help-block with-errors"></div>               

                        </div>


                    </fieldset>

                    
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="" id=""  data-error="Hãy đồng ý với điều khoản dịch vụ" required>
                                    Tôi đồng ý với <a href="#">Điều khoản dịch vụ</a> của Chơsinhvien.
                                   <div class="help-block with-errors"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                Đăng kí
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

