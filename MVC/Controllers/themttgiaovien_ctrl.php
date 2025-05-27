<?php 
class themttgiaovien_ctrl extends controller{
    public $nutthem;
    function __construct()
    {
        $this->nutthem=$this->model('cngiaovien');
    }
    function Get_data(){
        $this->view('Masterlayout',[
            'page'=>'themttgiaovien'
        ]);
    }
    function themmoi(){
        if(isset($_POST['btnLuu'])){
            $magiaovien=$_POST['txtmagiaovien'];
            $hoten=$_POST['txthoten'];
            $gioitinh=$_POST['txtgioitinh'];
            $namsinh=$_POST['txtnamsinh'];
            $diachi=$_POST['txtdiachi'];
            $email=$_POST['txtemail'];
            $dienthoai =$_POST['txtdienthoai'];
            //Kiểm tra trùng mã tác giả
            $kq1=$this->nutthem->checktrungma($magiaovien);
            $kq2=$this->nutthem->checktrong($magiaovien,$hoten,$gioitinh,$namsinh,$diachi,$email, $dienthoai);

            if($kq1){
                echo "<script>alert('Trùng mã id!')</script>";
            }
            else if($kq2){
                 echo "<script>alert('Không được để trống dữ liệu')</script>";
            }
            else{
                //gọi hàm thêm dl tacgia_ins trong mode
                $kq=$this->nutthem->themgiaovien($magiaovien,$hoten,$gioitinh,$namsinh,$diachi,$email,$dienthoai);
                if($kq){
                    echo "<script>alert('Thêm mới thành công!')</script>";
                }
                else
                    echo "<script>alert('Thêm mới thất bại!')</script>";
            }
            $this->view('Masterlayout',[
                'page'=>'themttgiaovien',
                'magiaovien'=>$magiaovien,
                'hoten'=>$hoten,
                'gioitinh'=>$gioitinh,
                'namsinh'=>$namsinh,
                'diachi'=>$diachi,
                'email'=>$email,
                'dienthoai' => $dienthoai,

            ]);  
        }
        
    }


}




?>