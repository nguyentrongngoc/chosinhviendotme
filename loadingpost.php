<?php


if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    // Mình sleep 1 giây để các bạn check nhé, khi sử dụng thì bỏ đoạn sleep này đi
    sleep(0);}

 
// Kết nối database
include('connect.php');

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
// Lấy trang hiện tại
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
 
// Kiểm tra trang hiện tại có bé hơn 1 hay không
if ($page < 1) {
    $page = 1;
}
 
// Số record trên một trang
$limit = 9;
 
// Tìm start
$start = ($limit * $page) - $limit;
 
// Câu truy vấn
// Trong câu truy vấn này chúng ta sẽ lấy limit tăng lên 1
// Lý do là vì ta không có viết code đếm record nên dựa vào tổng số kết quả trả về để:
// - Nếu kết quả trả về bằng $limit + 1 thì còn phân trang
// - Nếu kết quả trả về bé hơn $limit + 1 thì nghĩa là hết dữ liệu nên ngưng phân trang
$sql = "select * from postads order by id desc limit $start,".($limit + 1);
 
// Thực hiện câu truy vấn
$query = mysqli_query($conn, $sql) or die ('Lỗi câu truy vấn');
 
// Duyệt kết quả rồi đưa vào mảng result
$result = array();
while ($row = mysqli_fetch_array($query))
{
    // Thêm vào result
    array_push($result, $row);
}
$total = count($result);
// Nếu là request ajax thì trả kết quả JSON



    if ($total > $limit){
    for ($i = 0; $i < $total - 1; $i++)
    {
       
     $result[$i]['content'] = mb_substr($result[$i]['content'],0,150,'UTF-8');
    $price=adddotstring($result[$i]['price']);
            echo"

       <!----- display Desktop --->
                   <div class='col-sm-6 col-xs-12 col-lg-4 col-md-4 hidden-xs hidden-sm'>
                    
                        <div class='thumbnail'>

                        <div class='carousel-inner' style='max-height: 150px;'>
                               
                                    <img class='slide-image' src='{$result[$i]['img_1']}' alt=''>


                               </div>
                              

                            <div class='caption'>
                              ";


  echo"


                           <b><a href='details/?id={$result[$i]['id']}'  style='color:black'>{$result[$i]['title']}</a></b>
                                
                                <p><small>{$result[$i]['content']}..</small></p>
                            </div>
                       
                            <div class='ratings' style='margin-top:5px'>
                                 
                             
                              
                                <p class='pull-right'><strong style='color:#a94442'>$price ₫</strong></p>
                                <p>
                               
                                    <span class='label label-success'>{$result[$i]['address']}</span>

                                </p>
                              
                            </div>
                           
                        </div>
                    </div>
                    
                    
 <!----- display Desktop--->

 ";

      
      echo"
<!----- display Mobile --->

            <li class='list-group-item hidden-md hidden-lg'>

                    <div class='row product-box'>
                           
                            <div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
                                <p><small><a style='color:black' href='details/?id={$result[$i]['id']}' >


                                    <span class='label label-success'>{$result[$i]['address']}</span>



                                <strong > {$result[$i]['title']}</strong></a></small><br/>
                                 <small>Ngày đăng: {$result[$i]['time']}</small><br/>
                                <small>Người bán:  <a href = 'user/?id_member={$result[$i]['id_member']}'>{$result[$i]['user']}</a></small><br/>
                                <small class='navigation'>Chuyên Mục: <a href = 'filter/?category={$result[$i]['category']}'>{$result[$i]['category']}</a></small>    
                            </div>

                             <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                                <center><a href='details/?id={$result[$i]['id']}' ><div class='carousel-inner' style='max-height: 100px;''>
                                    <img class='slide-image' src='{$result[$i]['img_1']}'>
                               </div></a>
                                     <small><strong style='color:#a94442'>$price ₫</strong></small> 
                                </center> 
                            </div>
                            
                         
                        <div class='clearfix'></div>
                         <div class='col-md-12'>
            
                            <small>Mô tả: {$result[$i]['content']}...
                                <a href='details/?id={$result[$i]['id']}'  class='btn btn-xs btn-link' role='button'><i> <b>Xem thêm »</b></i></a></small>
                                
                 </div>

          </li>
     

 <!----- display Mobile --->          ";
    }
}
else{
    for ($i = 0; $i < $total; $i++)
    {
        
     $result[$i]['content'] = mb_substr($result[$i]['content'],0,150,'UTF-8');
    $price=adddotstring($result[$i]['price']);
              echo"

       <!----- display Desktop --->
                   <div class='col-sm-6 col-xs-12 col-lg-4 col-md-4 hidden-xs hidden-sm'>
                    
                        <div class='thumbnail'>

                        <div class='carousel-inner' style='max-height: 150px;'>
                               
                                    <img class='slide-image' src='{$result[$i]['img_1']}' alt=''>


                               </div>
                              

                            <div class='caption'>
                           

                           <b><a href='details/?id={$result[$i]['id']}'  style='color:black'>{$result[$i]['title']}</a></b>
                                
                                <p><small>{$result[$i]['content']}..</small></p>
                            </div>
                       
                            <div class='ratings' style='margin-top:5px'>
                                 
                             
                              
                                <p class='pull-right'><strong style='color:#a94442'>$price ₫</strong></p>
                                <p>
                               <span class='label label-success'>{$result[$i]['address']}</span>
                                </p>
                              
                            </div>
                           
                        </div>
                    </div>
                    
 <!----- display Desktop--->
 ";

      
      echo"
<!----- display Mobile --->

            <li class='list-group-item hidden-md hidden-lg'>

                    <div class='row product-box'>
                           
                            <div class='col-xs-8 col-sm-8 col-md-8 col-lg-8'>
                                <p><small><a style='color:black' href='details/?id={$result[$i]['id']}' >

                                      <span class='label label-success'>{$result[$i]['address']}</span>


                                <strong > {$result[$i]['title']}</strong></a></small><br/>
                                 <small>Ngày đăng: {$result[$i]['time']}</small><br/>
                                <small>Người bán:  <a href = 'user/?id_member={$result[$i]['id_member']}'>{$result[$i]['user']}</a></small><br/>
                                <small class='navigation'>Chuyên Mục: <a href = 'filter/?category={$result[$i]['category']}'>{$result[$i]['category']}</a></small>    
                            </div>

                             <div class='col-xs-4 col-sm-4 col-md-4 col-lg-4'>
                                <center><a href='details/?id={$result[$i]['id']}' ><div class='carousel-inner' style='max-height: 100px;''>
                                    <img class='slide-image' src='{$result[$i]['img_1']}'>
                               </div></a>
                                     <small><strong style='color:#a94442'>$price ₫</strong></small> 
                                </center> 
                            </div>
                            
                         
                        <div class='clearfix'></div>
                         <div class='col-md-12'>
            
                            <small>Mô tả: {$result[$i]['content']}...
                                <a href='details/?id={$result[$i]['id']}'  class='btn btn-xs btn-link' role='button'><i> <b>Xem thêm »</b></i></a></small>
                                
                 </div>

          </li>
     

 <!----- display Mobile --->          ";

}
    }

?>