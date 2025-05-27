<?php
class thongkesv_ctrl extends controller {
    public $thongke;
    private $username;

    function __construct() {
        $this->thongke = $this->model('thongkesv_m');
    }

    function Get_data() {
       
     
        // Gọi view với tham số $masv
        $this->view('Masterlayout', [
            'page' => 'thongkesv',
            'dulieu' => $this->thongke->hienthisvchdk()
        ]);
    }
    

    
}
?>
