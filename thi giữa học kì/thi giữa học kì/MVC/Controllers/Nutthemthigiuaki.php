<?php 
class nutthemthigiuaki extends controller{
    public $nutthem;
    function __construct()
    {
        $this->nutthem=$this->model('Thigiuaki_m');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'dethigiuaki_v'
        ]);
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $id=$_POST['txtID'];
            $tenvb=$_POST['txtTenVanBang'];
            $sohieuvb=$_POST['txtSoHieuVanBang'];
            //Kiểm tra trùng mã tác giả
            $kq1=$this->nutthem->checktrungmaid($id);
            if($kq1){
                echo "<script>alert('Trùng mã id!')</script>";
            }
            else{
                //gọi hàm thêm dl tacgia_ins trong model
                $kq=$this->nutthem->thi_ins($id,$tenvb,$sohieuvb);
                
                if($kq){
                    echo "<script>alert('Thêm mới thành công!')</script>";
                }
                else
                    echo "<script>alert('Thêm mới thất bại!')</script>";
            }
            $this->view('Masterlayout',[
                'page'=>'dethigiuaki_v',
                'id'=>$id,
                'tenvb'=>$tenvb,
                'sohieuvb'=>$sohieuvb,
            ]);  
        }
        
    }
}
?>