<?php class dangkihoc_m  extends connectDB {
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
public function hienthimonhoc($masv, $nganh){
    $sql = "SELECT malop, tenlop, mamonhoc, tenmonhoc, sotinchi, monhoc.giaoviengiangday, sohocsinh, hocki, monhoc.nganh
    from lop, monhoc, sinhvien
     where lop.giaoviengiangday = monhoc.giaoviengiangday and masv = '$masv' and nganh like '%$nganh%'";
    return mysqli_query($this->con,$sql);
}
public function dangkihoc($mamonhoc,$tenmonhoc,$masv){
    $sql = "INSERT INTO diem (mamonhoc, tenmonhoc, masv) VALUES ('$mamonhoc', '$tenmonhoc', '$masv')";
    return mysqli_query($this->con,$sql);
}

public function tongtinchi($masv){
    $sql ="SELECT SUM(monhoc.sotinchi) AS 'tong'
     from diem, monhoc
      where diem.mamonhoc = monhoc.mamonhoc and diem.masv = '$masv'";
    // Thực hiện truy vấn
    $result = mysqli_query($this->con, $sql);
        
    // Kiểm tra và trả về kết quả
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $tongtinchi = $row['tong'];}
        return $tongtinchi;
         
         
}
function checktrungmonhoc($masv,$tenmonhoc){
    $sql="Select * From diem Where tenmonhoc='$tenmonhoc' and masv = '$masv' ";
    $dl=mysqli_query($this->con,$sql);
    $kq=false;
    if(mysqli_num_rows($dl)>0){
        $kq=true;  //trùng tên
    }
    return $kq;
}

public function monhocdadangki($masv, $tenmonhoc){
    $sql = "SELECT COUNT(*) AS 'count' 
    FROM diem 
    WHERE masv = '$masv' 
    AND tenmonhoc = N'$tenmonhoc'";

    // Thực hiện truy vấn
    $result = mysqli_query($this->con, $sql);

    // Kiểm tra và trả về kết quả
    if ($result) {
    $row = mysqli_fetch_assoc($result);
    if ($row['count'] > 0) {
        return true; // Đã đăng ký môn học này rồi
    } else {
        return false; // Chưa đăng ký môn học này
    }
    } else {
    return false; // Lỗi trong quá trình truy vấn
    }
    }
    public function soluonghs($malop,$mamonhoc){
        $check = false;
    $sqlCheckSoluong = "SELECT COUNT(masv) as 'soluong' FROM diem WHERE mamonhoc = '$mamonhoc'";
    $resultSoluong = mysqli_query($this->con, $sqlCheckSoluong);
    
    if ($resultSoluong) {
        $rowSoluong = $resultSoluong->fetch_assoc();//trên đối tượng này, nó sẽ lấy một hàng từ kết quả truy vấn và trả về dưới dạng một mảng kết hợp, trong đó các chỉ số của mảng là tên của các cột trong bảng.
        $soluong = $rowSoluong ? $rowSoluong['soluong'] : 0;

        $sqlGetMaxSoluong = "SELECT sohocsinh FROM lop WHERE malop = '$malop'";
        $resultMaxSoluong = mysqli_query($this->con, $sqlGetMaxSoluong);
        
        if ($resultMaxSoluong) {
            $rowMaxSoluong = $resultMaxSoluong->fetch_assoc();
            $maxSoluong = $rowMaxSoluong ? $rowMaxSoluong['sohocsinh'] : 0;
              
            if ($soluong >= $maxSoluong) {
                $check = true;
            }
        }
    }
    return $check;
    }

    public function sotinchihientai($mamonhoc){
        $sql = "SELECT sotinchi FROM monhoc WHERE mamonhoc = '$mamonhoc'";
        $soluong=mysqli_query($this->con,$sql);
        if ($soluong) {
            $row = mysqli_fetch_assoc($soluong);
            $tinchi = $row['sotinchi'];}
            return $tinchi;
        
    }
    public function thongbao($masv){
        $sql = "Select * from diem where masv = '$masv'";
        return mysqli_query($this->con,$sql);
    }
    public function sosv($mamonhoc){

        $sql="SELECT COUNT(masv) as 'count' FROM diem WHERE mamonhoc = '$mamonhoc'";
        $result = mysqli_query($this->con,$sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            return $row['count'];
        }
        return 0;

    }
    
//   // Kiểm tra và đăng ký môn học
//   public function dangkyMonhoc($masv, $mamonhoc, $tenmonhoc) {

//     $sql ="SELECT SUM(monhoc.sotinchi) AS 'tong'
//     from diem, monhoc, lop
//      where diem.mamonhoc = monhoc.mamonhoc and diem.masv = '$masv' and lop.giaoviengiangday = monhoc.giaoviengiangday";
//    // Thực hiện truy vấn
//    $result = mysqli_query($this->con, $sql);
       
//    // Kiểm tra và trả về kết quả
//    if ($result) {
//        $row = mysqli_fetch_assoc($result);
//        $tongtinchi = $row['tong'];
//        if($tongtinchi < 9){
//         echo "Bạn cần đăng kí ít nhất".(9-$tongtinchi)."Tín chỉ nữa";
//        }
//        else if($tongtinchi>15){
//         echo "Số tín chỉ đã vượt quá giới hạn. Không thể đăng kí thêm!";
//         return;
//        }
    
//     }
    
//     // Kiểm tra số lượng sinh viên đã đăng ký trong lớp
//     $sqlCheckSoluong = "SELECT COUNT(masv) as 'soluong' FROM diem WHERE mamonhoc = '$mamonhoc'";
//     $resultSoluong = $this->con->query($sqlCheckSoluong);
//     $soluong = $resultSoluong->fetch_assoc()['soluong'];

//     // Lấy số lượng học sinh tối đa của lớp
//     $sqlGetMaxSoluong = "SELECT sohocsinh FROM lop WHERE mamonhoc = '$mamonhoc'";
//     $resultMaxSoluong = $this->con->query($sqlGetMaxSoluong);
//     $maxSoluong = $resultMaxSoluong->fetch_assoc()['sohocsinh'];

//     if ($soluong >= $maxSoluong) {
//         echo "Lớp đã đủ số lượng, mời bạn đăng ký lớp học phần khác!";
//         return;
//     }

//     // Kiểm tra sinh viên đã đăng ký môn học với tên môn học này chưa
//     $sqlCheckTenmon = "SELECT * FROM diem WHERE masv = '$masv' AND tenmonhoc = N'$tenmonhoc'";
//     $resultTenmon = $this->con->query($sqlCheckTenmon);
//     if ($resultTenmon->num_rows > 0) {
//         echo "Môn học: $tenmonhoc đã được đăng ký rồi";
//         return;
//     }

//     // Kiểm tra sinh viên đã đăng ký môn học này chưa
//     $sqlCheckMamonhoc = "SELECT * FROM diem WHERE mamonhoc = '$mamonhoc' AND masv = '$masv'";
//     $resultMamonhoc = $this->con->query($sqlCheckMamonhoc);
//     if ($resultMamonhoc->num_rows > 0) {
//         echo "Môn học này bạn đã đăng ký rồi!";
//         return;
//     }

//     // Đăng ký môn học cho sinh viên
//     $sqlInsert = "INSERT INTO diem (mamonhoc, tenmonhoc, masv) VALUES ('$mamonhoc', N'$tenmonhoc', '$masv')";
//     if ($this->con->query($sqlInsert) === TRUE) {
//         echo "Đăng ký môn học thành công";
//     } else {
//         echo "Lỗi: " . $this->con->error;
//     }
// }
    

    





}?>
