<?php
// Lấy thông tin username và email
    $email              = isset($_POST['email']) ? $_POST['email'] : false;
    $first_name         = isset($_POST['first_name']) ? $_POST['first_name'] : false;
    $last_name          = isset($_POST['last_name']) ? $_POST['last_name'] : false;
    $phone              = isset($_POST['phone']) ? $_POST['phone'] : false;
    $password           = isset($_POST['password']) ? $_POST['password'] : false;
// Nếu cả hai thông tin username và email đều không có thì dừng, thông báo lỗi
if (!$email){
    die ('{error:"bad_request"}');
}

// Kết nối database
$conn = mysqli_connect('localhost', 'root', '', 'chosinhvien') or die ('{error:"bad_request"}');


// Khai báo biến lưu lỗi
$error = array(
    'error' => 'success',
    'email' => ''
);
$check = 0;
// Kiểm tra tên email
if ($email)
{
    $query = mysqli_query($conn, "select count(*) as count from member where email = '$email'");

    if ($query){
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        if ((int)$row['count'] > 0){
            $error['email'] = 'Email đã tồn tại';
            $check = 1;
        }
    }
    else{
        die ('{error:"bad_request"}');
    }
}


// Tiến hành lưu vào CSDL
if ($check == 0) {
$sql = "INSERT INTO member(first_name,last_name,email,phone,password)
    VALUES ('$first_name','$last_name','$email','$phone','$password')";
$conn->query($sql);
}
// Trả kết quả về cho client
die (json_encode($error));
?>
