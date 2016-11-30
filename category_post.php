  
    <p><a href="http://localhost:8080/chosinhvien/createpost.php" class="btn btn-success pull-right" style="margin-right:20px"><i class="  glyphicon glyphicon-send"></i>  Đăng Tin Miễn Phí</a>
    </p>
<div class="clearfix"></div>
<hr/>


            <div class="col-md-3">
             
             <!-- display on mobile-->
                <div class="list-group hidden-md hidden-lg" >
                
                <a data-toggle="collapse" href="#showchuyenmuc" class="list-group-item active" > Chuyên Mục <span class="glyphicon glyphicon-chevron-down pull-right"></span></a>
                
                <div id="showchuyenmuc" class="collapse">
                    <a href="http://localhost:8080/chosinhvien/filter?category=Thời Trang" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Thời Trang
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Thời Trang' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost:8080/chosinhvien/filter?category=Việc Làm" class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span> Việc Làm
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Việc Làm' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a hhref="http://localhost:8080/chosinhvien/filter?category=Nhà ở" class="list-group-item"><span class="glyphicon glyphicon-home"></span> Nhà ở
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Nhà ở' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost:8080/chosinhvien/filter?category=Đồ ăn/Thức uống" class="list-group-item"><span class="glyphicon glyphicon-heart"></span> Đồ ăn/Thức uống
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Đồ ăn/Thức uống' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost:8080/chosinhvien/filter?category=Sách vở" class="list-group-item"><span class="glyphicon glyphicon glyphicon-book"></span> Sách vở
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách vở' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost:8080/chosinhvien/filter?category=Điện Tử" class="list-group-item"><span class="glyphicon glyphicon-wrench"></span> Điện Tử
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Điện Tử' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost:8080/chosinhvien/filter?category=Điện Thoại" class="list-group-item"><span class="glyphicon glyphicon-phone"></span> Điện Thoại
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Điện Thoại' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost:8080/chosinhvien/filter?category=Máy ảnh" class="list-group-item"><span class="glyphicon glyphicon glyphicon-camera"></span> Máy ảnh
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Máy ảnh' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost:8080/chosinhvien/filter?category=Tai Nghe" class="list-group-item"><span class="glyphicon glyphicon glyphicon-headphones"></span> Tai Nghe 
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Tai Nghe' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost:8080/chosinhvien/filter?category=Xe Máy/Xe đạp" class="list-group-item"><span class="glyphicon glyphicon-plane"></span> Xe Máy/Xe đạp
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Xe Máy/Xe đạp' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost:8080/chosinhvien/filter?category=Linh Tinh" class="list-group-item"><span class="glyphicon glyphicon-piggy-bank"></span> Linh Tinh  
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Linh Tinh' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>
                </div>
                </div>
                 <!-- end mobile-->
                 
                  <!-- display on desktop-->
                <div class="list-group hidden-sm hidden-xs" >
                
                <span class="list-group-item active" > Chuyên Mục </span>
                
                <div id="showchuyenmuc">
                    <a href="http://localhost:8080/chosinhvien/filter?category=Thời Trang" class="list-group-item"><span class="glyphicon glyphicon-user"></span> Thời Trang
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Thời Trang' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost:8080/chosinhvien/filter?category=Việc Làm" class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span> Việc Làm
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Việc Làm' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost:8080/chosinhvien/filter?category=Nhà ở" class="list-group-item"><span class="glyphicon glyphicon-home"></span> Nhà ở
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Nhà ở' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost:8080/chosinhvien/filter?category=Đồ ăn/Thức uống" class="list-group-item"><span class="glyphicon glyphicon-heart"></span> Đồ ăn/Thức uống
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Đồ ăn/Thức uống' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost:8080/chosinhvien/filter?category=Sách vở" class="list-group-item"><span class="glyphicon glyphicon glyphicon-book"></span> Sách vở
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Sách vở' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>


                    <a href="http://localhost:8080/chosinhvien/filter?category=Điện Tử" class="list-group-item"><span class="glyphicon glyphicon-wrench"></span> Điện Tử
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Điện Tử' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost:8080/chosinhvien/filter?category=Điện Thoại" class="list-group-item"><span class="glyphicon glyphicon-phone"></span> Điện Thoại
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Điện Thoại' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost:8080/chosinhvien/filter?category=Máy ảnh" class="list-group-item"><span class="glyphicon glyphicon glyphicon-camera"></span> Máy ảnh
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Máy ảnh' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost:8080/chosinhvien/filter?category=Tai Nghe" class="list-group-item"><span class="glyphicon glyphicon glyphicon-headphones"></span> Tai Nghe 
                    <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Tai Nghe' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost:8080/chosinhvien/filter?category=Xe Máy/Xe đạp" class="list-group-item"><span class="glyphicon glyphicon-plane"></span> Xe Máy/Xe đạp
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Xe Máy/Xe đạp' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>

                    <a href="http://localhost:8080/chosinhvien/filter?category=Linh Tinh" class="list-group-item"><span class="glyphicon glyphicon-piggy-bank"></span> Linh Tinh  
                     <span class = "badge pull-right">   <?php  include('connect.php'); $sql = "SELECT count(id) as total from postads where category='Linh Tinh' ";    $result = mysqli_query($conn, $sql);    $data = mysqli_fetch_array($result);echo $data['total'];$conn->close();?> 
                    </span>  
                    </a>
                
                </div>
                   </div>
                 <!-- end desktop-->
                 
                 
            </div>