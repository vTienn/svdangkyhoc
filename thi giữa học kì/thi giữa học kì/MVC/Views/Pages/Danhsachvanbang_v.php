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
    <form method="post" action="http://localhost/thi%20gi%E1%BB%AFa%20h%E1%BB%8Dc%20k%C3%AC/Danhsachvanbang/timkiem">
        <div class="form-inline" >
            <label style="width: 100px;">Tên Văn Bằng</label>
            <input type="text" class="form-control dd2" name="txtTenVanBang" 
            value="<?php isset($data['tenvb']) ? isset($data['tenvb']) : '' ?>">
            <label style="width: 100px;">Số Hiệu Văn Bằng</label>
            <input type="text" class="form-control dd2" name="txtSoHieuVanBang" 
            value="<?php isset($data['sohieuvb']) ? isset($data['sohieuvb']) : '' ?>">
            <br>
            <button type="submit" class="btn btn-success" name="btnTimkiem"><img src="http://localhost:80/73DCTT22_MVC/Public/Pictures/search.png" alt="">Tìm kiếm</button> &nbsp &nbsp
            <a href="http://localhost/thi%20gi%E1%BB%AFa%20h%E1%BB%8Dc%20k%C3%AC/dethigiuaki" class="btn btn-success" name="btnTimkiem">Thêm</a>
            <br>
         
        <table class="table table-striped">
            <thead>
                <tr><td></td><td></td></tr>
                <tr style="background: #e9e6e6;">
                    <th>Stt</th>
                    <th>ID Văn Bằng</th>
                    <th>Tên Văn Bằng</th>
                    <th>Mã Số Văn Bằng</th>
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
                           <td><?php echo $row['id'] ?></td>
                           <td><?php echo $row['tenvb'] ?></td>
                           <td><?php echo $row['sohieuvb'] ?></td>
                           <td>
                                <a href="http://localhost/thi%20gi%E1%BB%AFa%20h%E1%BB%8Dc%20k%C3%AC/Danhsachvanbang/sua/<?php echo $row['id'] ?>" class="btn btn-outline-primary">Sửa</a> &nbsp;
                                <a href="http://localhost/thi%20gi%E1%BB%AFa%20h%E1%BB%8Dc%20k%C3%AC/Danhsachvanbang/xoa/<?php echo $row['id'] ?>" class="btn btn-outline-danger">Xóa</a>
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