<?php 
class cnsinhvien extends connectDB{
    public function hienthisv(){
        $sql="SELECT * FROM sinhvien";
        return mysqli_query($this->con,$sql);
    }
    public function themsv($masv,$hoten,$gioitinh,$namsinh,$diachi,$email){
        
        $sql="INSERT INTO sinhvien VALUES ('$masv','$hoten','$gioitinh','$namsinh','$diachi','$email')";
        return mysqli_query($this->con,$sql);
    }
    public function themtaikhoan($masv){
        
        $sql="INSERT INTO dangnhap VALUES ('$masv','$masv')";
        return mysqli_query($this->con,$sql);
    }
    function checkdangnhap($username,$password){
        $sql="Select * From dangnhap Where username='$username' AND password='$password'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;  //trùng mã
        }
        return $kq;
    }
    function checktrungma($masv){
        $sql="Select * From sinhvien Where masv='$masv'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;  //trùng mã
        }
        return $kq;
    }
    function checktrungemail($email){
        $sql="Select * From sinhvien Where email='$email'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;  //
        }
        return $kq;
    }
    function checktrong($masv,$hoten,$gioitinh,$namsinh,$diachi,$email){
        $check=false;
        if($masv=="" || $hoten=="" ||
        $gioitinh==""||$namsinh==""|| $diachi==""||$email=="" ){
            $check=true;
        }
        return $check;
    }
    public function sinhvien_find($hoten,$diachi){
        $sql="SELECT * FROM sinhvien WHERE hoten like '%$hoten%' 
        AND diachi like '%$diachi%'";
        return mysqli_query($this->con,$sql);
    }
    public function sinhvien_find1($masv){
        $sql="SELECT * FROM sinhvien WHERE masv like '%$masv%'";
        return mysqli_query($this->con,$sql);
    }
    function sinhvien_del($masv){
        $sql="DELETE FROM sinhvien WHERE masv='$masv'";
        return mysqli_query($this->con,$sql);
    }
    function taikhoan_del($masv){
        $sql="DELETE FROM dangnhap WHERE username='$masv'";
        return mysqli_query($this->con,$sql);
    }
    function sinhvien_upd($masv,$hoten,$gioitinh,$namsinh,$diachi,$email){
        $sql="UPDATE sinhvien SET hoten='$hoten',gioitinh='$gioitinh',namsinh='$namsinh',diachi='$diachi',email='$email'
        WHERE masv='$masv'";
        return mysqli_query($this->con,$sql);
    }
}
?>