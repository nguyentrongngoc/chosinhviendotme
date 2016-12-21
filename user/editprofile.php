<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<title>ChơsinhViên | Cập nhật thông tin</title>
<?php
include('../header.php');
?>
<body>
 <!------------------------- Menu bar & login -------------->

<?php
include('../menu_login.php');
?>
    
        <!------------------------- End Menu Bar & login -------------->
    
    
         <!-- Start container --> 
    
      <div class="container">
          <div class="row">

<!-- Category -->
<?php
include('../category_post.php');
?> 
<!-- end Category -->


<!-- End Category -->
            
            
<?php
 if (!isset($_SESSION['id_member'])||!isset($_GET['id_member'])) 
{ //chưa đăng nhập
     echo "<div class='alert alert-danger col-md-9'> <span class='glyphicon glyphicon-remove'></span>Lỗi</div>";
     include('../footer.php');
     exit;
}
$id_member = $_GET['id_member'];
if($id_member!=$_SESSION['id_member'])
{
      echo "<div class='alert alert-danger col-md-9'> <span class='glyphicon glyphicon-remove'></span> Bạn không có quyên truy cập</div>";
     include('../footer.php');
     exit;
}


?>











           <!----------------------- Content -------------->
            
                
            <div class="col-md-9">




<?php
include('../connect.php');
$id_member = $_GET['id_member'];
$sql = "SELECT *, id FROM member WHERE id='$id_member'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);


echo "
<div  id='edit'>
<div class='col-md-8 col-md-offset-2 well well-sm' style='margin-top: 20px'>
    
               <form id='change' data-toggle='validator' role='form' method='POST' action='#'>

                  <legend class='text-center active'>  <label>Cập nhật thông tin</label></legend>

                    <fieldset>
                        <legend>Thông tin tài khoản</legend>

                        <div class='form-group col-md-6'>
                            <label for='first_name'>Tên của bạn</label>
                             <input  value='{$data['first_name']}' maxlength='10' data-error='Vui lòng nhập đúng tên của bạn' type='text' class='form-control' name='first_name' id='first_name' placeholder='Nhập tên' required>
                      <div class='help-block with-errors'></div>
                        </div>

                        <div class='form-group col-md-6'>
                            <label for='last_name'>Họ của bạn</label>
                             <input value='{$data['last_name']}'  maxlength='10'  data-error='Vui lòng nhập đúng họ của bạn' type='text' class='form-control' name='last_name' id='last_name' placeholder='Nhập Họ' required>
                         <div class='help-block with-errors'></div>
                        </div>

                        <div class='form-group col-md-12'>
                            <label for=''>Email</label>
                              <input value='{$data['email']}' type='email' class='form-control' name='email' id='email' placeholder='Email' disabled>     
             
                        </div>


                        <div class='form-group col-md-12'>
                            <label for=''>Số điện thoại</label>
                             <input value='{$data['phone']}'  data-minlength='10' type='number' data-error='Vui lòng nhập đúng số điên thoại' class='form-control' name='phone' id='phone' placeholder='Số điện thoại' required>    
               <div class='help-block with-errors'></div>
                        <br/>
                        <h4><a class='label label-success label-lg' data-toggle='collapse' href='#changepassword'>Đổi mật khẩu</a></h4>
                        </div>

                           

                      <!--change password-->
                         

                            <div id='changepassword' class='collapse'>
                              <div class='form-group col-md-12'>
                            <label for='password'>Mật khẩu cũ</label>
                             <input data-error='Mật khẩu có ít nhất 6 kí tự' data-minlength='6' type='password' class='form-control' name='password' id='password' placeholder='Mật khẩu cũ'>  
               <div class='help-block with-errors'></div>
                        </div>

                        <div class='form-group col-md-12'>
                            <label for='password'>Mật khẩu mới</label>
                             <input data-error='Mật khẩu có ít nhất 6 kí tự' data-minlength='6' type='password' class='form-control' name='passwordnew' id='passwordnew' placeholder='Mật khẩu mới'>  
               <div class='help-block with-errors'></div>
                        </div>

                        <div class='form-group col-md-12'>
                            <label for='confirm_password'>Nhập lại mật khẩu</label>
                            <input type='password' class='form-control' name='confirm_password' id='confirm_password' placeholder='Nhập lại mật khẩu' data-match='#passwordnew' data-error='Mật khẩu có ít nhất 6 kí tự' data-match-error='Mật khẩu không giống nhau'>
                                   <div class='help-block with-errors'></div>               
                           <!--change password-->
                        </div>

                            </div>

                    </fieldset>
                    <div id='errorinput' style='color:red'></div><br/>
                    <div class='form-group'>
                        <div class='col-md-12'>
                        <div id='errorpassword' style='color:red'></div>
                            <button id='change' type='submit' class='btn btn-primary'>
                                Cập nhật
                            </button>
                        </div>
                    </div>

                </form>
            </div>
</div>
<div id='success'></div>
";
?>

     <script language="javascript">
            $('#change').submit(function ()
            {
                // Xóa trắng thẻ div show lỗi
                $('#showerror').html('');          
                var first_name = $('#first_name').val();
                var last_name = $('#last_name').val();  
                var phone = $('#phone').val();  
                var password = $('#password').val();  
                var passwordnew = $('#passwordnew').val();
                var confirm_password = $('#confirm_password').val();

                //kiem tra xem nhap du thong tin chua
                if ($.trim(password) == '')
                {
                  if ($.trim(first_name) == ''||$.trim(last_name) == ''||$.trim(phone) == ''){
                    $('#errorinput').html('');
                   $('#errorinput').append('Vui lòng nhập đầy đủ thông tin trước khi nhấn cập nhật');
                    return false;
                  }
                }
                else if ($.trim(passwordnew) == '' || $.trim(confirm_password) == '')
                      {
                           $('#errorinput').html('');
                          $('#errorinput').append('Vui lòng nhập mật khẩu mới');
                          return false;
                      }
                      else if ($.trim(passwordnew) != $.trim(confirm_password))
                            {
                              $('#errorinput').html('');
                              return false;
                          }
                    
              
                $.ajax({
                    url : 'updatepost.php',
                    type : 'post',
                    dataType : 'json',
                    data : {
                        first_name : first_name,
                        last_name  : last_name,
                        password   : password,
                        passwordnew : passwordnew,
                        phone      : phone
                    },
                    success : function (result)
                    {
                        var html = '';
                         if ($.trim(result.password) != ''){
                            html += result.password;
                        }
                        // Cuối cùng kiểm tra xem có lỗi không
                        // Nếu có thì xuất hiện lỗi
                        
                        if (html != ''){
                          $('#errorpassword').html('');
                            $('#errorpassword').append(html);
                        }
                        else 
                          {
                            $('#edit').html('');
                            $('#success').append("<div id='fade'><div class='alert alert-success col-md-9'> <span class='glyphicon glyphicon-ok'></span> Cập nhật thành công.</div></div>");
                          }
                    }
                });                
                return false;

            }); 
        </script>  
           

                </div>

            </div>

        </div>

    </div>

          <!------------------------- END Content -------------->
            
      <!-- end container -->
 <!--xu ly ajax-->
      
  <!-- footer -->
<?php


include('../footer.php');

?>
    <!-- end footer -->

</body>

</html>

