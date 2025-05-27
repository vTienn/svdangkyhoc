<?php 
class Thigiuaki_m extends connectDB{
    public function thi_ins($id,$tenvb,$sohieuvb){
        $sql="INSERT INTO van_bang VALUES ('$id','$tenvb','$sohieuvb')";
        return mysqli_query($this->con,$sql);
    }
    public function thi_all(){
        $sql="Select * From van_bang";
        return mysqli_query($this->con,$sql);
    }
    function checktrungmaid($id){
        $sql="Select * From van_bang Where id='$id'";
        $dl=mysqli_query($this->con,$sql);
        $kq=false;
        if(mysqli_num_rows($dl)>0){
            $kq=true;  //trùng mã
        }
        return $kq;
    }
    public function vanbang_find($tenvb,$sohieuvb){
        $sql="SELECT * FROM van_bang WHERE tenvb like '%$tenvb%' 
        AND sohieuvb like '%$sohieuvb%'";
        return mysqli_query($this->con,$sql);
    }
    public function vanbang_find1($id){
        $sql="SELECT * FROM van_bang WHERE id like '%$id%'";
        return mysqli_query($this->con,$sql);
    }
    function vanbang_del($id){
        $sql="DELETE FROM van_bang WHERE id='$id'";
        return mysqli_query($this->con,$sql);
    }
    function vanbang_upd($id,$tenvb,$sohieuvb){
        $sql="UPDATE van_bang SET tenvb='$tenvb',sohieuvb='$sohieuvb'
        WHERE id='$id'";
        return mysqli_query($this->con,$sql);
    }
}
?>