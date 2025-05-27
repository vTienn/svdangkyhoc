<?php
class dangkihoc_ctrl extends controller {
    private $dsmh;
    private $username;

    function __construct() {
        $this->dsmh = $this->model('dangkihoc_m');
    }

    function Get_data() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $twoCharsBefore = substr($username, -4, 2); // Lấy 2 ký tự đứng trước
        } else {
            echo "Session 'username' is not set or empty.";
        }
      

        $this->view('Masterlayout', [
            'page' => 'dangkimonhoc',
            'dulieu' => $this->dsmh->hienthimonhoc($username, $twoCharsBefore),
           
        ]);
    }
    function sosvdk($mamonhoc) {
        return $this->dsmh->sosv($mamonhoc);
    }

    function dangkihoc() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_POST['malop']) && isset($_POST['mamonhoc']) && isset($_POST['tenmonhoc']) && isset($_SESSION['username'])) {
            $malop = $_POST['malop'];
            $mamonhoc = $_POST['mamonhoc'];
            $tenmonhoc = $_POST['tenmonhoc'];
            $username = $_SESSION['username'];

            // Kiểm tra xem các biến có dữ liệu hay không
            $kq2 = $this->dsmh->tongtinchi($username);
            $kq3 = $this->dsmh->checktrungmonhoc($username, $tenmonhoc);
            $kq4 = $this->dsmh->soluonghs($malop, $mamonhoc);
            $kq5 = $this->dsmh->sotinchihientai($mamonhoc);
           
            if ($kq4) {
                echo "<script>alert('Lớp học đã đầy sinh viên')</script>";
                echo "<script>window.history.back();</script>";
            } else if ($kq3) {
                echo "<script>alert('Không được đăng kí trùng môn học')</script>";
                echo "<script>window.history.back();</script>";
            } else if ($kq2 + $kq5 >= 16) {
                echo "<script>alert('Không được đk quá 16 tín chỉ!')</script>";
                echo "<script>window.history.back();</script>";
            } else {
                $kq1 = $this->dsmh->dangkihoc($mamonhoc, $tenmonhoc, $username);
                if ($kq1) {
                    echo "<script>alert('Đăng kí thành công')</script>";
                    echo "<script>window.history.back();</script>";

                    if ($kq2 + $kq5 < 6) {
                        $dieukien = 6 - $kq2 - $kq5;
                        echo "<script>alert('Bạn cần đăng kí ít nhất $dieukien tín chỉ nữa')</script>";
                    }
                } else {
                    echo "<script>alert('Đăng kí thất bại')</script>";
                    echo "<script>window.history.back();</script>";
                }
            }
        }
    }
}
?>
