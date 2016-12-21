<?php
session_start();
?>
<?php
// Lấy thông tin username và email
    $email              = isset($_POST['email']) ? $_POST['email'] : false;
    $password           = isset($_POST['password']) ? $_POST['password'] : false;
    $password           = md5($password);
// Kết nối database

$conn = mysqli_connect('localhost', 'root', '', 'chosinhvien') or die ('{error:"bad_request"}');
mysqli_query($conn,"SET NAMES 'UTF8'");
// Khai báo biến lưu lỗi
$error = array(
    'error' => 'success',
    'email' => ''
);

// Kiểm tra tên email
    $query = mysqli_query($conn, "select email,password,id from member where email = '$email'");
    if ($query){
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        if ($row['email'] != $email || $row['password'] != $password){
            $error['email'] = 'Thông tin đăng nhập không chính xác';
        }
        else $_SESSION['id_member'] = $row['id'];
    }
    else{
        die ('{error:"bad_request"}');
    }


// Tiến hành lưu vào CSDL
// Trả kết quả về cho client
die (json_encode($error));
?>