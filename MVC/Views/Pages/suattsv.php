<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <title>sửa tt</title>
    <style>
        html {
            margin: 0;
            padding: 0;
        }
        .section-1{
           margin-top: 15px;
            margin-bottom: 20px;
        }
        
        .head-desc {
            text-align: center;
            color: #b5adae;
        }
        
        .head-title1 {
            text-align: center;
            font-weight: 600;
        }
        
        .box-item {
            margin-left: 25px;
        }
        
        .box-icon .box-item {
            display: flex;
            align-items: center;
        }
        
        .box-item .icon-wrap {
            display: flex;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #b5adae;
            justify-content: center;
            align-items: center;
            margin-right: 10px;
            margin-top: -15px;
            position: relative;
            left: 0;
        }
        
        .desc-title {
            font-size: 20px;
        }
        
        .desc-small {
            color: #b5adae;
        }
        
        .box-icon {
            margin-top: 20px;
        }
        
        .section-left {
            border-top: 4px solid #FF9327;
            border-bottom: 4px solid #FF9327;
            border-left: 0.5px solid #ddd;
            border-right: 0.5px solid #ddd;
        }
        
        .inner-map img {
            width: 85%;
            height: 280px;
            margin-left: 30px;
            margin-bottom: 30px;
            border-radius: 15px;
        }
        
        .col-7 {
            border-top: 4px solid #FF9327;
            border-bottom: 4px solid #FF9327;
            border-left: 0.5px solid #ddd;
            border-right: 0.5px solid #ddd;
        }
        
        .box-message {
            margin-bottom: 20px;
        }
        
        .form-btn {
            padding: 10px 20px;
            background-color: #FF9327;
            border: 0;
            border-radius: 5px;
            color: #fff;
        }
        .form-btn:hover {
            
            background-color: #fff;
            border: 1px solid #FF9327;
            color: #FF9327;
        }
        form{
            margin-top: 12px;
        }
    </style>
</head>

<body>

        <div class="section-1">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-head">
                            <h2 class="head-title1">Sửa Thông Tin Sinh Viên</h2>
                            <p class="head-desc">
                            Trang sửa thông tin sinh viên của Trường Đại học Công nghệ Giao thông Vận tải giúp cập nhật và quản lý thông tin sinh viên hiệu quả, đảm bảo dữ liệu chính xác, thuận tiện cho việc tra cứu và theo dõi quá trình học tập.
              </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        <div class="section-left">
                            <div class="box-icon">
                                <div class="box-item">
                                    <div class="icon-wrap">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>

                                    <div class="box-desc">
                                        <h4 class="desc-title">ĐẠI HỌC CN GTVT HÀ NỘI</h4>
                                        <p class="desc-small">
                                            Số 54 Triều Khúc, Thanh Xuân, Hà Nội
                                        </p>
                                    </div>
                                </div>
                                <div class="box-item">
                                    <div class="icon-wrap">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>

                                    <div class="box-desc">
                                        <h4 class="desc-title">CƠ SỞ VĨNH PHÚC</h4>
                                        <p class="desc-small">
                                            278 Lam Sơn, Đồng Tâm, TP. Vĩnh Yên, Vĩnh Phúc
                                        </p>
                                    </div>
                                </div>
                                <div class="box-item">
                                    <div class="icon-wrap">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>

                                    <div class="box-desc">
                                        <h4 class="desc-title">CƠ SỞ THÁI NGUYÊN</h4>
                                        <p class="desc-small">
                                            Phường Tân Thịnh, TP. Thái Nguyên, Thái Nguyên
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="inner-map">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtHm7mNhjjhFoXwvGLfQjENZuTh_0tAqgubDFgUFtbFZho-LaAG8cHBNxQYLOpyBLUAzQ&usqp=CAU"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-7">
                    <form action="http://localhost/svdangkyhoc/timkiemxoattsv_ctrl/suadl" method="post">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">

                                <div class="form-group">
                                <?php 
            if(isset($data['dulieu']) && mysqli_num_rows($data['dulieu'])>0){
                while($row=mysqli_fetch_array($data['dulieu'])){
        ?>
                                    <label for="">Mã SV</label>
                                    <input placeholder="Mã SV" class="form-control" type="text" 
                                    readonly
                                    name="txtmasinhvien" value="<?php echo $row['masv'] ?>" />
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group">
                                
                                    <label for="">Họ Tên</label>
                                    <input placeholder="Họ Tên" class="form-control" type="text" name="txthoten" value="<?php echo $row['hoten'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group">
                                    <label for="">Giới Tính</label>
                                    <select id="myGioitinh" class="form-control" name="txtgioitinh">
                      <option value="">---Chọn giới tính---</option>
                      <option value="Nam" <?php if($row['gioitinh']=='Nam') echo 'selected'; ?>>Nam</option>
                      <option value="Nữ" <?php if($row['gioitinh']=='Nữ') echo 'selected'; ?> >Nữ</option>
                      
                  </select>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group">
                                    <label for="">Năm Sinh</label>
                                    <input placeholder="Năm Sinh" class="form-control" type="date" name="txtnamsinh" value="<?php echo $row['namsinh'] ?>" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group">
                                    <label for="">Địa Chỉ</label>
                                    <input placeholder="Đia Chỉ" class="form-control" type="text" name="txtdiachi" value="<?php echo $row['diachi'] ?>" />

                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input placeholder="Email" class="form-control" type="text" name="txtemail" value="<?php echo $row['email'] ?>" />
                                </div>
                            </div>
                        </div>
                        <?php
                }
            }
        ?> 
                        <div class="row">

                            <div class="col-xl-12 text-center">
                                <button type="submit" 
                                name="btnLuu"
                                class="form-btn ">Lưu</button>
                            </div>
                        </div>
                    </form>
                    </div>
                  
                </div>
            </div>
        </div>
   

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>