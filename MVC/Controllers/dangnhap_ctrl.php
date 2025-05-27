<?php 
class dangnhap_ctrl extends controller {
    public $dn;
    function __construct() {
        $this->dn = $this->model('cnsinhvien');
    }

    function Get_data() {
        $this->view('space', [
            'page' => 'dangnhap'
        ]);
    }

    function kiemtradn() {
        if (isset($_POST['btndn'])) {
            $username = $_POST['txtus'];
            $password = $_POST['txtps'];
            $kq1 = $this->dn->checkdangnhap($username, $password);

            if ($kq1) {
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
                $_SESSION['username'] = $username;

                $this->view('Masterlayout', [
                    'page' => 'trangchu'
                ]);
            } else {
                echo"  <script>
                alert('Hãy nhập lại tên đăng nhâp hoặc mật khẩu ');
                history.back()              </script>";
             
              
                
            }
        }
    }
}

?>
