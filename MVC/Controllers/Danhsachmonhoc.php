<?php
 class Danhsachmonhoc extends controller{
private $dsmh;
 private $username;
 
  function __construct()
  {
   
    $this->dsmh = $this -> model('Monhoc_m');
  }
  function Get_data(){
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    if (isset($_SESSION['username'])) {
      $this->username = $_SESSION['username'];
      $twoCharsBefore = substr($this->username, -4, 2); // Lấy 2 ký tự đứng trước
     
  } else {
      echo "Session 'username' is not set or empty."; //
  }
    
    $this-> view('Masterlayout',[
        'page' => 'Danhsachmonhoc_v',
        
        'dulieu'=>$this->dsmh->phannganh( $twoCharsBefore)
    ]);
  }


//   function Get_data(){
//     $giaovien_list = $this->dsmh->get_giaovien_list();
//     $this->view('Masterlayout', [
//         'page' => 'Danhsachmonhoc_v',
//         'giaovien_list' => $giaovien_list
//     ]);
// }
function timkiem(){
    if(isset($_POST['btnTimkiem'])){
      $mmh = $_POST['txtMamonhoc'];
      $tmh = $_POST['txtTenmonhoc'];
      $dulieu = $this->dsmh->monhoc_find($mmh,$tmh);
      // $giaovien_list = $this->dsmh->get_giaovien_list();

      // gọi lại giao diện và truyền dl ra
      $this-> view('Masterlayout',[
        'page' => 'Danhsachmonhoc_v',
        'dulieu' => $dulieu,
        'mamonhoc'=> $mmh,
        'tenmonhoc' => $tmh,
        // 'giaovien_list' => $giaovien_list


    ]);

    }
    if(isset($_POST['btnXuatExcel'])){
      //code xuất excel
      $objExcel=new PHPExcel();
      $objExcel->setActiveSheetIndex(0);
      $sheet=$objExcel->getActiveSheet()->setTitle('DSMH');
      $rowCount=1;
      //Tạo tiêu đề cho cột trong excel
      $sheet->setCellValue('A'.$rowCount,'STT');
      $sheet->setCellValue('B'.$rowCount,'Mã Môn Học');
      $sheet->setCellValue('C'.$rowCount,'Tên Môn Học');
      $sheet->setCellValue('D'.$rowCount,'Số Tín Chỉ');
      $sheet->setCellValue('E'.$rowCount,'Giáo Viên Giảng Dạy');
      $sheet->setCellValue('F'.$rowCount,'Học Kì');
      $sheet->setCellValue('G'.$rowCount,'Ngành');
    


  
      //định dạng cột tiêu đề
    $sheet->getColumnDimension('A')->setAutoSize(true);
    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    $sheet->getColumnDimension('D')->setAutoSize(true);
    $sheet->getColumnDimension('E')->setAutoSize(true);
    $sheet->getColumnDimension('F')->setAutoSize(true);
    $sheet->getColumnDimension('G')->setAutoSize(true);
   

      //gán màu nền
      $sheet->getStyle('A1:G1')->getFill()->setFillType(\PHPExcel_Style_Fill::FILL_SOLID)->getStartColor()->setRGB('00FF00');
      //căn giữa
      $sheet->getStyle('A1:G1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
      //Điền dữ liệu vào các dòng. Dữ liệu lấy từ DB
      $mmh = $_POST['txtMamonhoc'];
      $tmh = $_POST['txtTenmonhoc'];
      $data = $this->dsmh->monhoc_find($mmh,$tmh);

      // Bắt đầu từ hàng thứ 2
    $rowCount = 2;
    $stt = 1;

    while ($row = mysqli_fetch_array($data)) {
        $sheet->setCellValue('A' . $rowCount, $stt);
        $sheet->setCellValue('B' . $rowCount, $row['mamonhoc']);
        $sheet->setCellValue('C' . $rowCount, $row['tenmonhoc']);
        $sheet->setCellValue('D' . $rowCount, $row['sotinchi']);
        $sheet->setCellValue('E' . $rowCount, $row['giaoviengiangday']);
        $sheet->setCellValue('F' . $rowCount, $row['hocki']);
        $sheet->setCellValue('G' . $rowCount, $row['nganh']);
     


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
      $sheet->getStyle('A1:'.'G'.($rowCount))->applyFromArray($styleAray);
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

function xoa($mmh){
  $kq=$this->dsmh->monhoc_del($mmh);
  if($kq)
      echo "<script>alert('Xóa thành công!')</script>";
  else
      echo "<script>alert('Xóa thất bại!')</script>";
  $tmh=isset($_POST['txtTenmonhoc']) ? isset($_POST['txtTenmonhoc']) : '' ;
  $stc=isset($_POST['txtSotinchi']) ? isset($_POST['txtSotinchi']) : '';
  $gvgd=isset($_POST['txtGiaoviengiangday']) ? isset($_POST['txtGiaoviengiangday']) : '';
  $hk=isset($_POST['txtHocki']) ? isset($_POST['txtHocki']) : '';
  $n=isset($_POST['txtNganh']) ? isset($_POST['txtNganh']) : '';


  $dulieu = $this->dsmh->get_all_monhoc();
  //Gọi lại giao diện và truyền $dulieu ra
  $this->view('Masterlayout',[
      'page'=>'Danhsachmonhoc_v',
      'dulieu'=>$dulieu,
      'tenmonhoc'=>$tmh,
      'sotinchi'=>$stc,
      'giaoviengiangday' =>$gvgd,
      'hocki' => $hk,
      'nganh' => $n
  ]);
}

function sua($mmh){
  $this->view('Masterlayout',[
    'page' => 'Monhoc_sua_v',
    'dulieu' => $this ->dsmh -> monhoc_find1($mmh)
  ]);
}

function suadl(){
  if(isset($_POST['btnLuu'])){
      $mmh=$_POST['txtMamonhoc'];
      $tmh = $_POST['txtTenmonhoc'];
      $stc = $_POST['txtSotinchi'];
      $gvgd = $_POST['txtGiaoviengiangday'];
      $hk = $_POST['txtHocki'];
      $n = $_POST['txtNganh'];


      //gọi hàm sủa dl tacgia_udp trong model
      $kq=$this->dsmh->monhoc_upd($mmh,$tmh,$stc,$gvgd,$hk,$n);
      
      if($kq){
          echo "<script>alert('Sửa thành công!')</script>";
      }
      else
          echo "<script>alert('Sửa thất bại!')</script>";
     
      //Gọi lại giao diện và truyền $dulieu ra
      
      
      $dulieu=$this->dsmh->monhoc_find($mmh,$tmh);
      //Gọi lại giao diện và truyền $dulieu ra
      $this->view('Masterlayout',[
          'page'=>'Danhsachmonhoc_v',
          'dulieu'=>$dulieu,
      'mamonhoc'=>$mmh,
      'tenmonhoc' =>$tmh,

      ]);
          
  }
}

 }

?>