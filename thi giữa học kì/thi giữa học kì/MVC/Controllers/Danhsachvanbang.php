<?php 
class Danhsachvanbang extends controller{
    private $dsvb;
    function __construct()
    {
        $this->dsvb=$this->model('Thigiuaki_m');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'Danhsachvanbang_v'
        ]);
    }
    function timkiem(){
        if(isset($_POST['btnTimkiem'])){
            $tenvb=$_POST['txtTenVanBang'];
            $sohieuvb=$_POST['txtSoHieuVanBang'];
            $dulieu=$this->dsvb->vanbang_find($tenvb,$sohieuvb);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'Danhsachvanbang_v',
                'dulieu'=>$dulieu,
                'tenvb'=>$tenvb,
                'sohieuvb'=>$sohieuvb
            ]);
        }
    }
    function xoa($id){
        $kq=$this->dsvb->vanbang_del($id);
        if($kq)
            echo "<script>alert('Xóa thành công!')</script>";
        else
            echo "<script>alert('Xóa thất bại!')</script>";
        $tenvb=isset($_POST['txtTenVanBang']) ? isset($_POST['txtTenVanBang']) : '' ;
        $sohieuvb=isset($_POST['txtSoHieuVanBang']) ? isset($_POST['txtSoHieuVanBang']) : '';
        $dulieu=$this->dsvb->vanbang_find($tenvb,$sohieuvb);
        //Gọi lại giao diện và truyền $dulieu ra
        $this->view('Masterlayout',[
            'page'=>'Danhsachvanbang_v',
            'dulieu'=>$dulieu,
            'tenvb'=>$tenvb,
            'sohieuvb'=>$sohieuvb
        ]);
    }
    function sua($id){
        $this->view('Masterlayout',[
            'page'=>'Danhsachvanbang_sua_v',
            'dulieu'=>$this->dsvb->vanbang_find1($id)
        ]);
    }
    function suadl(){
        if(isset($_POST['btnLuu'])){
            $id=$_POST['txtID'];
            $tenvb=$_POST['txtTenVanBang'];
            $sohieuvb=$_POST['txtSoHieuVanBang'];
            //gọi hàm sủa dl tacgia_udp trong model
            $kq=$this->dsvb->vanbang_upd($id,$tenvb,$sohieuvb);
            
            if($kq){
                echo "<script>alert('Sửa thành công!')</script>";
            }
            else
                echo "<script>alert('Sửa thất bại!')</script>";
           
            //Gọi lại giao diện và truyền $dulieu ra
            $tenvb=$_POST['txtTenVanBang'];
            $sohieuvb=$_POST['txtSoHieuVanBang'];
            $dulieu=$this->dsvb->vanbang_find($tenvb,$sohieuvb);
            //Gọi lại giao diện và truyền $dulieu ra
            $this->view('Masterlayout',[
                'page'=>'Danhsachvanbang_v',
                'dulieu'=>$dulieu,
                'tenvb'=>$tenvb,
                'sohieuvb'=>$sohieuvb
            ]);
                
        }
    }
}
?>
