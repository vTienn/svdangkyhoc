<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
<form method="post" action="http://localhost:80/73DCTT22_MVC/Tacgia/themmoi">
    <div class="form-group">
        <label for="myMatg">Mã tác giả</label>
        <input type="text" id = "myMatg" class="form-control dd1" placeholder="Mã tác giả" name="txtMatacgia" value="<?php if(isset($data['matg'])) echo $data['matg'] ?>">
        <label for="myTentg">Họ và tên tác giả</label>
        <input type="text" id="myTentg" class="form-control" placeholder="Họ và tên tác giả" name="txtTentacgia" value="<?php if(isset($data['tentg'])) echo $data['tentg'] ?>">
        <label for="myNgaysinh">Ngày sinh</label>
        <input type="date" id="myNgaysinh" class="form-control" placeholder="Ngày sinh" name="txtNgaysinh" value="<?php if(isset($data['ngaysinh'])) echo $data['ngaysinh'] ?>">
        <label for="myGioitinh">Giới tính</label>
        <select id="myGioitinh" class="form-control" name="ddlGioitinh">
            <option value="">---Chọn giới tính---</option>
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
            <option value="Khác">Khác</option>
        </select>
        <label for="myDienthoai">Điện thoại</label>
        <input type="tel" id="myDienthoai" class="form-control" placeholder="Điện thoại" name="txtDienthoai" value="<?php if(isset($data['dienthoai'])) echo $data['dienthoai'] ?>"> 
        <label for="myEmail">Email</label>
        <input type="email" id="myEmail" class="form-control" placeholder="Email" name="txtEmail" value="<?php if(isset($data['email'])) echo $data['email'] ?>">
        <label for="myDiachhi">Địa chỉ</label>
        <input type="text" id="myDiachi" class="form-control" placeholder="Địa chỉ" name="txtDiachi" value="<?php if(isset($data['diachi'])) echo $data['diachi'] ?>">      
        <br>
        <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>                         
    </div>
</form>
</body>
</html>