<?php 
class timkiemxoattsv_ctrl extends controller{
    private $dssv;
    function __construct()
    {
        $this->dssv=$this->model('cnsinhvien');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'timkiemxoattsv',
            'dulieu'=>$this->dssv->hienthisv()
        ]);

    }
    function timkiem(){
        if(isset($_POST['btnTimkiem'])){
            $hoten=$_POST['txthoten'];
            $diachi=$_POST['txtdiachi'];
            $dulieu=$this->dssv->sinhvien_find($hoten,$diachi);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'timkiemxoattsv',
                'dulieu'=>$dulieu,
                'hoten'=>$hoten,
                'diachi'=>$diachi
            ]);
        }
        if(isset($_POST['btnXuat'])){
            
                // Code xuất Excel
                $objExcel = new PHPExcel();
                $objExcel->setActiveSheetIndex(0);
                $sheet = $objExcel->getActiveSheet()->setTitle('DSSV');
                $rowCount = 1;
            
                // Tạo tiêu đề cho cột trong Excel
                $sheet->setCellValue('A'.$rowCount, 'STT');
                $sheet->setCellValue('B'.$rowCount, 'Mã SV');
                $sheet->setCellValue('C'.$rowCount, 'Họ Tên');
                $sheet->setCellValue('D'.$rowCount, 'Giới Tính');
                $sheet->setCellValue('E'.$rowCount, 'Năm Sinh');
                $sheet->setCellValue('F'.$rowCount, 'Địa Chỉ');
                $sheet->setCellValue('G'.$rowCount, 'Email');
               
               

    
                // Định dạng cột tiêu đề
                $sheet->getColumnDimension('A')->setAutoSize(true);
                $sheet->getColumnDimension('B')->setAutoSize(true);
                $sheet->getColumnDimension('C')->setAutoSize(true);
            
                // Gán màu nền
                $sheet->getStyle('A1:G1')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
                // Căn giữa
                $sheet->getStyle('A1:G1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            
                // Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
                $hoten = $_POST['txthoten'];
                $diachi = $_POST['txtdiachi'];
                $dulieu = $this->dssv->sinhvien_find($hoten, $diachi);
            
                if ($dulieu && mysqli_num_rows($dulieu) > 0) {
                    while ($row = mysqli_fetch_array($dulieu)) {
                        $rowCount++;
                        $sheet->setCellValue('A'.$rowCount, $rowCount - 1); // sửa lại giá trị của STT cho đúng
                        $sheet->setCellValue('B'.$rowCount, $row['masv']);
                        $sheet->setCellValue('C'.$rowCount, $row['hoten']);
                        $sheet->setCellValue('D'.$rowCount, $row['gioitinh']);
                        $sheet->setCellValue('E'.$rowCount, $row['namsinh']);
                        $sheet->setCellValue('F'.$rowCount, $row['diachi']);
                        $sheet->setCellValue('G'.$rowCount, $row['email']);
                      
                        
                       
                      
                    }
                } else {
                    // Handle the case where no data is found
                    echo "<script>alert('Không có dữ liệu để xuất');</script>";
                    return;
                }
            
                // Kẻ bảng 
                $styleArray = array(
                    'borders' => array(
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN
                        )
                    )
                );
                $sheet->getStyle('A1:' . 'G' . ($rowCount))->applyFromArray($styleArray);
            
                $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
                $fileName = 'ExportExcel.xlsx';
                $objWriter->save($fileName);
            
                header('Content-Disposition: attachment; filename="' . $fileName . '"');
                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Length: ' . filesize($fileName));
                header('Content-Transfer-Encoding: binary');
                header('Cache-Control: must-revalidate');
                header('Pragma: no-cache');
                readfile($fileName);
                exit;
            
            
            }



        }
    
    function xoa($masv){
        
        $kq4=$this->dssv->sinhvien_del($masv);
        $kq5=$this->dssv->taikhoan_del($masv);
        if($kq4==true && $kq5==true )
            echo "<script>alert('Xóa thành công!')</script>";
        else
            echo "<script>alert('Xóa thất bại!')</script>";
            $hoten = isset($_POST['txthoten']) ? $_POST['txthoten'] : '';
            $diachi = isset($_POST['txtdiachi']) ? $_POST['txtdiachi'] : '';
            $dulieu = $this->dssv->sinhvien_find($hoten, $diachi);
            
            $this->view('Masterlayout',[
                'page'=>'timkiemxoattsv',
                'dulieu'=>$dulieu,
                'hoten'=>$hoten,
                'diachi'=>$diachi
            ]);
        //Gọi lại giao diện và truyền $dulieu ra
        
    }
    function sua($masv){
        $this->view('Masterlayout',[
            'page'=>'suattsv',
            'dulieu'=>$this->dssv->sinhvien_find1($masv)
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $masv=$_POST['txtmasinhvien'];
            $hoten=$_POST['txthoten'];
            $gioitinh=$_POST['txtgioitinh'];
            $namsinh=$_POST['txtnamsinh'];
            $diachi=$_POST['txtdiachi'];
            $email=$_POST['txtemail'];
            //gọi hàm sủa dl tacgia_udp trong model
            $kq=$this->dssv->sinhvien_upd($masv,$hoten,$gioitinh,$namsinh,$diachi,$email);
            
            if($kq){
                echo "<script>alert('Sửa thành công!')</script>";
            }
            else
                echo "<script>alert('Sửa thất bại!')</script>";
           
            //Gọi lại giao diện và truyền $dulieu ra
            $hoten=$_POST['txthoten'];
            $diachi=$_POST['txtdiachi'];
            $dulieu=$this->dssv->sinhvien_find($hoten,$diachi);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'timkiemxoattsv',
                'dulieu'=>$dulieu,
                'hoten'=>$hoten,
                'diachi'=>$diachi
            ]);
                
        }
    }
}
?>
