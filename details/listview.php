<?php


      echo"
<!----- display Mobile --->
            
            <li class='list-group-item hidden-md hidden-lg' >

                    <div class='row product-box'>
                           
                            <div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
                                <p><small><a style='color:black' href='../details/?id={$data['id']}' >

                                 <span class='label label-success'>{$data['address']}</span>




                                <strong > {$data['title']}</strong></a></small><br/>
                                <small>Ngày đăng: {$data['time']}</small><br/>
                                <small>Người bán: <a href = '../user/?id={$data['id']}'>{$data['user']}</a></small><br/>
                                <small class='navigation'>Chuyên Mục: <a href = '../filter/?category={$data['category']}'>{$data['category']}</a></small>    
                            </div>

                             <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                                <center><a href='../details/?id={$data['id']}' > <div class='carousel-inner' style='max-height: 100px;''>
                                    <img class='slide-image' src='../{$data['img_1']}'>
                               </div></a>
                                     <small><strong style='color:#a94442'>$price ₫</strong></small> 
                                </center> 
                            </div>
                            
                         
                        <div class='clearfix'></div>
                         <div class='col-md-12'>
                            <small>Mô tả: {$data['content']}...
                                <a href='../details/?id={$data['id']}'  class='btn btn-xs btn-link' role='button'><i><b>Xem thêm »</b></i></a></small>
                                
                        </div>

          </li>

 <!----- display Mobile --->
 ";
 
echo "
 <!----- display Desktop --->         
           <li class='list-group-item hidden-xs hidden-sm'>

                    <div class='row product-box'>
                            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                <center><a href='../details/?id={$data['id']}' >
                                <div class='carousel-inner' style='max-height: 150px;''>
                                    <img class='slide-image' src='../{$data['img_1']}'>
                               </div></a>

                               </center> 
                            </div>
                            <div class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
                                <p><small><a style='color:black' href='../details/?id={$data['id']}' >


                                     <span class='label label-success'>{$data['address']}</span>

                              <strong> {$data['title']}</strong></a></small><br/>
                              <small>Ngày đăng: {$data['time']}</small><br/>
                                <small>Người bán: <a href = '../user/?id_member={$data['id_member']}'>{$data['user']}</a></small><br/>
                                <small class='navigation'>Chuyên Mục: <a href = '../filter/?category={$data['category']}'>{$data['category']}</a></small><br/>
                                <small>Giá: <strong style='color:#a94442'>$price ₫</strong></small>   <br/> 

                                <small>Mô tả: {$data['content']}...
                                <a href='../details/?id={$data['id']}'  class='btn btn-xs btn-link' role='button'><i> <b>Xem thêm »</b></i></a></small>
                            </div>
                        </div>
                     
          </li>
<!----- display desktop --->
      ";
?>	  
