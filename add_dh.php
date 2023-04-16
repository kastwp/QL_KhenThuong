<?php
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
                <li class="breadcrumb-item active">Thêm danh hiệu</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thêm danh hiệu mới</h5>

                        <!-- General Form Elements -->
                        <form action="process-dh.php" method="POST">
                            <input type="text" value="add" name="action" hidden>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Tên danh hiệu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Đợt thi đua</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="dotthidua">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Đối tượng</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="doituong">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Ngày bắt đầu</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="ngaybatdau">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Ngày kết thúc</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="ngayketthuc">
                                </div>
                            </div>
                            <button class="btn btn-success">Thêm</button>
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

<?php include 'inc/footer.php'; ?>