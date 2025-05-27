<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
<form method="post" action="http://localhost:80/73DCTT22_MVC/Danhsachtacgia/suadl">
    <div class="form-group">
        <?php 
            if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                while($row=mysqli_fetch_array($data['dulieu'])){
        ?>
        
        <label for="myMatg">Mã tác giả</label>
        <input type="text" id = "myMatg" class="form-control dd1" placeholder="Mã tác giả" name="txtMatacgia" value="<?php echo $row['Matacgia'] ?>">
        <label for="myTentg">Họ và tên tác giả</label>
        <input type="text" id="myTentg" class="form-control" placeholder="Họ và tên tác giả" name="txtTentacgia" value="<?php echo $row['Tentacgia'] ?>">
        <label for="myNgaysinh">Ngày sinh</label>
        <input type="date" id="myNgaysinh" class="form-control" placeholder="Ngày sinh" name="txtNgaysinh" value="<?php echo $row['Ngaysinh'] ?>">
        <label for="myGioitinh">Giới tính</label>
        <select id="myGioitinh" class="form-control" name="ddlGioitinh">
            <option value="">---Chọn giới tính---</option>
            <option value="Nam" <?php if($row['Gioitinh']=='Nam') echo 'selected'; ?>>Nam</option>
            <option value="Nữ" <?php if($row['Gioitinh']=='Nữ') echo 'selected'; ?> >Nữ</option>
            <option value="Khác" <?php if($row['Gioitinh']=='Khác') echo 'selected'; ?> >Khác</option>
        </select>
        <label for="myDienthoai">Điện thoại</label>
        <input type="tel" id="myDienthoai" class="form-control" placeholder="Điện thoại" name="txtDienthoai" value="<?php echo $row['Dienthoai'] ?>"> 
        <label for="myEmail">Email</label>
        <input type="email" id="myEmail" class="form-control" placeholder="Email" name="txtEmail" value="<?php echo $row['Email'] ?>">
        <label for="myDiachhi">Địa chỉ</label>
        <input type="text" id="myDiachi" class="form-control" placeholder="Địa chỉ" name="txtDiachi" value="<?php echo $row['Diachi'] ?>">   
       <?php            
                }
            }
        ?>    
        <br>
        <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>                         
    </div>
</form>
</body>
</html>