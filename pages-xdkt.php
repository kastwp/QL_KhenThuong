<?php
include 'lib/database.php';
$db = new Database();

$conn = mysqli_connect('localhost', 'root', '', 'nlcs');

$results_per_page = 2;

$query = 'SELECT *,dkdh.id as dh_id FROM dangky_danhhieu dkdh
JOIN danhhieu dh ON dkdh.dh_id = dh.id
JOIN profile p ON dkdh.user_id = p.user_id';

$result = mysqli_query($conn, $query);

$number_of_result = mysqli_num_rows($result);

//determine the total number of pages available

$number_of_page = ceil ($number_of_result / $results_per_page);

if (!isset ($_GET['page']) ) {

    $page = 1;
    
} else {
    
    $page = $_GET['page'];
    
}

$page_first_result = ($page-1) * $results_per_page;

$sql = "SELECT *,dkdh.id as dh_id FROM dangky_danhhieu dkdh
        JOIN danhhieu dh ON dkdh.dh_id = dh.id
        JOIN profile p ON dkdh.user_id = p.user_id LIMIT ". $page_first_result . ',' . $results_per_page;
$data = [];
$result = $db->select($sql);
while ($row = mysqli_fetch_array($result, 1)) {
    $data[] = $row;
}
include 'inc/header.php';
include 'inc/sidebar.php';

for($page = 1; $page<= $number_of_page; $page++) 
?>

    <a href = "index2.php?page=<?php echo  $page ?>"><?php echo $page?></a>
 <?   


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
                        <form action="search.php" method="get">
                            <div class="input-group rounded">
                                <input type="search" name="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            </div>
                        </form>
                        
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
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <?php 
                                for($page = 1; $page<= $number_of_page; $page++) 
                                {
                                ?>
                                    <li class="page-item"><a class="page-link" href="pages-xdkt.php?page=<?php echo $page ?>"><?php echo $page?></a></li>
                                <?php
                                }
                            ?>
                        </ul>
                    </nav>
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