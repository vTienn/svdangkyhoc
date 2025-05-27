<?php 
class formqllop_ctrl extends controller{
    private $dslop;
    function __construct()
    {
        $this->dslop=$this->model('quanlilop');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'formchinhlop_v',
            'dulieu'=>$this->dslop->timlop("",""),
        ]);
    }
    
    function timkiem(){
        if(isset($_POST['btnTimkiem'])){
            $malop=$_POST['txtMalop'];
            $tenlop=$_POST['txtTenlop'];
            $dulieu=$this->dslop->timlop($malop,$tenlop);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'formchinhlop_v',
                'dulieu'=>$dulieu,
                'malop'=>$malop,
                'tenlop'=>$tenlop
                
            ]);
        }
        if(isset($_POST['btnXuat'])){
            //code xuất excel
            $objExcel=new PHPExcel();
            $objExcel->setActiveSheetIndex(0);
            $sheet=$objExcel->getActiveSheet()->setTitle('DSMH');
            $rowCount=1;
            //Tạo tiêu đề cho cột trong excel
            $sheet->setCellValue('A'.$rowCount,'STT');
            $sheet->setCellValue('B'.$rowCount,'Mã Lớp ');
            $sheet->setCellValue('C'.$rowCount,'Tên Lớp');
            $sheet->setCellValue('D'.$rowCount,'Giáo Viên');
            $sheet->setCellValue('E'.$rowCount,'Số Học Sinh');
        
          
      
      
        
            //định dạng cột tiêu đề
          $sheet->getColumnDimension('A')->setAutoSize(true);
          $sheet->getColumnDimension('B')->setAutoSize(true);
          $sheet->getColumnDimension('C')->setAutoSize(true);
          $sheet->getColumnDimension('D')->setAutoSize(true);
          $sheet->getColumnDimension('E')->setAutoSize(true);
         
         
      
            //gán màu nền
            $sheet->getStyle('A1:E1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
            //căn giữa
            $sheet->getStyle('A1:E1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
            $malop=$_POST['txtMalop'];
            $tenlop=$_POST['txtTenlop'];
            $dulieu=$this->dslop->timlop($malop,$tenlop);
      
            // Bắt đầu từ hàng thứ 2
          $rowCount = 2;
          $stt = 1;
      
          while ($row = mysqli_fetch_array($dulieu)) {
              $sheet->setCellValue('A' . $rowCount, $stt);
              $sheet->setCellValue('B' . $rowCount, $row['malop']);
              $sheet->setCellValue('C' . $rowCount, $row['tenlop']);
              $sheet->setCellValue('D' . $rowCount, $row['giaoviengiangday']);
              $sheet->setCellValue('E' . $rowCount, $row['sohocsinh']);
              
           
      
      
              $rowCount++;
              $stt++;
          }
        
            // while($row=mysqli_fetch_array($data)){
            //     // $rowCount++;
            //     $sheet->setCellValue('A'.$rowCount,$rowCount++);
            //     $sheet->setCellValue('B'.$rowCount,$row['id']);
            //     $sheet->setCellValue('C'.$rowCount,$row['masv']);
            //     $sheet->setCellValue('D'.$rowCount,$row['mamon']);
            //     $sheet->setCellValue('E'.$rowCount,$row['hoten']);
            //     $sheet->setCellValue('F'.$rowCount,$row['diem']);
      
            
            // }
            //Kẻ bảng 
            $styleAray=array(
                'borders'=>array(
                    'allborders'=>array(
                        'style'=>PHPExcel_Style_Border::BORDER_THIN
                    )
                )
                );
            $sheet->getStyle('A1:'.'E'.($rowCount))->applyFromArray($styleAray);
            $objWriter=new PHPExcel_Writer_Excel2007($objExcel);
            $fileName='ExportExcel.xlsx';
            $objWriter->save($fileName);
            header('Content-Disposition: attachment; filename="'.$fileName.'"');
            header('Content-Type: application/vnd.openxlmformatsofficedocument.speadsheetml.sheet');
            header('Content-Length: '.filesize($fileName));
            header('Content-Transfer-Encoding:binary');
            header('Cache-Control: must-revalidate');
            header('Pragma: no-cache');
            readfile($fileName);
            }
          
      
      
    }
    function xoa($malop){
        $kq=$this->dslop->xoalop($malop);
        if($kq)
            echo "<script>alert('Xóa thành công!')</script>";
        else
            echo "<script>alert('Xóa thất bại!')</script>";
        $tenlop=isset($_POST['txtTenlop']) ? isset($_POST['txtTenlop']) : '' ;
        $giaoviengiangday=isset($_POST['txtGiaoviengiangday']) ? isset($_POST['txtGiaoviengiangday']) : '';
        $sohocsinh=isset($_POST['txtSohocsinh']) ? isset($_POST['txtSohocsinh']) : '';
        $dulieu=$this->dslop->timlop($malop,$tenlop);
        //Gọi lại giao diện và truyền $dulieu ra
        $this->view('Masterlayout',[  
            'page'=>'formchinhlop_v',
            'dulieu'=>$this->dslop->timlop("",""),
            'tenlop'=>$tenlop,
            'giaoviengiangday'=>$giaoviengiangday,
            'sohocsinh'=>$sohocsinh

        ]);
    }
    function sua($malop){
        $this->view('Masterlayout',[
            'page'=>'formsualop_v',
            'dulieu'=>$this->dslop->timlop($malop,""),
            'SV'=>$this->dslop->showgiaovien()
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $malop=$_POST['txtMalop'];
            $tenlop=$_POST['txtTenlop'];
            $giaoviengiangday=$_POST['txtGiaoviengiangday'];
            $sohocsinh = $_POST['txtSohocsinh'];
            //gọi hàm sủa dl tacgia_udp trong model
            $kq=$this->dslop->sualop($malop,$tenlop,$giaoviengiangday,$sohocsinh);
            
            if($kq){
                echo "<script>alert('Sửa thành công!')</script>";
            }
            else
                echo "<script>alert('Sửa thất bại!')</script>";
           
            //Gọi lại giao diện và truyền $dulieu ra
            $tenlop=$_POST['txtTenlop'];
            $giaoviengiangday=$_POST['txtGiaoviengiangday'];
            $sohocsinh = $_POST['txtSohocsinh'];
            $dulieu=$this->dslop->timlop($malop,$tenlop);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'formchinhlop_v',
                'dulieu'=>$dulieu,
                'tenlop'=>$tenlop,
                'giaoviengiangday'=>$giaoviengiangday,
                'sohocsinh'=>$sohocsinh
            ]);
                
        }
    }
    function vthem(){
        $this->view('Masterlayout',[
            'page'=>'formthemlop_v',
            'SV'=>$this->dslop->showgiaovien()
        ]);  
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $malop = $_POST['txtMalop'];
            $tenlop = $_POST['txtTenlop'];
            $giaoviengiangday = $_POST['txtGiaoviengiangday'];
            $sohocsinh = $_POST['txtSohocsinh'];
            
            if(empty($malop) || empty($tenlop) || empty($giaoviengiangday) || empty($sohocsinh)){
                echo "<script>alert('Vui lòng nhập đủ thông tin!')</script>";
                $this->view('Masterlayout',[
                    'page'=>'formthemlop_v',   
                    'SV'=>$this->dslop->showgiaovien(),            
                    'malop'=>$malop,
                    'tenlop'=>$tenlop,
                    'giaoviengiangday'=>$giaoviengiangday,
                    'sohocsinh'=>$sohocsinh
                ]); 
            }
             else {
                // Kiểm tra trùng mã id
                $kq1 = $this->dslop->checktrung($malop);
                if($kq1){
                    echo "<script>alert('Trùng mã id!')</script>";
                    $this->view('Masterlayout',[
                        'page'=>'formthemlop_v',
                        'SV'=>$this->dslop->showgiaovien(),               
                        'malop'=>$malop,
                        'tenlop'=>$tenlop,
                        'giaoviengiangday'=>$giaoviengiangday,
                        'sohocsinh'=>$sohocsinh
                    ]); 
                } else {
                    // Gọi hàm thêm dl thi_ins trong model
                    $kq = $this->dslop->themlop($malop,$tenlop,$giaoviengiangday,$sohocsinh);
                    
                    if($kq){
                        echo "<script>alert('Thêm mới thành công!')</script>";
                    } else {
                        echo "<script>alert('Thêm mới thất bại!')</script>";
                    }
                }
            }
            
            $this->view('Masterlayout',[
                'page'=>'formthemlop_v',
                'SV'=>$this->dslop->showgiaovien(),        
                'dulieu'=>$this->dslop->timlop("","")
                
                
                // 'id'=>$id,
                // 'name'=>$name,
                // 'ngaysinh'=>$ngaysinh,
                // 'quequan'=>$quequan
            ]);  
        }
    }
}
?>
