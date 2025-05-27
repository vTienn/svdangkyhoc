<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://localhost/svdangkyhoc/public/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   
    

    <title>Document</title>
</head>
<style>
 
  .menu-item{
    width: 210px;
  }
  .item-list li i {
  margin-right: 10px;
  font-size: 18px;
}
  .head-title {
  color: #333333;
  font-weight: 800;
  font-size: 30px;
}
.inner-menu .menu-list{
  position: relative;
  left: -50px;
}
  .item-list li a {
  list-style: none;
  width: 100%;
  font-size: 14px;
  color: #333333;
  font-weight: 500;
}
.item-list {
  display: none;
  padding: 0;
  flex-direction: column;
  position: absolute;
  background-color: #ffffff;
  width: 100%;
  left: 25px;
  top: 60px;
}
.inner-icon .icon-wrap a{
  font-size: 13px ;
  display: flex;
  align-items: center;
  position: relative;
  top: 0px;
  margin-left: 20px;
  
}
.icon-wrap {
  display: flex;
  align-items: center;
  position: relative;
  left: -50px;
  top: -4px;
}
.menu-item a{
  text-decoration: none;
}
.phan-quyen{
  display: flex;
  align-items: center;
}
.phan-quyen i{
  margin-right: 5px;
}




</style>

<body>
   
   <div class="contain">
   <div class="row">
    <div class="header">
      <div class="inner-head">
        <div class="inner-logo">
          <img
            class="head-logo"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXhUGL43W_FseAc7LsDpjvn8sr7Qupv7cZ0w&s"
            alt=""
          />
          <h2 class="head-title">UTT University</h2>
        </div>
        <div class="inner-menu">
          <ul class="menu-list">
            <li class="menu-item"><a href="http://localhost/svdangkyhoc/trangchu_ctrl/"><i class="fa-solid fa-house"></i>Trang Chủ UTT</a>
           
        
        </li>
            <li class="menu-item"><a href=""><i class="fa-solid fa-graduation-cap"></i> Quản Lý Sinh Viên</a>
            <ul class="item-list">
                <li class="user-sv"><a href="http://localhost/svdangkyhoc/themttsv_ctrl"><i class="fa-solid fa-plus"></i>Thêm sinh viên</a></li>
                <li class="user-sv"><a href="http://localhost/svdangkyhoc/timkiemxoattsv_ctrl"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm sinh viên</a></li>
                <li><a href="http://localhost/svdangkyhoc/dangkihoc_ctrl"><i class="fa-solid fa-marker"></i>Đăng kí học</a></li>
                
            </ul>
          </li>
            <li class="menu-item"><a href=""><i class="fa-solid fa-book"></i>Quản Lý Môn Học</a>
            <ul class="item-list">
                <li class="user-sv"><a href="http://localhost/svdangkyhoc/Monhoc"><i class="fa-solid fa-plus"></i>Thêm môn học</a></li>
                <li class=""><a href="http://localhost/svdangkyhoc/Danhsachmonhoc"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm môn học</a></li>
                <li><a href="http://localhost/svdangkyhoc/Monhocdangki"><i class="fa-solid fa-marker"></i>Xem môn học đã đăng kí</a></li>

                
            </ul>
          
          </li>
            <li class="menu-item"><a href=""><i class="fa-solid fa-user-tie"></i>Quản Lý Giảng Viên</a>
            <ul class="item-list">
                <li class="user-sv"><a href="http://localhost/svdangkyhoc/themttgiaovien_ctrl"><i class="fa-solid fa-plus"></i>Thêm giảng viên</a></li>
                <li><a href="http://localhost/svdangkyhoc/timkiemxoattgiaovien_ctrl"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm giảng viên</a></li>
                <li><a href=""><i class="fa-solid fa-marker"></i>Xem giảng viên</a></li>
                
            </ul>
          
          </li>
          <li class="menu-item"><a href=""><i class="fa-solid fa-door-open"></i>Quản Lý Lớp Học</a>
            <ul class="item-list">
                <li class="user-sv"><a href="http://localhost/svdangkyhoc/formqllop_ctrl/vthem"><i class="fa-solid fa-plus"></i>Thêm lớp</a></li>
                <li><a href="http://localhost/svdangkyhoc/formqllop_ctrl"><i class="fa-solid fa-magnifying-glass"></i>Tìm kiếm lớp</a></li>
                <li class="user-sv"><a href="http://localhost/svdangkyhoc/thongkesv_ctrl"><i class="fa-solid fa-marker"></i>Thống Kê Đăng Kí</a></li>
                
            </ul>
          
          </li>
         
          
          
          </ul>
        </div>
        <div class="inner-icon">
        
          <div class="icon-wrap">
          
         <div class="phan-quyen">
         <i class="fa-solid fa-user-tie"></i>
         
         <span class="user">
         <?php
         
         if (session_status() == PHP_SESSION_NONE) {
           session_start();
       }
       if (isset($_SESSION['username'])) {
         echo htmlspecialchars($_SESSION['username']);
     }
         ?>
         </span>
         
         </div>
            <a href="http://localhost/svdangkyhoc/"> <i class="fa-solid fa-right-from-bracket"></i>Thoát</a>
            </div>
      
           
          </div>
         
        </div>
      </div>
    </div>

    </div>
     
     <div class="content">
     
  <?php 
                                include_once './MVC/Views/Pages/'.$data['page'].'.php';
                            ?>
 
      </div>
     
     
   </div>
   
   <script>
    var a=document.querySelector(".phan-quyen .user").textContent.trim();
    var b=document.querySelectorAll(".user-sv a");
    if(a!="admin"){
      b.forEach(function(item) {
               item.addEventListener('click', function(event) {
                   event.preventDefault();
                   alert("Bạn không có quyền truy cập");
               });
           });
    }
   
    

           
            
      

    
   </script>
 
    
   
</body>
</html>

