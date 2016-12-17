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
 include ('../connect.php');
  $keyword = $_GET['keyword'];
  $address = $_GET['address'];
  $sql = "SELECT * FROM postads where title like '%$keyword%' order by id desc";
  $result = mysqli_query($conn, $sql);
echo"<title>Chơsinhvien.me | {$keyword} ({$address})</title>";
echo "
 <ol class = 'breadcrumb'>
   <li><a href = '../index.php'>Trang Chủ</a></li>
   <li>Tìm kiếm: $keyword ($address)</li>

</ol>
<i id='countresult' style='color:red'></i>
";




function adddotstring($keywordNum) {
 
        $len = strlen($keywordNum);
        $counter = 3;
        $result = "";
        while ($len - $counter >= 0)
        {
            $con = substr($keywordNum, $len - $counter , 3);
            $result = '.'.$con.$result;
            $counter+= 3;
        }
        $con = substr($keywordNum, 0 , 3 - ($counter - $len) );
        $result = $con.$result;
        if(substr($result,0,1)=='.'){
            $result=substr($result,1,$len+1);   
        }
        return $result;

}

$kt=0;
if ($address=='TP.HCM')
while($data = mysqli_fetch_array($result))
   {  
    $price=adddotstring($data['price']);  
    $data['content'] = mb_substr($data['content'],0,300,'UTF-8');
    include('../details/listview.php');
    $kt++;

   }
else
  while($data = mysqli_fetch_array($result))
   {  
    if($data['address']==$address)
    {
    $price=adddotstring($data['price']);  
    $data['content'] = mb_substr($data['content'],0,300,'UTF-8');
    include('../details/listview.php');
    $kt++;
    }
   }
 if ($kt==0)
 {
  echo"<i style='color:red'>*Không tìm thấy có kết quả nào</i>";
  include('../footer.php');
  exit;
  }
echo "<script language='javascript'>$('#countresult').html('*Đã tìm thấy $kt kết quả');</script>";
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
