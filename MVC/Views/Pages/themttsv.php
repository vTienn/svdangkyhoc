<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://localhost/svdangkyhoc/public/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/svdangkyhoc/public/css/style.css">
</head>
<style>
.last-margin {
  margin-top: 16px;
}

</style>
<script>
    // document.addEventListener('DOMContentLoaded', (event) => {
    //         const usernameInput = document.getElementById('mymasv');
    //         const defaultValue = usernameInput.value;

    //         usernameInput.addEventListener('input', () => {
    //             if (usernameInput.value === '') {
    //                 usernameInput.value = defaultValue;
    //             }
    //         });
    //     });
    //     document.addEventListener('DOMContentLoaded', function() {
    //     var mamonhocInput = document.getElementById('mymasv');
    //     var originalValue = mamonhocInput.value;

    //     mamonhocInput.addEventListener('keydown', function(event) {
    //         var startPos = mamonhocInput.selectionStart;
    //         if (startPos < originalValue.length && (event.key !== 'ArrowRight' && event.key !== 'ArrowLeft')) {
    //             event.preventDefault();
    //         }
    //     });

    //     mamonhocInput.addEventListener('input', function(event) {
    //         if (mamonhocInput.value.substring(0, originalValue.length) !== originalValue) {
    //             mamonhocInput.value = originalValue;
    //         } else if (mamonhocInput.value.length > originalValue.length + 2) {
    //             mamonhocInput.value = mamonhocInput.value.substring(0, originalValue.length + 2);
    //         }
    //     });
    // });
</script>
   
<body>

<div class="section-two">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="inner-main">
              
                <div class="row">
                  <div class="col-12 text-center">
                    <div class="section-two-title">
                    <h2>Hãy Nhập Thông Tin Sinh Viên</h2>
                    </div>
                  </div>
                </div>
            
              
              
              <div class="inner-body">
                <form action="http://localhost/svdangkyhoc/themttsv_ctrl/themmoi" method="post">
                  <div class="row">
                    <div class="col-6 ">
                      <div class="form-group">
                        <input
                          type="text" id = "mymasv" class="form-control dd1" placeholder="Mã SV " name="txtmasinhvien" value="<?php if(isset($data['masv'])) echo $data['masv'] ?>"
                        />
                      </div>
                    </div>
                    <div class="col-6 ">
                    <input
                          type="text" id = "myhoten" class="form-control dd1" placeholder="Họ Tên " name="txthoten" value="<?php if(isset($data['hoten'])) echo $data['hoten'] ?>"
                        />
                    
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-6 ">
                    <div class="input-group">
                        <select value="<?php if(isset($data['gioitinh'])) echo $data['gioitinh'] ?>"class="custom-select" id="inputGroupSelect04" name="txtgioitinh" aria-label="Example select with button addon">
                          <option selected>Giới Tính...</option>
                          <option value="Nam">Nam</option>
                          <option value="Nữ">Nữ</option>
                      
                        </select>
  
                </div>
                    </div>
                    <div class="col-6 ">
                    <input
                          type="date" id = "mynamsinh" class="form-control dd1" placeholder="Năm Sinh" name="txtnamsinh" value="<?php if(isset($data['namsinh'])) echo $data['namsinh'] ?>"
                        />
                    </div>
                    
                  </div>
                  <div class="row last-margin">
                    <div class="col-6 ">
                      <div class="form-group">
                        <input
                          type="text" id = "mydiachi" class="form-control dd1" placeholder="Địa Chỉ " name="txtdiachi" value="<?php if(isset($data['diachi'])) echo $data['diachi'] ?>"
                        />
                      </div>
                    </div>
                    <div class="col-6 ">
                    <input
                          type="text" id = "myem" class="form-control dd1" placeholder="Email " name="txtemail" value="<?php if(isset($data['email'])) echo $data['email'] ?>"
                        />
                    
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-xl-12 text-center">
                    <button type="submit" class="btn-dk btn1 "name="btnLuu">Lưu</button>   
                    
                    </div>
                  </div>
                </form>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>



   
</body>
</html>