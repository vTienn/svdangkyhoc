<?php
class Monhocdangki extends controller {
    public $monhoc;
    private $username;

    function __construct() {
        $this->monhoc = $this->model('MonHocModel');
    }

    function Get_data() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
           
        } 
     
        // Gọi view với tham số $masv
        $this->view('Masterlayout', [
            'page' => 'Monhocdangki_v',
            'dulieu' => $this->monhoc->layDanhSachMonHocDaDangKy($username)
        ]);
    }

    function huy(){
        if (isset($_POST['mamonhoc']) && isset($_SESSION['username'])) {
      $mmh=$_POST['mamonhoc'];
      $username = $_SESSION['username'];

        }
        $kq=$this->monhoc->huyMonHoc($mmh,$username);
        if($kq){
            echo "<script>alert('Huỷ đăng kí thành công!')</script>";
            echo "<script>history.back();</script>";
        }
        else
            echo "<script>alert('Hủy đăng kí thất bại!')</script>";
        
      }
}
?>
