<?php 
class Tacgia extends controller{
    public $tacgia;
    function __construct()
    {
        $this->tacgia=$this->model('Tacgia_m');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'Tacgia_v'
        ]);
    }
    function themmoi(){
       
        if(isset($_POST['btnLuu'])){
            $mtg=$_POST['txtMatacgia'];
            $ttg=$_POST['txtTentacgia'];
            $ns=$_POST['txtNgaysinh'];
            $gt=$_POST['ddlGioitinh'];
            $dt=$_POST['txtDienthoai'];
            $mail=$_POST['txtEmail'];
            $dc=$_POST['txtDiachi'];
            //Kiểm tra trùng mã tác giả
            $kq1=$this->tacgia->checktrungmatg($mtg);
            if($kq1){
                echo "<script>alert('Trùng mã tác giả!')</script>";
            }
            else{
                //gọi hàm thêm dl tacgia_ins trong model
                $kq=$this->tacgia->tacgia_ins($mtg,$ttg,$ns,$gt,$dt,$mail,$dc);
                
                if($kq){
                    echo "<script>alert('Thêm mới thành công!')</script>";
                }
                else
                    echo "<script>alert('Thêm mới thất bại!')</script>";
            }
            $this->view('Masterlayout',[
                'page'=>'Tacgia_v',
                'matg'=>$mtg,
                'tentg'=>$ttg,
                'ngaysinh'=>$ns,
                'gioitinh'=>$gt,
                'dienthoai'=>$dt,
                'email'=>$mail,
                'diachi'=>$dc
            ]);
                
        }
        
    }
}
?>