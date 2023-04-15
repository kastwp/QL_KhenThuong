<?php
include 'lib/database.php';

$db = new Database();
$sql = "SELECT * FROM danhhieu";
$danhhieu = [];
$result = $db->select($sql);
while ($row = mysqli_fetch_array($result, 1)) {
    $danhhieu[] = $row;
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
                <li class="breadcrumb-item active">Đăng Kí</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Đăng Kí Danh Hiệu</h5>

                        <!-- General Form Elements -->
                        <form action="process-dh.php" method="POST">
                            <input hidden type="text" name="action" value="dangky">
                            <input hidden type="text" name="id_hs" value="<?=$_SESSION['id']?>">
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Họ và Tên</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="hoten">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group d-flex">
                                    <label for="inputText" class="col-sm-2 col-form-label">Danh Hiệu</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="danhhieu" id="">
                                            <?php
                                            foreach ($danhhieu as $item) {
                                                echo '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputNumber" class="col-sm-2 col-form-label">Upload File Chứng Nhận</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">
                                        Đăng Kí
                                    </button>
                                    
                                </div>
                            </div>
                        </form>
                        <!-- End General Form Elements -->
</main>
<!-- End #main -->

<?php
include 'inc/footer.php';
?>