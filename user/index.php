<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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



     
           <!----------------------- Content -------------->
            
            <div class="col-md-9">

      

                <div class="row">









 <div class="col-md-12">
<ul class="list-group ">




          





          <?php
include('../connect.php');
$id = $_GET['id_member'];

$sql = "SELECT first_name,last_name FROM member WHERE id='$id'";
$result = mysqli_query($conn, $sql);

$resultuser = mysqli_query($conn, $sql);
$datauser = mysqli_fetch_array($resultuser);

echo"<title>Chơsinhvien.me | Gian hàng {$datauser['first_name']} {$datauser['last_name']} </title>";
echo "
 <ol class = 'breadcrumb'>
   <li><a href = '../index.php'>Trang Chủ</a></li>
   <li>Bài đăng của {$datauser['first_name']} {$datauser['last_name']} </li>
</ol>
";

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
                

 
                $display = 10;
                $query = "SELECT COUNT(id) FROM postads WHERE id_member='$id' order by id desc";
                $result = mysqli_query($conn,$query);
                $rows = mysqli_fetch_array($result);
                $record = $rows[0];
                $current = '';
                if($record > $display) {
                        $page = ceil($record/$display);
                    } else {
                        $page = 1;
                    }
                if ((isset($_GET['f']) && (int)$_GET['f']>=0)) $start = ($_GET['f']-1)*10;
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
                               WHERE id_member='$id'
                                order by id desc
                               LIMIT $start, $display";
                $result_data = mysqli_query($conn,$query_data);
                $kt=0;
                while($data = mysqli_fetch_array($result_data)) {
                    
                    $price=adddotstring($data['price']);  
                  $data['content'] =mb_substr($data['content'],0,300,'UTF-8');
                  include('../details/listview.php');
                  $kt=1;
                }
           
                if($kt==0)
                {
                    echo"<i style='color:red'>*Thành viên này chưa có bài đăng nào</i>";
                    include('../footer.php');
                    exit;
                }
                  echo"<div class='clearfix'></div><ul class='pagination pagination-sm pull-right'>";
                if($page > 1) {
                    if ($current > 1) {
                        echo "<li><a href='?id_member={$id}&&f=1'>&laquo;</a></li>";
                    } 
 
                    for ($i = $start_page; $i <= $end_page; $i++) {
 
                        if ($current == $i)
                            echo " <li class='active'><a href='#''>$i</a></li>";
                        else
                            echo "<li><a href='?id_member={$id}&&f=".($i)."'>$i</a></li>";
                    }
 
                    if ($current < $page) {
                        echo "<li><a href='?id_member={$id}&&f=$last'>&raquo;</a></li>" ;
                    } 
                }
                 echo"</ul><div class='clearfix'></div>";
?>        
                   

           

                    
 
</ul>
</div>
                </div>

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
