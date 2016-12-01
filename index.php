<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

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


<h3><span class ="label label-danger hidden-xs hidden-sm"><span class="glyphicon glyphicon-fire"></span> Sản phẩm Mới</span></h3>
<h4><span class ="label label-danger hidden-lg hidden-md"><span class="glyphicon glyphicon-fire"></span> Sản phẩm Mới</span></h4>
</div>

<div class="clearfix"></div>




           <div class="clearfix"></div>       





          <?php
include('connect.php');

$sql = "SELECT * FROM postads,member where postads.id_member=member.id order by postads.id desc ";
$result = mysqli_query($conn, $sql);

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



while($data = mysqli_fetch_array($result))
   {    

    $data['content'] = substr($data['content'],0,200);
   
    $price=adddotstring($data['price']);
      echo"

       <!----- display Desktop --->
        <div class='col-sm-6 col-xs-12 col-lg-4 col-md-4 hidden-xs hidden-sm'>
                    
                        <div class='thumbnail'>

                        <div class='carousel-inner' style='max-height: 150px;'>
                               
                                    <img class='slide-image' src='{$data['img_1']}' alt=''>


                               </div>
                              

                            <div class='caption'>
                              ";


                                  if ($data['address']=='ĐH CNTT'||$data['address']=='ĐH B.Khoa'||$data['address']=='ĐH KHTN'||$data['address']=='ĐH KHXHNV'||$data['address']=='ĐH Q.Tế'||$data['address']=='ĐH KTLuật'||$data['address']=='KHoa Y')
                                      echo "<span class='label label-danger'>{$data['address']}</span>";
                                    else
                                      echo "<span class='label label-success'>{$data['address']}</span>";

  echo"


                           <b> <a href='details/?id={$data['id']}'>{$data['title']}</a></b>
                                
                                <p><small>{$data['content']}..</small></p>
                            </div>
                       
                            <div class='ratings'>
                                 
                             
                              
                                <p class='pull-right'><strong style='color:#a94442'>$price ₫</strong></p>
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
                    
 <!----- display Desktop--->

 ";

      
      echo"
<!----- display Mobile --->

            <li class='list-group-item hidden-md hidden-lg' style='margin-right:15px;margin-left:15px'>

                    <div class='row product-box'>
                           
                            <div class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
                                <p><small><a style='color:black' href='details/?id={$data['id']}' >"

                              ;


                                  if ($data['address']=='ĐH CNTT'||$data['address']=='ĐH B.Khoa'||$data['address']=='ĐH KHTN'||$data['address']=='ĐH KHXHNV'||$data['address']=='ĐH Q.Tế'||$data['address']=='ĐH KTLuật'||$data['address']=='KHoa Y')
                                      echo "<span class='label label-danger'>{$data['address']}</span>";
                                    else
                                      echo "<span class='label label-success'>{$data['address']}</span>";

  echo"                              





                                <strong > {$data['title']}</strong></a></small></p><p>
                                
                                </p>
                                <small>Người bán:  <a href = 'user/?id_member={$data['id_member']}'>{$data['user']}</a></small><br/>
                                <small>Ngày đăng: {$data['time']}</small><br/>
                                <small class='navigation'>Chuyên Mục: <a href = 'filter/?category={$data['category']}'>{$data['category']}</a></small>    
                            </div>

                             <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                <center><a href='details/?id={$data['id']}' ><img class='img-responsive product-image-thumb' src='{$data['img_1']}'></a>
                                     <small><strong style='color:#a94442'>$price ₫</strong></small> 
                                </center> 
                            </div>
                            
                         
                        <div class='clearfix'></div>
                         <div class='col-md-12'>
                 
                            <small>Mô tả: {$data['content']}...<br/>
                                <a href='details/?id={$data['id']}'  class='btn btn-xs btn-link' role='button'><i> <b>Xem thêm »</b></i></a></small>
                                
                 </div>

          </li>
     

 <!----- display Mobile --->              
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
