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
  $str = $_GET['keyword'];
  $str2 = $_GET['address'];
  $sql = "SELECT * FROM postads";
  $result = mysqli_query($conn, $sql);
echo"<title>Chơsinhvien.me | {$str} ({$str2})</title>";
echo "
 <ol class = 'breadcrumb'>
   <li><a href = '../index.php'>Trang Chủ</a></li>
   <li>Tìm kiếm: $str ($str2)</li>
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
if ($str2=='TP.HCM')
while($data = mysqli_fetch_array($result))
   {  
    if(strpos($data['title'],$str)!==false)
    {
    $price=adddotstring($data['price']);  
    $data['content'] = substr($data['content'],0,300);
    include('../details/listview.php');
     exit;
    }
   }
else
  while($data = mysqli_fetch_array($result))
   {  
    if(strpos($data['title'],$str)!==false&&$data['address']==$str2)
    {
    $price=adddotstring($data['price']);  
    $data['content'] = substr($data['content'],0,300);
    include('../details/listview.php');
    exit;
    }
   }
echo"<i style='color:red'>*Không tìm thấy có kết quả nào</i>";

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
