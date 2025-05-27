<?php 
class Tacgia_m extends connectDB{
    public function tacgia_ins($mtg,$ttg,$ns,$gt,$dt,$mail,$dc){
        $sql="INSERT INTO tacgia VALUES ('$mtg','$ttg','$ns','$gt','$dt','$mail','$dc')";
        return mysqli_query($this->con,$sql);
    }
    public function tacgia_all(){
        $sql="Select * From tacgia";
        return mysqli_query($this->con,$sql);
    }
    function checktrungmatg($mtg){
        $sql="Select * From tacgia Where Matacgia='$mtg'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;  //trùng mã
        }
        return $kq;
    }
    function tacgia_find($mtg,$ttg){
        $sql="SELECT * FROM tacgia WHERE Matacgia like '%$mtg%' 
        AND Tentacgia like '%$ttg%'";
        return mysqli_query($this->con,$sql);
    }
    function tacgia_del($mtg){
        $sql="DELETE FROM tacgia WHERE Matacgia='$mtg'";
        return mysqli_query($this->con,$sql);
    }
    function tacgia_upd($mtg,$ttg,$ns,$gt,$dt,$mail,$dc){
        $sql="UPDATE tacgia SET Tentacgia='$ttg',Ngaysinh='$ns', 
        Gioitinh='$gt', Dienthoai='$dt',Email='$mail', Diachi='$dc' 
        WHERE Matacgia='$mtg'";
        return mysqli_query($this->con,$sql);
    }
}
?>