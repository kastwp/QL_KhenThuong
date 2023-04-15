<?php
include 'lib/database.php';
$db = new Database();

$sql = "SELECT dh.id,dh.name,COUNT(user_id) AS total FROM
dangky_danhhieu dkdh 
JOIN danhhieu dh ON dkdh.dh_id = dh.id
GROUP BY dh.id,dh.name";
$result = $db->select($sql);
$data = [];
while ($row = mysqli_fetch_array($result,1)) {
    $data[] = $row;
}

include 'inc/header.php';
include 'inc/sidebar.php';
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Thống Kê</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Thống Kê</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thống kê</h5>

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã Danh Hiệu</th>
                                    <th scope="col">Tên Danh Hiệu</th>
                                    <th scope="col">Số lượng sinh viên</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($data as $item) {
                                        echo '
                                        <tr>
                                            <td>'.$item['id'].'</td>
                                            <td>'.$item['name'].'</td>
                                            <td>'.$item['total'].'</td>
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
include 'admin/inc/footer.php';
?>