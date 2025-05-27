<?php 
class Monhoc extends controller {
    public $monhoc;
    function __construct()
    {
        $this -> monhoc = $this ->model('Monhoc_m');
    }

    
    // function Get_data(){
    //     $this ->view('Masterlayout',[
    //         'page' => 'Monhoc_v'
    //     ]);
    // }

    function Get_data() {
        $giaovien_list = $this->monhoc->get_giaovien_list();
        $this->view('Masterlayout', [
            'page' => 'Monhoc_v',
            'giaovien_list' => $giaovien_list
        ]);
    }

function themmoi(){
    if(isset($_POST['btnLuu'])){
        $mmh = $_POST['txtMamonhoc'];
        $tmh = $_POST['txtTenmonhoc'];
        $stc = $_POST['txtSotinchi'];
        $gvgd = $_POST['txtGiaoviengiangday'] ;    
        $hk = $_POST['txtHocki'];
        $n = $_POST['txtNganh'];


        // kiểm tra trùng mã id
        $kq1 = $this-> monhoc->checktrungid($mmh);
        $kq2 = $this->monhoc->checkrong($mmh,$tmh,$stc,$gvgd,$hk,$n);
        if($kq2){
            echo "<script>alert('Thông tin nhập môn học không được rỗng. Vui lòng nhập lại')</script>";
        }
        else if($kq1){
            echo "<script>alert('Trùng Mã Môn Học. Vui lòng nhập lại')</script>";
        }else {
            $kq = $this -> monhoc -> monhoc_ins($mmh,$tmh,$stc,$gvgd,$hk,$n);

            if ($kq) {
                echo "<script>alert('Thêm mới thành công')</script>";
            } else {
                echo "<script>alert('Thêm mới thất bại')</script>";
            }
        }


        // goi ham them dl tacgia_ins trong model
        $giaovien_list = $this->monhoc->get_giaovien_list();

        $this -> view('Masterlayout',[
            'page'=> 'Monhoc_v',
            'giaovien_list' => $giaovien_list,
            'mamonhoc' => $mmh,
            'tenmonhoc' => $tmh,
            'sotinchi' => $stc,
            'giaoviengiangday' => $gvgd,
            'hocki' => $hk,
            'nganh' => $n
            

        ]);
    }
}

}

?>