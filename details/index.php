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






        <?php
include('../connect.php');
if (!$_GET['id'])
    exit;
$id = $_GET['id'];
$sql = "SELECT *, id FROM postads WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);

if (!$data)
    exit;



    echo"

    <ol class = 'breadcrumb'>
   <li><a href = '../index.php'>Trang Chủ</a></li>
   <li><a href = '../filter/?category={$data['category']}'>{$data['category']}</a></li>
   <li class = 'active'>{$data['title']}</li>
</ol>
                <div class='thumbnail'>
        
          
          
                 
                         <div class='carousel-inner hidden-lg' style='max-height: 200px;'>
                               
                                    <img class='slide-image' src='../{$data['img_1']}' alt=''>
                                </div>


                        <div id='carousel-example-generic' class='carousel slide  hidden-sm hidden-xs' data-ride='carousel'>
                            <ol class='carousel-indicators'>
                                <li data-target='#carousel-example-generic' data-slide-to='0' class='active'></li>
                                <li data-target='#carousel-example-generic' data-slide-to='1'></li>
                                <li data-target='#carousel-example-generic' data-slide-to='2'></li>
                                <li data-target='#carousel-example-generic' data-slide-to='4'></li>
                            </ol>
                            <div class='carousel-inner'>
                                <div class='item active' style='max-height: 350px;'>
                                    <img class='slide-image' src='../{$data['img_1']}' alt=''>
                                    <div class='carousel-caption trickcenter' ><h4><span class ='label label-success' >{$data['title']}</span></h4></div>
                                </div>
                                <div class='item' style='max-height: 350px;'>
                                    <img class='slide-image' src='../{$data['img_2']}' alt=''>
                                    <div class='carousel-caption trickcenter'><h4><span class ='label label-danger'>Giá: {$data['price']} ₫ </span></h4></div>
                                </div>
                                <div class='item' style='max-height: 350px;'>
                                    <img class='slide-image' src='../{$data['img_3']}' alt=''>
                                    <div class='carousel-caption trickcenter'><h4><span class ='label label-warning'>Nới bán: {$data['address']}</span></h4></div>
                                </div>
                                 <div class='item' style='max-height: 350px;'>
                                    <img class='slide-image' src='../{$data['img_4']}' alt=''>
                                    <div class='carousel-caption trickcenter'><h4><span class ='label label-primary'>{$data['contact']} </span></h4></div>
                                </div>
                            </div>
                            <a class='left carousel-control' href='#carousel-example-generic' data-slide='prev'>
                                <span class='glyphicon glyphicon-chevron-left'></span>
                            </a>
                            <a class='right carousel-control' href='#carousel-example-generic' data-slide='next'>
                                <span class='glyphicon glyphicon-chevron-right'></span>
                            </a>
                        </div>
                    
                    


                    <div class='caption-full'>
                        <h4 class='pull-right' style='color:#a94442'> <strong>{$data['price']}  ₫</strong></h4>
                        <h4><a href='#'>{$data['title']}</a>
                        </h4>
                         <a style='color:#a94442' href='#' data-toggle='modal' data-target='#myModal' > <span class='glyphicon glyphicon-remove'></span> Xóa bài viêt này</a>




                               <!---------- Xóa bài viết----------->
                                

                                    <div class='modal fade' id='myModal' role='dialog'>
                                      <div class='modal-dialog'>
                                      

                                        <div class='modal-content'>
                                          <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal'>&times;</button>

                                          </div>
                                          <div class='modal-body'>
                                            <p>Bạn có muốn xóa bài viết này?
                                            <br/>Bài viết sẽ không thể phục hồi sau khi xóa.</p>
                                          </div>
                                          <div class='modal-footer'>
                                            <a style='color:#a94442' href='remove.php?id={$data['id']}' ><button type='button' class='btn btn-danger'>Xóa bài viết</button></a>
                                          </div>
                                        </div>
                                        
                                      </div>
                                    </div>
                     <!----------------------- Xóa bài viết----------->


                        <p>
                        Chuyên mục: <a href = '../filter/?category={$data['category']}'>{$data['category']}</a><br/>
                        Ngày đăng: {$data['time']}<br/>
                            Người đăng: <a href = '../user/?email={$data['email']}'>{$data['user']}</a><br/>
                            Nơi đăng: {$data['address']}<br/>
                            Liên hệ: {$data['contact']}</p>

                        <p>Mô tả: {$data['content']}</p><br/><br/><br/>
                   <div class='clearfix'></div>
                   <div class=' col-lg-9 col-md-9 col-sm-10 col-xs-12' >
                       
                        
                         <img class='img-responsive' src='../{$data['img_4']}'><br/>
                         <img class='img-responsive' src='../{$data['img_3']}'><br/>
                       <img class='img-responsive' src='../{$data['img_2']}'><br/>
                          <img class='img-responsive' src='../{$data['img_1']}'><br/>
</div>

                            <div class='clearfix'></div>
                       
                    </div>
                     
                    </div>
                </div>

                
              ";

?>
              
                   
    

                    
 

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
