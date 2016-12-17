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
include('../menu_login.php');
?>
</a>


 <div class="container">
          <div class="row">

<!-- Category -->


<?php

    

if (isset($_SESSION['id_member'])&&$_SESSION['id_member']=='12') //12: id của admin
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

                $display = 20;
                $query = "SELECT COUNT(id) FROM postads order by id desc";
                $result = mysqli_query($conn,$query);         
                $rows = mysqli_fetch_array($result);
                $record = $rows[0];
                $current = '';
                if($record > $display) {
                        $page = ceil($record/$display);
                    } else {
                        $page = 1;
                    }
                if ((isset($_GET['f']) && (int)$_GET['f']>=0)) $start = ($_GET['f']-1)*20;
                else $start = 0;
      
                $current = ($start/$display)+1;
                $last = $page - 1 ;
                if ($current >= 7) {
                    $start_page = $current - 3;
                    if ($page > $current + 3)
                        $end_page = $current + 3;
                    else if ($current <= $page && $current > $page - 6) {
                        $start_page = $page - 6;
                        $end_page = $page;
                    } else {
                        $end_page = $page;
                    }
                } else {
                    $start_page = 1;
                    if ($page > 7)
                        $end_page = 7;
                    else
                        $end_page = $page;
                }
 
 
 
                $query_data = "SELECT *,id FROM postads
                               order by id desc
                               LIMIT $start, $display";
                $result_data = mysqli_query($conn,$query_data);

                 $stt = 1;
                if(isset($_GET['f'])&&$_GET['f']!=1)
                {
                    $page = $_GET['f'];
                    $stt=($page-1)*20+1;
                }
                while($data = mysqli_fetch_array($result_data)) {
                     
                  $data['title'] = mb_substr($data['title'],0,200,'UTF-8');
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
           
        


?>
      </tbody>
</table>          
                   
 <?php
                  echo"<div class='clearfix'></div><ul class='pagination pagination-sm pull-right'>";
                if($page > 1) {
                    if ($current > 1) {
                        echo "<li><a href='?f=1'>&laquo;</a></li>";
                    } 
 
                    for ($i = $start_page; $i <= $end_page; $i++) {
 
                        if ($current == $i)
                            echo " <li class='active'><a href='#''>$i</a></li>";
                        else
                            echo "<li><a href='?f=".($i)."'>$i</a></li>";
                    }
 
                    if ($current < $page) {
                        echo "<li><a href='?f=$last'>&raquo;</a></li>" ;
                    } 
                }
                 echo"</ul><div class='clearfix'></div>";
?>


    </div>
     </div>
         </div> 


       <!------------------------- END Content -------------->
            
      <!-- end container -->
    

  <!-- footer -->
<?php
include('../footer.php');
?>
    <!-- end footer -->

</body>

</html>
