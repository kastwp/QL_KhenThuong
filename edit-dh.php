<?php
include 'inc/header.php';
include 'inc/sidebar.php';
include 'lib/database.php';
$db = new Database();
$id = $_GET['id'] ? $_GET['id'] : null;
$sql = "SELECT * FROM danhhieu WHERE id = $id";
$data = mysqli_fetch_assoc($db->select($sql));

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
                        <h5 class="card-title">Chỉnh sửa danh hiệu</h5>

                        <!-- General Form Elements -->
                        <form action="process-dh.php" method="POST">
                            <input type="text" value="edit" name="action" hidden>
                            <input type="text" value="<?=$id?>" name="id_dh" hidden>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Tên danh hiệu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value="<?=$data['name']?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Đợt thi đua</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dotthidua" value="<?=$data['dotthidua']?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Đối tượng</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="doituong" value="<?=$data['doituong']?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Ngày bắt đầu</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="ngaybatdau" value="<?=$data['ngaybatdau']?>">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Ngày kết thúc</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="ngayketthuc" value="<?=$data['ngayketthuc']?>">
                                </div>
                            </div>
                            <button class="btn btn-success">Chỉnh sửa</button>
                            <!-- <div class="row mb-3">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                                        Đăng Kí
                                    </button>
                                    <div class="modal fade" id="basicModal" tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Đăng Kí</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Đăng Kí Thành Công! Vui lòng đợi kết quả xét duyệt!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </form>
                        <!-- End General Form Elements -->
</main>

<?php include 'inc/footer.php' ?>