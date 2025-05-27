<?php

class Monhoc_m extends connectDB {
    function monhoc_ins($mmh,$tmh,$stc,$gvgd,$hk,$n){
       $sql = "INSERT INTO monhoc value ('$mmh',N'$tmh','$stc',N'$gvgd','$hk',N'$n')";
       return mysqli_query($this->con,$sql);
    }
    function phannganh($username){
        if ($username == 'dm') {
            // Nếu là admin, hiển thị toàn bộ danh sách môn học
            $query = "SELECT * FROM monhoc";
        } else {
            // Nếu không phải admin, hiển thị danh sách môn học theo ngành của người dùng
            $query = "SELECT * FROM monhoc WHERE nganh LIKE '%$username%'";
        }
        $result = mysqli_query($this->con,$query);
        return $result;
    }
function checktrungid($mmh){
    $sql ="SELECT * from monhoc where mamonhoc = '$mmh' ";
    $dl =  mysqli_query($this->con,$sql);
    $kq = false;
if(mysqli_num_rows($dl)>0){
    $kq = true; //trung id
}
return $kq;
}

function checkrong($mmh,$tmh,$stc,$gvgd,$hk,$n){
    $check = false;
    if($mmh == "" ||$tmh == "" ||$stc == "" ||$gvgd == ""||$hk == "" ||$n == ""){
        $check = true;
    }
    return $check;
}

function get_giaovien_list(){
    $sql = "SELECT * FROM giaovien";
    return mysqli_query($this->con, $sql);
}


function monhoc_find($mmh,$tmh){
    $sql="SELECT * FROM monhoc WHERE mamonhoc like '%$mmh%' AND tenmonhoc like '%$tmh%'";
    return mysqli_query($this->con,$sql);
}

function get_all_monhoc(){
    $sql = "SELECT * FROM monhoc";
    return mysqli_query($this->con, $sql);
}

function monhoc_del($mmh){
    $sql = " DELETE FROM monhoc where mamonhoc = '$mmh' ";
    return mysqli_query($this->con,$sql);

}


public function monhoc_find1($mmh){
    $sql="SELECT * FROM monhoc WHERE mamonhoc like '%$mmh%'";
    return mysqli_query($this->con,$sql);
}

function monhoc_upd($mmh,$tmh,$stc,$gvgd,$hk,$n){
    $sql="UPDATE monhoc SET mamonhoc='$mmh',tenmonhoc='$tmh',sotinchi='$stc', giaoviengiangday='$gvgd',hocki='$hk', nganh='$n' WHERE mamonhoc='$mmh'";
    return mysqli_query($this->con,$sql);
}





}



?>