            
    <main id="main" class="main">

        <section class="section profile">
            <div class="row">
                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <h5 class="card-title">Chi Tiết Thông Tin</h5>
                                    <?php
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "nlcs";
                                    // tạo kết nối
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // kiểm kết nối
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
                                        $sql = "SELECT mssv, hoten, gioitinh, ngaysinh, diachi, sdt, lop, nganh, nienkhoa, khoa FROM profile";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // Load dữ liệu lên website
                                            while($row = $result->fetch_assoc()) {
                                                ?>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Mã Số Sinh Viên</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $row['mssv'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Họ và tên</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $row['hoten'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Giới Tính</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $row['ngaysinh'];?></div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Ngày Sinh</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $row['ngaysinh'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Địa Chỉ</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $row['diachi'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Số Điện Thoại</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $row['sdt'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Lớp</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $row['lop'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Ngành</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $row['nganh'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Khóa</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $row['nienkhoa'];?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Khoa</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $row['khoa'];?></div>
                                    </div>

                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->
                            <?php
                        }
                    } else {
                        echo "0 results";
                        }
                    $conn->close();
                ?>