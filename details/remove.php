


<!DOCTYPE html>
<html lang="en">

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


           <!----------------------- Content -------------->
            
                
            <div class="col-md-9">
   
<?php



    session_start();
    include ('../connect.php');
    $id = $_GET['id'];
    $email = $_SESSION['email'];
    $sql = "SELECT *, id FROM postads WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    if (!$data){
         echo "<div class='alert alert-warning'> <span class='glyphicon glyphicon-floppy-remove'></span> Bài viết này không tồn tại hoặc đã bị xóa</div>  ";
    include('footer.php');
      exit();}

    if ($data['email'] == $email)
    {   
        $sql = "DELETE FROM postads WHERE id = $id";
        $conn->query($sql);
         echo "<div class='alert alert-success'> <span class='glyphicon glyphicon-ok'></span> Đã xóa thành công bài viết của bạn</div>  ";
    include('footer.php');
    }
      else
      {

           echo "<div class='alert alert-danger'> <span class='glyphicon glyphicon-remove'></span> Bạn không có quyền xóa bài viết này</div>  ";
    include('footer.php');

      }

     
 

   

 




 
?>






            </div>

        </div>

    </div>
  
   
</body>

</html>
