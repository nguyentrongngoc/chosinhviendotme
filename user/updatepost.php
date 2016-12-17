<?php
session_start();
?>
<?php
// Lấy thông tin username và email
$first_name         = isset($_POST['first_name']) ? $_POST['first_name'] : false;
$last_name          = isset($_POST['last_name']) ? $_POST['last_name'] : false;
$phone         		= isset($_POST['phone']) ? $_POST['phone'] : false;
$password           = isset($_POST['password']) ? $_POST['password'] : false;
$passwordnew        = isset($_POST['passwordnew']) ? $_POST['passwordnew'] : false;

$id_member=$_SESSION['id_member'];
$conn = mysqli_connect('localhost', 'root', '', 'chosinhvien') or die ('{error:"bad_request"}');
mysqli_query($conn,"SET NAMES 'UTF8'");
// Khai báo biến lưu lỗi
$error = array(
    'error' => 'success',
    'password'  => ''
);
if($password=='')
	$sql = "UPDATE member SET first_name='$first_name', last_name='$last_name', phone='$phone' WHERE id='$id_member'";
else
	{
        $passwordnew=md5($passwordnew);
        $password=md5($password);
    $query = mysqli_query($conn, "select password from member where id='$id_member' and password='$password'");
    if ($query){
        $row = mysqli_fetch_array($query, MYSQLI_ASSOC);
        if ($row['password'])
        {
            $sql = "UPDATE member SET first_name='$first_name', last_name='$last_name', phone='$phone', password='$passwordnew' WHERE id='$id_member'";

        }
        else {
            $sql = "UPDATE member SET id='$id_member' WHERE id='$id_member'";
                $error['password'] = '*Mật khẩu cũ không đúng';
            }
        	 
    }
    else die ('{error:"bad_request"}');
}
$conn->query($sql);

// Trả kết quả về cho client
die (json_encode($error));
?>