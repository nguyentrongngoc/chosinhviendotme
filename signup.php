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
<div id="signup">
<div class="col-md-8 col-md-offset-2 well well-sm" >
    
               <form id="signup" data-toggle="validator" role="form" method="POST" action="#">

                  <legend class="text-center active">  <label>Đăng kí tài khoản</label></legend>

                    <fieldset>
                        <legend>Thông tin tài khoản</legend>

                        <div class="form-group col-md-6">
                            <label for="first_name">Tên của bạn</label>
                             <input   maxlength="10" data-error="Vui lòng nhập đúng tên của bạn" type="text" class="form-control" name="first_name" id="first_name" placeholder="Nhập tên" required>
               <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="last_name">Họ của bạn</label>
                             <input   maxlength="10"  data-error="Vui lòng nhập đúng họ của bạn" type="text" class="form-control" name="last_name" id="last_name" placeholder="Nhập Họ" required>
                         <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Email</label>
                              <input data-error="Vui lòng nhập đúng định dạng email" type="email" class="form-control" name="email" id="email" placeholder="Email" required>     
               <div class="help-block with-errors"></div>
               <div id="showerror" style='color:red'></div>
             
                        </div>


                        <div class="form-group col-md-12">
                            <label for="">Số điện thoại</label>
                             <input  data-minlength="10" type="number" data-error="Vui lòng nhập đúng số điên thoại" class="form-control" name="phone" id="phone" placeholder="Số điện thoại" required>    
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

                                    <input type="checkbox" value="no" id="" name="confirm"  data-error="Hãy đồng ý với điều khoản dịch vụ" required>
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

<div id="login"></div><!--hiển thị sau khi đăng kí thành công-->
  



       
           

                </div>

            </div>

        </div>

    </div>

          <!------------------------- END Content -------------->
            
      <!-- end container -->
 <!--xu ly ajax-->
        <script language="javascript">
               $('#signup').submit(function (){
                     $('#errorinput').html('');
                    return false;
                });
            $('#signup').submit(function ()
            {
                // Xóa trắng thẻ div show lỗi
                $('#showerror').html('');
            
                var email = $('#email').val();
                var first_name = $('#first_name').val();
                var last_name = $('#last_name').val();
                var phone = $('#phone').val();
                var password = $('#password').val();
                var confirm_password = $('#confirm_password').val();
                var confirm = $('#confirm').val();//checkbox điều khoản
                // Kiểm tra dữ liệu có null hay không
             
                if ($.trim(first_name) == ''||$.trim(email) == ''||$.trim(last_name) == ''||$.trim(phone) == ''||$.trim(password) == ''||$.trim(confirm_password) == '')
                    return false;
                if ($.trim(password) != $.trim(confirm_password))
                    return false;
 
            
                
                // Nếu bạn thích có thể viết thêm hàm kiểm tra định dang email
                // ở đây tôi làm chú yêu chỉ cách dùng ajax nên sẽ ko đề cập tới,
                // vì sợ bài dài sẽ rối
                
                $.ajax({
                    url : 'signuppost.php',
                    type : 'post',
                    dataType : 'json',
                    data : {
                        email : email,
                        first_name : first_name,
                        last_name : last_name,
                        phone : phone,
                        password : password
                    },
                    success : function (result)
                    {
                        // Kiểm tra xem thông tin gửi lên có bị lỗi hay không
                        // Đây là kết quả trả về từ file do_validate.php
                        
                        var html = '';
                        
                        // Lấy thông tin lỗi email
                        if ($.trim(result.email) != ''){
                            html += result.email;
                        }
                       
                        // Cuối cùng kiểm tra xem có lỗi không
                        // Nếu có thì xuất hiện lỗi
                        if (html != ''){
                            $('#showerror').append(html);
                        }
                        else {
                            // Thành công
                            $('#signup').html('');
   
                             $('#login').html("<div id='fade' class='col-md-8 col-md-offset-2'><div class='alert alert-success'> <span class='glyphicon glyphicon-ok'></span> Xin chúc mừng bạn đã tạo thành công tài khoản bây giờ bạn có thể đăng nhập ngay.</div><div class='modal-dialog'>  <div class='loginmodal-container'>    <h1>Đăng nhập</h1><br>    <form method='POST' action='loginpost.php'>    <input type='text' name='email' placeholder='Email' value='"+$.trim(email)+"'>    <input type='password' name='password' placeholder='Mật khẩu'><span style='color:red'></span>    <input type='submit' class='btn btn-primary' value='Đăng nhập'>    </form> </div></div></div>");

                        }
                    }
                });
                
                return false;
            });
            
        </script>
  <!-- footer -->
<?php


include('footer.php');

?>
    <!-- end footer -->

</body>

</html>

