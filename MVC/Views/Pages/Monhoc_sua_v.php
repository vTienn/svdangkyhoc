<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin môn học</title>
    <link rel="stylesheet" href="http://localhost/svdangkyhoc/Public/Css/bootstrap.min.css">
    <style>
           body {
            font-family: Arial, sans-serif;
            /* background-color: #ffe8d6; */
            color: #4a4a4a;
            margin: 0;
            padding: 0;
        }

        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* background: linear-gradient(135deg, #ffe8d6, #ffe8d6); */
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #ff7f50; /* Màu cam */
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #ff7f50; /* Màu cam */
        }

        .form-control {
            border-radius: 4px;
            margin-bottom: 15px;
            border: 1px solid #ff7f50; /* Màu cam */
        }

        .btn-primary {
            background-color: #ff7f50; /* Màu cam */
            border-color: #ff7f50; /* Màu cam */
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #e67300; /* Màu cam đậm hơn khi hover */
            border-color: #cc6600; /* Màu cam đậm */
        }

        .btn {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 4px;
        }

        .dd1 {
            background-color: #ffe4e1; /* Màu cam nhạt */
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
                margin: 20px;
            }

            .btn {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form method="post" action="http://localhost/svdangkyhoc/Danhsachmonhoc/suadl">
            <div class="form-group">
                <?php 
                    if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu']) > 0){
                        while($row = mysqli_fetch_array($data['dulieu'])){
                ?>
                <label for="myId">Mã môn học</label>
                <input type="text" id="myMamonhoc" class="form-control dd1" placeholder="Mã môn học" name="txtMamonhoc" value="<?php echo trim($row['mamonhoc']); ?>" readonly>
                <label for="myMasv">Tên môn học</label>
                <input type="text" id="myTenmonhoc" class="form-control" placeholder="Tên môn học" name="txtTenmonhoc" value="<?php echo trim($row['tenmonhoc']); ?>">
                <label for="myMamon">Số tín chỉ</label>
                <input type="number" id="mySotinchi" class="form-control" placeholder="Số tín chỉ" name="txtSotinchi" value="<?php echo trim($row['sotinchi']); ?>" min="1" max="4" step="1" >
                <label for="myHoten">Giáo viên giảng dạy</label>
                <input type="text" id="myGiaoviengiangday" class="form-control" placeholder="Giáo viên giảng dạy" name="txtGiaoviengiangday" value="<?php echo trim($row['giaoviengiangday']); ?>" readonly>
                <label for="myDiem">Học kì</label>
                <input type="number" id="myHocki" class="form-control" placeholder="Học kì" name="txtHocki" value="<?php echo trim($row['hocki']); ?>" min="1" max="2" step="1">
                <label for="myMasv">Ngành</label>
                <input type="text" id="myNganh" class="form-control" placeholder="Ngành" name="txtNganh" value="<?php echo trim($row['nganh']); ?>">
                <br>
                <?php
                        }
                    }
                ?>   
                <br>
                <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>                       
            </div>
        </form>
    </div>
</body>
</html>
