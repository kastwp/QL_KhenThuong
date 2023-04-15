<?php
include 'lib/database.php';
$db = new Database();
if (isset($_SERVER['REQUEST_METHOD']) == 'POST') {

    $dkdh_id = $_POST['dkdh_id'];
    $action = $_POST['action'];
    $user_id = $_POST['user_id'];
    $sql = "UPDATE dangky_danhhieu SET `status` = $action WHERE id = $dkdh_id";
    $result = $db->update($sql);

    header("Location: ./pages-dkdh.php");
}

?>