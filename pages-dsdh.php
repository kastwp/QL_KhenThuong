<?php
session_start();

$message = '';
if (isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
}
include 'lib/database.php';
$conn = new Database();
$sql = "SELECT * FROM danhhieu";
$data = [];
$result = $conn->select($sql);
while ($row = mysqli_fetch_array($result, 1)) {
    $data[] = $row;
}

include 'inc/header.php';
include 'inc/sidebar.php';
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Danh sách Danh Hiệu</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Danh sách Danh Hiệu</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh Sách Danh Hiệu Của Bạn</h5>
                        <?php
                        if ($message != '') {
                        echo '<div class="alert alert-success">'.$message.'</div>';
                            
                        }
                        if ($_SESSION['role']) {
                            echo '<a href="/add_dh.php" class="btn btn-success">Thêm danh hiệu</a>';
                        }
                        ?>
                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã Danh Hiệu</th>
                                    <th scope="col">Tên Danh Hiệu</th>
                                    <th scope="col">Đợt Thi Đua</th>
                                    <th scope="col">Đối Tượng</th>
                                    <th scope="col">Quyết Định</th>
                                    <th scope="col">Ngày Bắt Đầu</th>
                                    <th scope="col">Ngày Kết Thúc</th>
                                    <th scope="col">Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $item) {
                                    $btnDelete = '';
                                    if ($_SESSION['role']) {
                                        $btnDelete = '<button type="submit" onclick=" return deleteDH(this)" class="btn btn-danger btn-sm">Xóa</button>';
                                    }
                                    echo '
                                        <tr>
                                            <th scope="row">'.$item['id'].'</th>
                                            <td><a href="edit-dh.php?id='.$item['id'].'">'.$item['name'].'</a></td>
                                            <td>' . $item['dotthidua'] . '</td>
                                            <td>' . $item['doituong'] . '</td>
                                            <td><a href="https://www.facebook.com/">Xem Quyết Định</a></td>
                                            <td>' . $item['ngaybatdau'] . '</td>
                                            <td>' . $item['ngayketthuc'] . '</td>
                                            <td>
                                                <form action="pages-dkdh.php">
                                                    <button type="submit" class="btn btn-primary btn-sm">Đăng Kí</button>
                                                </form>
                                                <form name="formDeleteDH" action="process-dh.php" method="POST">
                                                    <input hidden type="text" value="' . $item['id'] . '" name="id_dh">
                                                    <input hidden type="text" value="delete" name="action">
                                                    
                                                    '.$btnDelete.'
                                                </form>
                                            </td>

                                        </tr>';
                                }

                                ?>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>

        </div>

    </section>

</main>
<!-- End #main -->

<?php
include 'inc/footer.php';

?>
<script>
    let formDelete = document.querySelectorAll("form[name='formDeleteDH']");
    // formDelete.submit(function (e) {
    //     e.preventDefault()
    // })
    // formDelete.forEach(form => {
    //     form.onsubmit(function (e) {
    //         e.preventDefault()
    //     })
    // });
    function deleteDH(form) {
        if (!confirm("Bạn có chắc chắn muốn xóa ?")) {
            return;
        }
        // form.onsubmit = function(e) {
        //     e.preventDefault();
        // }
    }
</script>