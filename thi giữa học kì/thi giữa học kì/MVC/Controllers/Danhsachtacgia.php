<?php 
class Danhsachtacgia extends controller{
    private $dstg;
    function __construct()
    {
        $this->dstg=$this->model('Tacgia_m');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'Danhsachtacgia_v'
        ]);
    }
    function timkiem(){
        if(isset($_POST['btnTimkiem'])){
            $mtg=$_POST['txtMatacgia'];
            $ttg=$_POST['txtTentacgia'];
            $dulieu=$this->dstg->tacgia_find($mtg,$ttg);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'Danhsachtacgia_v',
                'dulieu'=>$dulieu,
                'matg'=>$mtg,
                'tentg'=>$ttg
            ]);
        }
    }
    function xoa($mtg){
        $kq=$this->dstg->tacgia_del($mtg);
        if($kq)
            echo "<script>alert('Xóa thành công!')</script>";
        else
            echo "<script>alert('Xóa thất bại!')</script>";
        //Gọi lại giao diện và truyền $dulieu ra
        $mtg=$_POST['txtMatacgia'];
        $ttg=$_POST['txtTentacgia'];
        $dulieu=$this->dstg->tacgia_find($mtg,$ttg);
        $this->view('Masterlayout',[
            'page'=>'Danhsachtacgia_v',
            'dulieu'=>$dulieu,
            'matg'=>$mtg,
            'tentg'=>$ttg
        ]);
    }
    function sua($mtg){
        $this->view('Masterlayout',[
            'page'=>'Tacgia_sua_v',
            'dulieu'=>$this->dstg->tacgia_find($mtg,'')
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $mtg=$_POST['txtMatacgia'];
            $ttg=$_POST['txtTentacgia'];
            $ns=$_POST['txtNgaysinh'];
            $gt=$_POST['ddlGioitinh'];
            $dt=$_POST['txtDienthoai'];
            $mail=$_POST['txtEmail'];
            $dc=$_POST['txtDiachi'];
            //gọi hàm sủa dl tacgia_udp trong model
            $kq=$this->dstg->tacgia_upd($mtg,$ttg,$ns,$gt,$dt,$mail,$dc);
            
            if($kq){
                echo "<script>alert('Sửa thành công!')</script>";
            }
            else
                echo "<script>alert('Sửa thất bại!')</script>";
           
            //Gọi lại giao diện và truyền $dulieu ra
            $mtg=$_POST['txtMatacgia'];
            $ttg=$_POST['txtTentacgia'];
            $dulieu=$this->dstg->tacgia_find($mtg,$ttg);
            $this->view('Masterlayout',[
                'page'=>'Danhsachtacgia_v',
                'dulieu'=>$dulieu,
                'matg'=>$mtg,
                'tentg'=>$ttg
            ]);
                
        }
    }
}
?>
