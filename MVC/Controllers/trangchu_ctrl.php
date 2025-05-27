<?php 
class trangchu_ctrl extends controller {
    public $thongke;
    private $username;

    function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $this->thongke = $this->model('thongkesv_m');
    }
   
    
    function Get_data() {
      
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];

            // Kiểm tra xem người dùng đã đăng ký học hay chưa
            $kq5 = $this->thongke->thongbao($username);
            if ($username != "admin") {
                if ($kq5) {
                    echo "<script>alert('Bạn đã đăng kí học')</script>";
                } else {
                    echo "<script>alert('Bạn chưa đăng kí học, hãy đăng kí')</script>";
                }
            }
        }
        $this->view('Masterlayout', [
            'page' => 'trangchu'
        ]);
        

    }
 

   
}
?>
