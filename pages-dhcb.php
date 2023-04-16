<?php
session_start();
include 'lib/database.php';
$db = new Database();
$data = [];
$user_id = $_SESSION['id'];
$sql = "SELECT * FROM dangky_danhhieu dkdh
        JOIN danhhieu dh ON dkdh.dh_id = dh.id
WHERE dkdh.user_id = $user_id AND dkdh.status = 1";
echo $sql;
$result = $db->select($sql);
if ($result) {
    while ($row = mysqli_fetch_array($result, 1)) {
        $data[] = $row;
    }
}

include 'inc/header.php';
include 'inc/sidebar.php';
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Danh Hiệu Của Bạn</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Danh Hiệu Của Bạn</li>
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

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã Danh Hiệu</th>
                                    <th scope="col">Tên Danh Hiệu</th>
                                    <th scope="col">Đợt Thi Đua</th>
                                    <th scope="col">Đối Tượng</th>
                                    <th scope="col">Quyết Định</th>
                                    <th scope="col">Ngày Quyết Định</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($data) {
                                    foreach ($data as $item) {
                                        echo '
                                            <tr>
                                                <td>' . $item['id'] . '</td>
                                                <td>' . $item['name'] . '</td>
                                                <td>' . $item['dotthidua'] . '</td>
                                                <td>' . $item['doituong'] . '</td>
                                                <td><a href="../NLCS/assets/img/03_3361KHTH_31-08-2021.pdf">Tải Xuống</a></td>
                                                <td>' . $item['created_at'] . '</td>
                                            </tr>';
                                    }
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