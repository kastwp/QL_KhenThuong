<?php
    include 'admin/inc/header.php';
    include 'admin/inc/sidebar.php';
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

                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
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
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Sinh Viên 5 Dốt</td>
                                        <td>HK2 (2023 - 2024)</td>
                                        <td>Sinh Viên</td>
                                        <td><a href="https://www.facebook.com/">Xem Quyết Định</a></td>
                                        <td>04/01/2023</td>
                                        <td>04/11/2023</td>
                                        <td>
                                            <form action="pages-dkdh.php">
                                                <button type="submit" class="btn btn-primary btn-sm">Đăng Kí</button>
                                            </form>
                                        </td>

                                    </tr>
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