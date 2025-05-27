<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: left;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background: linear-gradient(to right, #ff7e5f, #feb47b);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            margin: auto;
        }

        button[type="submit"]:hover {
            background: linear-gradient(to right, #feb47b, #ff7e5f);
        }

        .head {
            
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            color: #333;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            border-bottom: 2px solid #ff7e5f;
            display: inline-block;
            padding-bottom: 5px;
        
        }

    </style>
</head>
<body>

<form action="http://localhost/svdangkyhoc/Monhoc/themmoi" method="post">
    <h2 class="head">Hãy Nhập Thông Tin Môn Học</h2>
    <div class="form-group">
        <label for="myMamonhoc">Mã môn học</label>
        <input type="text" id="myMamonhoc" class="form-control" placeholder="Mã môn học" name="txtMamonhoc" value="<?php if(isset($data['mamonhoc'])) echo $data['mamonhoc'] ?>">
        <label for="myTenmonhoc">Tên môn học</label>
        <input type="text" id="myTenmonhoc" class="form-control" placeholder="Tên môn học" name="txtTenmonhoc" value="<?php if(isset($data['tenmonhoc'])) echo $data['tenmonhoc'] ?>">
        <label for="mySotinchi">Số tín chỉ</label>
        <input type="number" id="mySotinchi" class="form-control" placeholder="Số tín chỉ" name="txtSotinchi" value="<?php if(isset($data['sotinchi'])) echo $data['sotinchi'] ?>" min="2" max="5" step="1">
       
        <!-- <label for="myGiaoviengiangday">Giáo viên giảng dạy</label>
        <input type="text" id="myGiaoviengiangday" class="form-control" placeholder="Giáo viên giảng dạy" name="txtGiaoviengiangday" value="<?php if(isset($data['giaoviengiangday'])) echo $data['giaoviengiangday'] ?>"> -->

        <label for="myGiaoviengiangday">Giáo viên giảng dạy</label>
        <select id="myGiaoviengiangday" class="form-control" name="txtGiaoviengiangday">
        <option value="">---Chọn Giáo Viên Giảng Dạy---</option>
            <?php
            if (isset($data['giaovien_list'])) {
                while ($row = mysqli_fetch_assoc($data['giaovien_list'])) {
                    echo "<option value='{$row['hoten']}'>{$row['hoten']}</option>";
                }
            }
            ?>
        </select>
       
        <label for="myHocki">Học kì</label>
        <input type="number" id="myHocki" class="form-control" placeholder="Học kì" name="txtHocki" value="<?php if(isset($data['hocki'])) echo $data['hocki'] ?>" min="1" max="2" step="1">
        <label for="myNganh">Ngành</label>
        <input type="text" id="myNganh" class="form-control" placeholder="Ngành" name="txtNganh" value="<?php if(isset($data['nganh'])) echo $data['nganh'] ?>">

        <button type="submit" class="btn btn-primary" name="btnLuu">Lưu</button>
    </div>
</form>

</body>
</html>
