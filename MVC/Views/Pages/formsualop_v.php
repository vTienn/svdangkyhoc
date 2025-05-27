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

.edit-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    color: #ff6a00; /* Orange */
}

.form-group input, .form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
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

    </style>
</head>
<body>
    <!-- <div class="container"> -->
        <form method="post" action="http://localhost/svdangkyhoc/formqllop_ctrl/suadl" class="edit-form">
            <div class="form-group">
                <?php 
                    if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                        while($row=mysqli_fetch_array($data['dulieu'])){
                ?>
                <div class="form-group">
                    <label class="lable" for="">Mã Lớp</label>
                    <input type="text" id="txtIDMonHoc" name="txtMalop" class="form-control" placeholder="ID" value="<?php echo $row['malop'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="lable" for="txtMaMonHoc">Tên Lớp</label>
                    <input type="text" id="txtMaMonHoc" name="txtTenlop" class="form-control" placeholder="Name" value="<?php echo $row['tenlop'] ?>">
                </div>
                <div class="form-group">
                    <label class="lable" for="txtGiaoviengiangday">Giáo Viên</label>
                    <?php
                    if(isset($data['SV']) && mysqli_num_rows($data['SV']) >0){
                        ?>
                        <select name="txtGiaoviengiangday">
                         <?php
                         while($rowgv = mysqli_fetch_assoc($data['SV'])){
                            ?>
                            <option value="<?php echo $rowgv['hoten']; ?>"><?php echo $rowgv['hoten']; ?></option>
                            <?php
                        }
                         ?>   
                        </select>
                        <?php  
                    }  
                    ?>  
                </div>
                <div class="form-group">
                    <label class="lable" for="txtSoTinChi">Số Học Sinh</label>
                    <input type="text" id="txtSoTinChi" name="txtSohocsinh" class="form-control" placeholder="Quê quán" value="<?php echo $row['sohocsinh'] ?>">
                </div>
                <?php
                        }
                    }
                ?>
            </div>
            <div class="form-actions">
                <button type="submit" name="btnLuu" class="btn btn-primary">Lưu</button>
                <a href="http://localhost/svdangkyhoc/formqllop_ctrl/timkiem1" name="btnQuayLai" class="btn btn-secondary">Quay Lại</a>
            </div>
        </form>
    </div>
</body>
</html>
