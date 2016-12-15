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
    
      <div class="container">
          <div class="row">

<!-- Category -->
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
      <th>Tên bài viết</th>
      <th>Chuyên mục</th>
      <th>Giá</th>
      <th>Ngày đăng</th>
      <th>Người đăng</th>
      <th>Hành động</th>
    </tr>
  </thead>
  <tbody>



          <?php
include('../connect.php');

function adddotstring($strNum) {
 
        $len = strlen($strNum);
        $counter = 3;
        $result = "";
        while ($len - $counter >= 0)
        {
            $con = substr($strNum, $len - $counter , 3);
            $result = '.'.$con.$result;
            $counter+= 3;
        }
        $con = substr($strNum, 0 , 3 - ($counter - $len) );
        $result = $con.$result;
        if(substr($result,0,1)=='.'){
            $result=substr($result,1,$len+1);   
        }
        return $result;

}

$sql = "SELECT * FROM postads WHERE order by id desc";
$result = mysqli_query($conn, $sql);


 
                 $stt = 0;
                $query_data = "SELECT *,id FROM postads
                               order by id desc";
                $result_data = mysqli_query($conn,$query_data);

                
                while($data = mysqli_fetch_array($result_data)) {
                     
                  $data['title'] = mb_substr($data['title'],0,100,'UTF-8');
                  $price=adddotstring($data['price']); 
                  echo"<tr>
                          <th scope='row'>$stt</th>
                          <td>{$data['id']}</td>
                          <td>{$data['title']}</td>
                          <td><a href = '../filter/?category={$data['category']}'>{$data['category']}</a></td>
                          <td>$price</td>
                          <td>{$data['time']}</td>
                          <td><a href = '../user/?id_member={$data['id_member']}'>{$data['user']}</a></td>
                          <td><a href='../details/?id={$data['id']}'> Xem </a> || <a href='../details/remove.php?id={$data['id']}'> Xóa </a></td>
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
