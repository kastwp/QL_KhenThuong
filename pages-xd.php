<?php
    include 'admin/inc/header.php';
    include 'admin/inc/sidebar.php';
?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Xét Duyệt Khen Thưởng</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active">Xét Duyệt Khen Thưởng</li>
                    <li class="breadcrumb-item active">Xét Duyệt</li>
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
                            <form>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Mã Số Sinh Viên</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Họ và Tên</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Danh Hiệu</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">File Chứng Nhận</label>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label">Trạng Thái</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" aria-label="Default select example">
                                        <option selected>Đã Xem</option>
                                        <option value="1">Được Đề Nghị Xét Duyệt</option>
                                        <option value="2">Không Được Đề Nghị Xét Duyệt</option>
                                        <option value="3">Đạt Danh Hiệu</option>
                                        <option value="4">Không Đạt Danh Hiệu</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                                            Xác Nhận
                                          </button>
                                    </div>
                                </div>
                            </form>
                            <!-- End General Form Elements -->
    </main>
    <!-- End #main -->

<?php
    include 'admin/inc/footer.php';
?>