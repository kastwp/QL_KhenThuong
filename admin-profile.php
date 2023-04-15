<?php
session_start();
$userId = $_SESSION['id'];
print_r($_SESSION);
include 'admin/inc/header.php';
include 'admin/inc/sidebar.php';
?>

<?php
require_once 'classes/contact.php';
// kiểm kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM profile WHERE user_id = $userId";
// echo $sql;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
// print_r($row);
// die();
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Thông Tin</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Thông Tin</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <h2>Trần Quốc Tuấn</h2>
                        <h3>Admin</h3>
                        <div class="social-links mt-2">
                            <a href="https://www.facebook.com/tw.kas" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/_04th11_02/" class="instagram"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Tổng Quan</button>
                            </li>

                            

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Chi Tiết Thông Tin</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Mã Số Sinh Viên</div>
                                    <div class="col-lg-9 col-md-9"><?php echo $row['mssv']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Họ và tên</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['hoten']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Giới Tính</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['gioitinh']; ?></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Ngày Sinh</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['ngaysinh']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Địa Chỉ</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['diachi']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Số Điện Thoại</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['sdt']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Lớp</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['lop']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Ngành</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['nganh']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Khóa</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['nienkhoa']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Khoa</div>
                                    <div class="col-lg-9 col-md-8"><?php echo $row['khoa']; ?></div>
                                </div>

                            </div>

                            

                        </div>
                        <!-- End Bordered Tabs -->

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