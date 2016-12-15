<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<title>ChơsinhViên | Kênh rao vặt của Sinh Viên</title>
<?php
include('../header.php');
?>
<body>
 <!------------------------- Menu bar & login


  -------------->


        <!------------------------- End Menu Bar & login -------------->

         <!-- Start container --> 
    
<?php
 $id_member = $_SESSION['id_member'];
if ($id_member=='12') //12: id của admin
    {   
       
         echo "";
    }
      else
      {

           echo "<div class='alert alert-danger'> <span class='glyphicon glyphicon-remove'></span> Bạn không truy cập vào đây</div>  ";
           exit;

      }
?>
      <div class="container">
          <div class="row">

<!-- Category -->



     
           <!----------------------- Content -------------->
            
              
            <div class="col-md-12">

     

          
   <div class="panel panel-primary">
      <div class="panel-heading"><a style="color:white" href="postads.php">Xem bài đăng</a> | <a style="color:white" href="member.php">Xem thành viên</a> <a class="pull-right" style="color:white" href="../index.php">Quay lại trang chủ</a></div>

    </div>
<table class='table table-striped table-bordered'>
  <thead>
    <tr class="active">

      <th>STT</th>
      <th>ID</th>
      <th>Họ và tên</th>
      <th>Email</th>
      <th>SĐT</th>

    </tr>
  </thead>
  <tbody>



          <?php
include('../connect.php');


$sql = "SELECT * FROM member WHERE order by id desc";
$result = mysqli_query($conn, $sql);


 
                 $stt = 0;
                $query_data = "SELECT *,id FROM member
                               order by id desc";
                $result_data = mysqli_query($conn,$query_data);

                
                while($data = mysqli_fetch_array($result_data)) {
                  echo"<tr>
                          <th scope='row'>$stt</th>
                          <td><a href = '../user/?id_member={$data['id']}'>{$data['id']}</a></td>
                          <td>{$data['first_name']} {$data['last_name']}</td>
                          <td>{$data['email']}</a></td>
                          <td>{$data['phone']}</td>
                        
                        </tr>
                        ";
                        $stt=$stt+1;
                
                }
           
        
                  echo"<div class='clearfix'></div><ul class='pagination pagination-sm pull-right'>";

                 echo"</ul><div class='clearfix'></div>";

?>
      </tbody>
</table>          
                   

           



    </div>
     </div>
         </div> 


       <!------------------------- END Content -------------->
            
      <!-- end container -->
    

  <!-- footer -->

    <!-- end footer -->

</body>

</html>
