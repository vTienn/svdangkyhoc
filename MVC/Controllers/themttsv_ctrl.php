<?php 
class themttsv_ctrl extends controller{
    public $nutthem;
    function __construct()
    {
        $this->nutthem=$this->model('cnsinhvien');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'themttsv'
        ]);
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $masv=$_POST['txtmasinhvien'];
            $hoten=$_POST['txthoten'];
            $gioitinh=$_POST['txtgioitinh'];
            $namsinh=$_POST['txtnamsinh'];
            $diachi=$_POST['txtdiachi'];
            $email=$_POST['txtemail'];
            //Kiểm tra trùng mã tác giả
            $kq1=$this->nutthem->checktrungma($masv);
            $kq2=$this->nutthem->checktrong($masv,$hoten,$gioitinh,$namsinh,$diachi,$email);
            $kq4=$this->nutthem->checktrungemail($email);
            if($kq1){
                echo "<script>alert('Trùng mã id!')</script>";
            }
            else if($kq4){
                echo "<script>alert('Trùng email!')</script>";
            }

            else if($kq2){
                 echo "<script>alert('Không được để trống dữ liệu')</script>";
            }
            else{
                //gọi hàm thêm dl tacgia_ins trong mode
                $kq=$this->nutthem->themsv($masv,$hoten,$gioitinh,$namsinh,$diachi,$email);
                $kq3=$this->nutthem->themtaikhoan($masv);
                if($kq){
                    echo "<script>alert('Thêm mới thành công!')</script>";
                }
                else
                    echo "<script>alert('Thêm mới thất bại!')</script>";
            }
            $this->view('Masterlayout',[
                'page'=>'themttsv',
                'masv'=>$masv,
                'hoten'=>$hoten,
                'gioitinh'=>$gioitinh,
                'namsinh'=>$namsinh,
                'diachi'=>$diachi,
                'email'=>$email,

            ]);  
        }
        
    }


}




?>