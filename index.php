<!DOCTYPE html>
<html lang="en">


<body>
 <!------------------------- Menu bar & login -------------->

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

                <div class="row carousel-holder hidden-xs">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/banner/job.jpg" alt="">
                                    <div class="carousel-caption trickcenter">
<h3><span class ="label label-primary">Tìm kiếm việc làm thêm ..</span></h3>
    </div>
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/banner/phone.jpg" alt="">
                                    <div class="carousel-caption trickcenter"><h3><span class ="label label-success">Mua/bán điện thoại cũ ..</span></h3></div>
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/banner/fashion.jpg" alt="">
                                    <div class="carousel-caption trickcenter"><h3><span class ="label label-warning">Mua/bán quần áo cũ..</span></h3>
                                </div></div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">




       <div class="col-sm-6 col-xs-12 col-lg-4 col-md-4" style="margin-bottom:5px;">

<h3><span class ="label label-danger"><span class="glyphicon glyphicon-fire"></span> Sản phẩm Mới</span></h3>
</div>

<div class="clearfix"></div>




           <div class="clearfix"></div>       



          <?php
include('connect.php');

$sql = "SELECT * FROM postads";
$result = mysqli_query($conn, $sql);



while($data = mysqli_fetch_array($result))
   {    

    $data['content'] = substr($data['content'],0,200);

      echo"
        <div class='col-sm-6 col-xs-12 col-lg-4 col-md-4'>
                    
                        <div class='thumbnail'>

                        <div class='carousel-inner' style='max-height: 150px;'>
                               
                                    <img class='slide-image' src='{$data['img_1']}' alt=''>


                               </div>
                              

                            <div class='caption'>

                           <b> <a href='details/?id={$data['id']}'>{$data['title']}</a></b>
                                
                                <p><small>{$data['content']}..</small></p>
                            </div>
                       
                            <div class='ratings'>
                                 
                             
                              
                                <p class='pull-right'><strong style='color:#a94442'>{$data['price']} ₫</strong></p>
                                <p>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star'></span>
                                    <span class='glyphicon glyphicon-star-empty'></span>
                                </p>
                              
                            </div>
                           
                        </div>
                    </div>
      ";

   }
?>
                   
                  


                </div>

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
