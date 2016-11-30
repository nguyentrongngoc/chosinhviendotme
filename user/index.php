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



     
           <!----------------------- Content -------------->
            
            <div class="col-md-9">

      

                <div class="row">









 <div class="col-md-12">
<ul class="list-group ">




          





          <?php
include('../connect.php');
$email = $_GET['email'];

$sql = "SELECT * FROM postads WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (!$result)
{
    echo "Danh Mục Trống";
    exit();
}
echo "
 <ol class = 'breadcrumb'>
   <li><a href = '../index.php'>Trang Chủ</a></li>
   <li>Bài đăng của $email</li>
</ol>
";

while($data = mysqli_fetch_array($result))
   {    
    $data['content'] = substr($data['content'],0,300);
         include('../details/listview.php');
   }
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
