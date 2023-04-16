    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.php">
                    <i class="bi bi-person"></i>
                    <span>Thông Tin</span>
                </a>
            </li>
            <!-- End Profile Page Nav -->
            <?php
            if ($_SESSION['role']==0) {
                echo '<li class="nav-item">
                    <a class="nav-link collapsed" href="pages-dhcb.php">
                        <i class="bi bi-card-list"></i>
                        <span>Danh Hiệu Của Bạn</span>
                    </a>
                </li>
                ';
            }

            ?>
            <!-- End Register Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-dsdh.php">
                    <i class="bi bi-card-list"></i>
                    <span>Danh Sách Danh Hiệu</span>
                </a>
            </li>
            <?php
            if ($_SESSION['role']) {
                echo '<li class="nav-item">
                    <a class="nav-link collapsed" href="pages-xdkt.php">
                        <i class="bi bi-card-list"></i>
                        <span>Xét Duyệt Khen Thưởng</span>
                    </a>
                </li><li class="nav-item">
                    <a class="nav-link collapsed" href="pages-tk.php">
                        <i class="bi bi-card-list"></i>
                        <span>Thống kê</span>
                    </a>
                </li>
                ';
            }

            ?>


            <!-- End Register Page Nav -->

        </ul>

    </aside>
    <!-- End Sidebar-->