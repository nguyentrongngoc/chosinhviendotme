<?php
      echo"

            <li class='list-group-item'>

                    <div class='row product-box'>
                            <div class='col-xs-3 col-sm-3 col-md-3 col-lg-3'>
                                <center><a href='../details/?id={$data['id']}' ><img class='img-responsive product-image-thumb' src='../{$data['img_1']}'></a></center> 
                            </div>
                            <div class='col-xs-9 col-sm-9 col-md-9 col-lg-9'>
                                <p><small><a style='color:black' href='../details/?id={$data['id']}' ><span class='label label-success'>{$data['address']}</span><strong> {$data['title']}</strong></a></small></p><p>
                                
                                </p>
                                <small>Người bán: {$data['user']}</small><br/>
                                <small>Ngày đăng: {$data['time']}</small><br/>
                                <small class='navigation'>Chuyên Mục: {$data['category']}</small><br/>
                                <small>Giá: <strong>{$data['price']} ₫</strong></small>   <br/> 

                                <p><small>Mô tả: {$data['content']}...</p>
                                <a href='../details/?id={$data['id']}'  class='btn btn-xs btn-link' role='button'><i> <b>Xem thêm »</b></i></a></small>
                            </div>
                        </div>
                     
          </li>

      ";
?>	  
