<?php 
class quanlilop extends connectDB{
    function themlop($malop,$tenlop,$giaoviengiangday,$sohocsinh){
        $sql="INSERT INTO lop VALUES ('$malop','$tenlop','$giaoviengiangday','$sohocsinh')";
        return mysqli_query($this->con,$sql);
    }
    // public function thi_all(){
    //     $sql="Select * From lop";
    //     return mysqli_query($this->con,$sql);
    // }
    function checktrung($malop){
        $sql="Select * From lop Where malop ='$malop'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;  
        }
        return $kq;
    }
    public function timlop($malop,$tenlop){
        $sql="SELECT * FROM lop WHERE malop like '%$malop%' 
        OR tenlop like '%$tenlop%'";
        return mysqli_query($this->con,$sql);
    }
    function xoalop($malop){
        $sql="DELETE FROM lop WHERE malop = '$malop'";
        return mysqli_query($this->con,$sql);
    }
    function sualop($malop,$tenlop,$giaoviengiangday,$sohocsinh){
        $sql="UPDATE lop SET tenlop ='$tenlop',giaoviengiangday ='$giaoviengiangday', sohocsinh ='$sohocsinh'
        WHERE malop ='$malop'";
        return mysqli_query($this->con,$sql);
    }
    public function showgiaovien(){
        $sql ="SELECT * FROM giaovien";
        return mysqli_query($this->con,$sql);
    }
    public function tradiem($hoten, $tenmonhoc){
        $sql="SELECT * FROM sinhvien INNER JOIN diem ON sinhvien.masinhvien = diem.masinhvien WHERE hoten like '%$hoten%' 
        AND tenmonhoc like '%$tenmonhoc%'";
        return mysqli_query($this->con,$sql);
    }
    public function showdiem(){
        $sql ="SELECT * FROM diem";
        return mysqli_query($this->con,$sql);
    }
    public function showsinhvien(){
        $sql ="SELECT * FROM sinhvien";
        return mysqli_query($this->con,$sql);
    }
    public function dshoclai($hoten, $tenmonhoc){
        $sql="SELECT * FROM sinhvien INNER JOIN diem ON sinhvien.masinhvien = diem.masinhvien WHERE hoten like '%$hoten%' 
        AND tenmonhoc like '%$tenmonhoc%'AND diemthi >8 ";
        return mysqli_query($this->con,$sql);
    }
}
?>