<?php
session_start();
include 'lib/database.php';
$db = new Database();
if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {
    switch ($_POST['action']) {
        case 'add':
            $name = $_POST['name'];
            $dotthidua = $_POST['dotthidua'];
            $doituong = $_POST['doituong'];
            $ngaybatdau = $_POST['ngaybatdau'];
            $ngayketthuc = $_POST['ngayketthuc'];

            $sql = "INSERT INTO danhhieu (name,dotthidua,doituong,ngaybatdau,ngayketthuc) VALUES('$name','$dotthidua','$doituong','$ngaybatdau','$ngayketthuc')";
            $result = $db->insert($sql);


            if ($result) {
                $_SESSION['flash_message'] = 'Thêm danh hiệu thành công !';
            } else {
                $_SESSION['flash_message'] = 'Thêm danh hiệu thất bại !';
            }

            break;
        case 'delete':
            $id_dh = $_POST['id_dh'];
            $sql = "DELETE FROM danhhieu WHERE id = $id_dh";
            $result = $db->delete($sql);
            if ($result) {
                $_SESSION['flash_message'] = 'Xóa danh hiệu thành công !';
            } else {
                $_SESSION['flash_message'] = 'Xóa danh hiệu thất bại !';
            }
            break;
        case 'edit':
            $id_dh = $_POST['id_dh'];
            $name = $_POST['name'];
            $dotthidua = $_POST['dotthidua'];
            $doituong = $_POST['doituong'];
            $ngaybatdau = $_POST['ngaybatdau'];
            $ngayketthuc = $_POST['ngayketthuc'];
            $sql = "UPDATE danhhieu SET `name` = '$name',`dotthidua` = '$dotthidua',`doituong` = '$doituong',`ngaybatdau` = '$ngaybatdau', `ngayketthuc` = '$ngayketthuc' WHERE id = $id_dh";
            $result = $db->update($sql);
            if ($result) {
                $_SESSION['flash_message'] = 'Chỉnh sửa danh hiệu thành công !';
            } else {
                $_SESSION['flash_message'] = 'Chỉnh sửa danh hiệu thất bại !';
            }
            break;
        case 'dangky':
            $user_id = $_POST['id_hs'];
            $dh_id = $_POST['danhhieu'];
            $sql = "INSERT INTO dangky_danhhieu (user_id,dh_id) VALUES($user_id,$dh_id)";
            $result = $db->insert($sql);
            if ($result) {
                $_SESSION['flash_message'] = 'Đăng ký danh hiệu thành công !';
            } else {
                $_SESSION['flash_message'] = 'Đăng ký danh hiệu thất bại !';
            }
            // print_r($_POST); die();
            break;
        default:
            # code...
            break;
    }
    header("Location: ./pages-dsdh.php");
}
