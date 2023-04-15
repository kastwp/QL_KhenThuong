<?php
include 'lib/database.php';
$db = new Database();
$sql = "SELECT *,dkdh.id as dh_id FROM dangky_danhhieu dkdh
        JOIN danhhieu dh ON dkdh.dh_id = dh.id
        JOIN profile p ON dkdh.user_id = p.user_id
";
$data = [];
$result = $db->select($sql);
while ($row = mysqli_fetch_array($result, 1)) {
    $data[] = $row;
}
include 'inc/header.php';
include 'inc/sidebar.php';
?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Xét Duyệt Khen Thưởng</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Xét Duyệt Khen Thưởng</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Xét Duyệt Khen Thưởng</h5>

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Danh Hiệu</th>
                                    <th scope="col">Chứng Nhận</th>
                                    <th scope="col">Trạng Thái</th>
                                    <th scope="col">Ngày Đạt</th>
                                    <th scope="col">Thao Tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $item) {
                                    $html = '';
                                    if ($item['status'] == 0) {
                                        $status = '<h5><span class="badge bg-warning">Chờ duyệt</span></h5>';
                                        $html .= '<option selected value="0">Chờ</option><option value="1">Duyệt</option><option value="3">Từ chối</option>';
                                    } else if($item['status'] == 1){
                                        $status = '<h5><span class="badge bg-success">Đã duyệt</span></h5>';
                                        $html .= '<option value="0">Chờ</option><option selected value="1">Duyệt</option><option value="3">Từ chối</option>';
                                    } else {
                                        $status = '<h5><span class="badge bg-danger">Từ chối</span></h5>';
                                        $html .= '<option value="0">Chờ</option><option selected value="1">Duyệt</option><option selected value="3">Từ chối</option>';
                                    }
                                    echo '
                                        <tr>
                                            <td>' . $item['id'] . '</td>
                                            <td>' . $item['hoten'] . '</td>
                                            <td>' . $item['name'] . '</td>
                                            <td><a  href="../NLCS/assets/img/03_3361KHTH_31-08-2021.pdf">Xem Chứng Nhận</a></td>
                                            <td>
                                                '.$status.'
                                            </td>
                                            <td>' . $item['created_at'] . '</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <select data-id=' . $item['dh_id'] . ' name="" class="select-action-dh" class="form-control">
                                                        '.$html.'
                                                    </select>
                                                    <!-- <form action="pages-xd.php">
                                                            <button type="submit" class="btn btn-primary btn-sm"><i class="ri-ball-pen-line"></i>Xét Duyệt</button>
                                                        </form> -->
                                                    <!-- <button type="button" class="btn btn-danger btn-sm">X</button> -->
                                                </div>
                                            </td>
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
<form action="" id="formActionDH" method="POST">
    <input type="text" hidden id="input-action" value="" name="action">
    <input type="text" hidden id="input-dkdh_id" value="" name="dkdh_id">
</form>
<?php
include 'admin/inc/footer.php';
?>

<script>
    let selectAction = document.querySelectorAll(".select-action-dh");
    let formAction = document.querySelector("#formActionDH");
    let selectedAction = document.querySelector("#select-action-dh");
    let inputAction = document.querySelector("#input-action");
    let dh_id = document.querySelector("#input-dkdh_id");

    selectAction.forEach(select => {
        select.onchange = function() {
            formAction.action = 'process-kt.php';
            inputAction.value = select.value;
            dh_id.value = select.dataset.id
            formAction.submit();
        }
    })
</script>