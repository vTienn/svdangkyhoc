<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<link rel="stylesheet" href="http://localhost:80/73DCTT22_MVC/Public/Css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost:80/73DCTT22_MVC/Public/Css/dinhdang7.css">
    <script src="http://localhost:80/73DCTT22_MVC/Public/Js/jquery-3.3.1.slim.min.js"></script>
    <script src="http://localhost:80/73DCTT22_MVC/Public/Js/popper.min.js"></script>
    <script src="http://localhost:80/73DCTT22_MVC/Public/Js/bootstrap.min.js"></script>
<body>
<form method="post" action="http://localhost/thi%20gi%E1%BB%AFa%20h%E1%BB%8Dc%20k%C3%AC/Danhsachvanbang/suadl">
    <div class="form-group">
        <?php 
            if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                while($row=mysqli_fetch_array($data['dulieu'])){
        ?>
        <label for="myId">ID Văn Bằng</label>
        <input type="text" id = "myId" class="form-control dd1" placeholder="ID Văn Bằng" name="txtID" value="<?php echo $row['id'] ?> " readonly>
        <label for="myTenVanBang">Tên Văn Bằng</label>
        <input type="text" id="myTenVanBang" class="form-control" placeholder="Tên Văn Bằng" name="txtTenVanBang" value="<?php echo $row['tenvb'] ?>">
        <label for="mySoHieuVanBang">Số Hiệu Văn Bằng</label>
        <input type="text" id="mySoHieuVanBang" class="form-control" placeholder="Số Hiệu Văn Bằng" name="txtSoHieuVanBang" value="<?php echo $row['sohieuvb'] ?>">
        <br>
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