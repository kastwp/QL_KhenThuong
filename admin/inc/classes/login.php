<?php
    include '../NLCS/lib/session.php';
    Session::checkLogin();
    include '../NLCS/lib/database.php';
    include '../NLCS/helper/format.php';
?>
<?php
    class login 
    {
        private $db;
        private $fm;

        public function __construct()
        {
            $this->db = new Database();   
            $this->fm = new Format();   
        }
        public function login__sv($adminUser, $adminPass)
        {
            $adminUser = $this->fm->validation($adminUser);
            $adminPass = $this->fm->validation($adminPass);

            $adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
            $adminPass = mysqli_real_escape_string($this->db->link, $adminPass);

            if(empty($adminUser) || empty($adminPass)){
                $alert = "Đăng nhập sai, vui lòng thử lại!";
                return $alert;
            } else {
                $query = "SELECT * FROM users WHERE adminUser = '$adminUser' AND adminPass = '$adminPass' LIMIT 1";
                $result = $this->db->select($query);
                if($result != false){
                    $value = $result->fetch_assoc();
                    Session::set('login', true);
                    Session::set('adminId', $value[$adminId]);
                    Session::set('adminUser', $value[$adminUser]);
                    Session::set('name', $value[$adminName]);
                    header("Location:index-admin.php");
                }else {
                    $alert = "Đăng nhập sai, vui lòng thử lại!";
                    return $alert;
                }
            }
        }

    }
    
?>