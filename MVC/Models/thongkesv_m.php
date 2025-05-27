<?php class thongkesv_m extends connectDB {

public function hienthisvchdk(){
    $sql = "Select * from sinhvien where masv not in (select masv from diem)";
    return mysqli_query($this->con,$sql);
}
public function thongbao($username) {
    // Giả sử bạn có bảng 'bangdiem' chứa thông tin đăng ký học
    $sql = "SELECT * FROM diem WHERE masv = '$username'";
    $result = mysqli_query($this->con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }
}





}?>
