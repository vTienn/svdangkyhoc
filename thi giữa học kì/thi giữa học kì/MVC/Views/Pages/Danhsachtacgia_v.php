<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .dd2{width: 400px !important;}
        
    </style>
</head>
<body>
    <form method="post" action="http://localhost:80/73DCTT22_MVC/Danhsachtacgia/timkiem">
        <div class="form-inline" >
            
            <label style="width: 100px;">Mã tác giả</label>
            <input type="text" class="form-control dd2" name="txtMatacgia" 
            value="<?php if(isset($data['matg'])) echo $data['matg'] ?>">
            <label style="width: 100px;">Tên tác giả</label>
            <input type="text" class="form-control dd2" name="txtTentacgia" 
            value="<?php if(isset($data['tentg'])) echo $data['tentg'] ?>">
            <button type="submit" class="btn btn-success" name="btnTimkiem"><img src="http://localhost:80/73DCTT22_MVC/Public/Pictures/search.png" alt="">Tìm kiếm</button>
            <a class="btn btn-success" name="btnThem" href=""></a>
         
        <table class="table table-striped">
            <thead>
                <tr><td></td><td></td></tr>
                <tr style="background: #e9e6e6;">
                    <th>Stt</th>
                    <th>Mã TG</th>
                    <th>Tên TG</th>
                    <th>Ngày Sinh</th>
                    <th>Giới Tính</th>
                    <th>Điện Thoại</th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th></th>
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
                           <td><?php echo $row['Matacgia'] ?></td>
                           <td><?php echo $row['Tentacgia'] ?></td>
                           <td><?php echo $row['Ngaysinh'] ?></td>
                           <td><?php echo $row['Gioitinh'] ?></td>
                           <td><?php echo $row['Dienthoai'] ?></td>
                           <td><?php echo $row['Email'] ?></td>
                           <td><?php echo $row['Diachi'] ?></td>
                           <td>
                                <a href="http://localhost:80/73DCTT22_MVC/Danhsachtacgia/sua/<?php echo $row['Matacgia'] ?>" class="btn btn-outline-primary">Sửa</a> &nbsp;
                                <a href="http://localhost:80/73DCTT22_MVC/Danhsachtacgia/xoa/<?php echo $row['Matacgia'] ?>" class="btn btn-outline-danger">Xóa</a>
                           </td>
                        </tr>
                <?php
                        }
                    }
                ?>
            </tbody>
        </table>
        </div>
        
        
    </form>
</body>
</html>