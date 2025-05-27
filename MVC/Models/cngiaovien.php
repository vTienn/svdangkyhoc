<?php 
class cngiaovien extends connectDB{
    public function hienthigiaovien(){
        $sql="SELECT * FROM giaovien";
        return mysqli_query($this->con,$sql);
    }
    public function themgiaovien($magiaovien,$hoten,$gioitinh,$namsinh,$diachi,$email, $dienthoai){
        
        $sql="INSERT INTO giaovien VALUES ('$magiaovien','$hoten','$gioitinh','$namsinh','$dienthoai', '$email', '$diachi')";
        return mysqli_query($this->con,$sql);
    }
    
    
    function checktrungma($magiaovien){
        $sql="Select * From giaovien Where magiaovien='$magiaovien'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;  //trùng mã
        }
        return $kq;
    }
    function checktrong($magiaovien,$hoten,$gioitinh,$namsinh,$diachi,$email, $dienthoai){
        $check=false;
        if($magiaovien=="" || $hoten=="" ||
        $gioitinh==""||$namsinh==""|| $diachi==""||$email==""|| $dienthoai=="" ){
            $check=true;
        }
        return $check;
    }
    public function giaovien_find($hoten,$diachi){
        $sql="SELECT * FROM giaovien WHERE hoten like '%$hoten%' 
        AND diachi like '%$diachi%'";
        return mysqli_query($this->con,$sql);
    }
    public function giaovien_find1($magiaovien){
        $sql="SELECT * FROM giaovien WHERE magiaovien like '%$magiaovien%'";
        return mysqli_query($this->con,$sql);
    }
    function giaovien_del($magiaovien){
        $sql="DELETE FROM giaovien WHERE magiaovien='$magiaovien'";
        return mysqli_query($this->con,$sql);
    }
   
    function giaovien_upd($magiaovien,$hoten,$gioitinh,$namsinh,$diachi,$email, $dienthoai){
        $sql="UPDATE giaovien SET hoten='$hoten',gioitinh='$gioitinh',namsinh='$namsinh',diachi='$diachi',email='$email', dienthoai ='$dienthoai'
        WHERE magiaovien='$magiaovien'";
        return mysqli_query($this->con,$sql);
    }
}
?>