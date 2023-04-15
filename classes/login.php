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
        public function login__sv($userName, $passWord)
        {
            $userName = $this->fm->validation($userName);
            $passWord = $this->fm->validation($passWord);

            $userName = mysqli_real_escape_string($this->db->link, $userName);
            $passWord = mysqli_real_escape_string($this->db->link, $passWord);

            if(empty($userName) || empty($passWord)){
                $alert = "Đăng nhập sai, vui lòng thử lại!";
                return $alert;
            } else {
                $query = "SELECT * FROM users WHERE userName = '$userName' AND passWord = '$passWord' LIMIT 1";
                $result = $this->db->select($query);
                if($result != false){
                    $value = $result->fetch_assoc();
                    Session::set('login', true);
                    Session::set('id', $value['id']);
                    Session::set('hoten', $value['name']);
                    Session::set('role', $value['role']);
                    // Session::set('name', $value[$name]);
                    header("Location:index.php");
                }else {
                    $alert = "Đăng nhập sai, vui lòng thử lại!";
                    return $alert;
                }
            }
        }

    }
    
?>