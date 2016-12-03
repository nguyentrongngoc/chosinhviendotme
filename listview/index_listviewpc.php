<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<title>ChơsinhViên | Kênh rao vặt của Sinh Viên</title>
<?php
include('header.php');
?>
<body>
 <!------------------------- Menu bar & login


  -------------->

<?php
include('menu_login.php');
?>
    
        <!------------------------- End Menu Bar & login -------------->
    
    
         <!-- Start container --> 
    
      <div class="container">
          <div class="row">

<!-- Category -->
<?php
include('category_post.php');
?> 



     
           <!----------------------- Content -------------->
            
            <div class="col-md-9">

         
         


 


<div class="clearfix"></div>


                <div id="content">
            <?php require('data.php'); ?>
        </div>
        <div id="loadding" class="hidden">
        <br/>

        <label class="btn btn-success btn-md"><span class="glyphicon glyphicon-refresh fast-right-spinner" ></span> Đang tải thêm bài viết...</label>
      
        </div>



<div class="clearfix"></div>


        


   

            </div>

        </div>

    </div>


       <!------------------------- END Content -------------->
            
      <!-- end container -->
    

  <!-- footer -->
<?php


include('footer.php');

?>
    <!-- end footer -->

</body>

</html>
