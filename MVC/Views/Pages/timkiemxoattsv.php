<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://localhost/svdangkyhoc/public/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/svdangkyhoc/public/css/style.css">
</head>
<style>
.last-margin {
  margin-top: 16px;
}
.btn-dk{
    width: 150px;
}
.btn-fix{
  width: 50px;
  color: #FFF;

  background: -webkit-linear-gradient(-30deg, #f57f20, #d62b08 100%);
}
.btn-fix:hover{
  background: #fff;
  color: #f57f20;
  border:1px solid #f57f20;
}

</style>
   
<body>

<div class="section-two">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="inner-main">
              
                <div class="row">
                  <div class="col-12 text-center">
                    <div class="section-two-title">
                    <h2>Tìm Kiếm Thông Tin Sinh Viên </h2>
                    </div>
                  </div>
                </div>
            
              
              
              <div class="inner-body">
                <form action="http://localhost/svdangkyhoc/timkiemxoattsv_ctrl/timkiem" method="post">
                  <div class="row">
                    <div class="col-6 ">
                      <div class="form-group">
                        <input
                          type="text" id = "myhoten" class="form-control dd1" placeholder="Họ Tên " name="txthoten" value="<?php if(isset($data['hoten'])) echo $data['hoten'] ?>"
                        />
                      </div>
                    </div>
                    <div class="col-6 ">
                    <input
                          type="text" id = "mydiachi" class="form-control dd1" placeholder="Địa Chỉ " name="txtdiachi" value="<?php if(isset($data['diachi'])) echo $data['diachi'] ?>"
                        />
                    
                    </div>
                    
                  </div>
                  
                 
                  <div class="row">
                    <div class="col-xl-12 text-center">
                    <button type="submit" class="btn-dk btn1 "name="btnTimkiem">Tìm Kiếm</button>   
                    <button type="submit" class="btn-dk btn1 "name="btnXuat">Xuất Excel </button> 
                    </div>
                  </div>
                  <table class="table table-striped">
            <thead>
                
                <tr style="background: -webkit-linear-gradient(-30deg, #f57f20, #d62b08 100%); color:#FFF;">
                    <th>STT</th>
                    <th>Mã SV</th>
                    <th>Họ Tên</th>
                    <th>Giới Tính</th>
                    <th>Năm Sinh</th>
                    <th>Địa Chỉ</th>
                    <th>Email</th>
                  
                    <th>Tác Vụ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                        $i=0;
                        while($row=mysqli_fetch_assoc($data['dulieu'])){
                ?>
                        <tr>
                           <td><?php echo (++$i) ?></td>
                           <td><?php echo $row['masv'] ?></td>
                           <td><?php echo $row['hoten'] ?></td>
                           <td><?php echo $row['gioitinh'] ?></td>
                           <td><?php echo $row['namsinh'] ?></td>
                           <td><?php echo $row['diachi'] ?></td>
                           <td><?php echo $row['email'] ?></td>
                           
                           
                           <td>
                            
                           
                                <a 
                                href="http://localhost/svdangkyhoc/timkiemxoattsv_ctrl/sua/<?php echo $row['masv'] ?>" 
                                

                                class="btn btn-fix">Sửa</a> 
                                
                                &nbsp;
                                <a href="http://localhost/svdangkyhoc/timkiemxoattsv_ctrl/xoa/<?php echo $row['masv'] ?>" class="btn  btn-fix" onclick="confirmDelete(event, '<?php echo $row['masv'] ?>')">Xóa</a>
                           </td>
                        </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
                </form>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>



   <script>
     var a=document.querySelector(".phan-quyen .user").textContent.trim();
    var b=document.querySelectorAll("td a");
    if(a!="admin"){
      b.forEach(function(item) {
               item.addEventListener('click', function(event) {
                   event.preventDefault();
                   alert("Bạn không có quyền truy cập");
               });
           });
    }
    else if(a=="admin"){
        function confirmDelete(event, masv) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết
            if (confirm("Bạn có chắc chắn muốn xóa sinh viên này?")) {
                // Nếu người dùng đồng ý, chuyển hướng đến liên kết xóa
                window.location.href = "http://localhost/svdangkyhoc/timkiemxoattsv_ctrl/xoa/" + masv;
            }
        }
    }
   </script>
</body>
</html>