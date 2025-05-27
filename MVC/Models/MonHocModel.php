 <?php
class MonHocModel extends connectDB {
    private $conn;


    public function layDanhSachMonHocDaDangKy($masv) {
        $sql = "SELECT malop, tenlop, diem.tenmonhoc, diem.mamonhoc, sotinchi, monhoc.giaoviengiangday 
            FROM diem, monhoc, lop 
            WHERE diem.mamonhoc = monhoc.mamonhoc 
            AND diem.masv = '$masv' 
            AND lop.giaoviengiangday = monhoc.giaoviengiangday 
            GROUP BY diem.tenmonhoc";
        return mysqli_query($this->con,$sql);
    }

    public function huyMonHoc($mamonhoc, $masv) {
        $sql = "DELETE from diem where mamonhoc = '$mamonhoc' and masv = '$masv'";
        return mysqli_query($this->con,$sql);

    }
}


// class MonHocModel extends connectDB {
//     private $conn;

//     public function layDanhSachMonHocDaDangKy($masinhvien) {
//         $sql = "SELECT lop.malop, lop.tenlop, monhoc.tenmonhoc, diem.mamonhoc, monhoc.sotinchi, monhoc.giaoviengiangday 
//                 FROM diem 
//                 JOIN monhoc ON diem.mamonhoc = monhoc.mamonhoc 
//                 JOIN lop ON lop.giaoviengiangday = monhoc.giaoviengiangday 
//                 WHERE diem.masv = ?";
//         $stmt = $this->con->prepare($sql);
//         $stmt->bind_param("s", $masinhvien);
//         $stmt->execute();
//         $result = $stmt->get_result();
//         $dulieu = $result->fetch_all(MYSQLI_ASSOC);
//         $stmt->close();
//         return $dulieu;
//     }

//     public function huyMonHoc($masinhvien, $mamonhoc) {
//         $sql = "DELETE FROM diem WHERE masv = ? AND mamonhoc = ?";
//         $stmt = $this->con->prepare($sql);
//         $stmt->bind_param("ss", $masinhvien, $mamonhoc);
//         $stmt->execute();
//         $stmt->close();
//     }
// }

?> 

