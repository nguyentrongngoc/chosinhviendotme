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
 include ('../connect.php');
  $str = $_GET['keyword'];
  $sql = "SELECT * FROM postads";
  $result = mysqli_query($conn, $sql);

echo "
 <ol class = 'breadcrumb'>
   <li><a href = '../index.php'>Trang Chủ</a></li>
   <li>Tìm kiếm: $str</li>
</ol>
";







while($data = mysqli_fetch_array($result))
   {    
    $data['content'] = substr($data['content'],0,300);
     if (strpos($data['title'],$str) !== false)
     {
    include('../details/listview.php');
          }
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
