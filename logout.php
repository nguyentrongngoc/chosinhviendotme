<?php 

session_start();  
if (isset($_SESSION['id_member'])){
    unset($_SESSION['id_member']); // xóa session login
}
header('Refresh:0; url=http://localhost:8080/chosinhvien/index.php');
?>