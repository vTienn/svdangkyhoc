<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 20px;
}

.create-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: auto;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #ff6a00; 
}

.form-group input, .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
}

.form-actions {
    display: flex;
    justify-content: flex-start;
}

.form-actions .btn {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    color: white;
    cursor: pointer;
    margin-right: 10px;
    font-size: 16px;
}

.form-actions .btn-primary {
    background-color: #ff4500; 
}

.form-actions .btn-secondary {
    background-color: #555; 
}


.form-actions .btn-primary:hover {
    background-color: #e03e00; 
}

.form-actions .btn-secondary:hover {
    background-color: #444; 
}


.table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

.table thead th {
    background-color: #ff6a00; 
    color: white;
    padding: 10px;
    text-align: left;
}

.table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table tbody td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

.table tbody td .btn {
    padding: 5px 10px;
    font-size: 14px;
}
.head-title{
    color: #333333;
    font-weight: 800;
    font-size: 30px;
}
.menu-item a{
  color: #333333;
  font-size: 14px;
  font-weight: 600;
}
    </style>
</head>
<body>
    <!-- <div class="container"> -->
        <form method="post" action="http://localhost/svdangkyhoc/formqllop_ctrl/themmoi" class="create-form">
            <div class="form-group">
                <label class="lable" for="txtIDMonHoc">Mã Lớp</label>
                <input type="text" id="txtIDMonHoc" name="txtMalop" class="form-control" placeholder="Mã lớp" 
                required
                value="<?php if(isset($data['malop'])) echo $data['malop'] ?>">
            </div>
            <div class="form-group">
                <label class="lable" for="txtMaMonHoc">Tên Lớp</label>
                <input type="text" id="txtMaMonHoc" name="txtTenlop" 
                required
                class="form-control" placeholder="Tên lớp" value="<?php if(isset($data['tenlop'])) echo $data['tenlop'] ?>">
            </div>
            <div class="form-group">
                <label class="lable" for="txtTenMonHoc">Giáo Viên</label>
                <?php 
            if(isset($data['SV']) && mysqli_num_rows($data['SV']) > 0) {
                ?>
                <select 
                required
                name="txtGiaoviengiangday" id="txtGiaoviengiangday">
                <option value="">---Chọn giáo viên---</option>
                    <?php
                while($rowgv = mysqli_fetch_assoc($data['SV'])) {
                        ?>
                        <option value="<?php echo $rowgv['hoten']; ?>"><?php echo $rowgv['hoten']; ?></option>
                <?php   
                }
                ?></select>
                <?php
            }
            ?>   
            </div>
            <div class="form-group">
                <label class="lable" for="txtSoTinChi">Số Học Sinh</label>
                <input type="text" 
                required
                id="txtSoTinChi" name="txtSohocsinh" class="form-control" placeholder="Số học sinh" value="<?php if(isset($data['quequan'])) echo $data['quequan'] ?>">
            </div>
            <div class="form-actions">
                <button type="submit" name="btnLuu" class="btn btn-primary">Lưu</button>
                <a href="http://localhost/svdangkyhoc/formqllop_ctrl/timkiem1" name="btnQuayLai" class="btn btn-secondary">Quay Lại</a>
            </div>
        </form>
        
    </div>
</body>
</html>
