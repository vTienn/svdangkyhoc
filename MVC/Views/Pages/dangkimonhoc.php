


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
    <style>
        .menu-item a{
            font-weight: 600;
            font-size: 15px;
        }
        body {
            font-family: Arial, sans-serif;
            /* background: linear-gradient(135deg, #ffecd2, #fcb69f); */
            padding: 20px;
        }
        .item-list li a {
            font-weight: 600;
            font-size: 14px;
        }

        form {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #e76f51;
        }

        input[type="text"],
        input[type="type"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="type"]:focus {
            border-color: #e76f51;
            outline: none;
        }

        .btn {
            background-color: #F2771E;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #c8553d;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #F2771E;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #ffe5d9;
        }

        tr:hover {
            background-color: #ffcdab;
        }

        .btn-outline-primary,
        .btn-outline-danger {
            color: #e76f51;
            border: 1px solid #e76f51;
            background-color: transparent;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        }

        .btn-outline-primary:hover {
            background-color: #e76f51;
            color: #fff;
            border-color: #e76f51;
        }

        .btn-outline-danger {
            color: #d9534f;
            border: 1px solid #d9534f;
        }

        .btn-outline-danger:hover {
            background-color: #d9534f;
            color: #fff;
            border-color: #d9534f;
        }
        .head-title{
    font-weight: 800;
    font-size: 30px;
}
        .section-two-title {
            margin-top: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
    padding-left: 10px;
    padding-right: 10px;
    text-align: center;
    background-color: #F2771E;
    color: #fff;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  
}

.section-two-title h2 {
    font-size: 25px;
    font-weight: 700px;
    color: #fff;
}
.button-selected {
            margin-left: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .button-selected label {
            margin: 0 10px;
            padding: 10px 20px;
            border: 2px solid #e76f51;
            border-radius: 30px;
            background-color: #f57f20;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

       

        .button-selected label:hover {
            background-color: #e76f51;
            color: #fff;
        }

    </style>

<script>
        
    </script>

</head>

<body>
    <div class=>
    <div class="row">
    <div class="button-selected">
    <label for="html">Hk 1</label><br>
    <input type="radio" class="hk hk1" name="bt" value="1">
    <label for="css">Hk 2</label><br>
<input type="radio" class="hk hk2" name="bt" value="2">

                    </div>
                  <div class="col-12 text-center">
                  
                    <div class="section-two-title">
                    <h2>Đăng Kí Môn Học Cho Sinh Viên</h2>
                    
                    </div>
                    
                  </div>
                </div>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Lớp</th>
                <th>Tên Lớp</th>
                <th>Mã Môn Học</th>
                <th>Tên Môn Học</th>
                <th>Số Tín Chỉ</th>
                <th>Giáo Viên Giảng Dạy</th>
                <th>Số Học Sinh</th>
                <th>Học Kì </th>
                <th>Ngành</th>
                <th>Hành động </th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu']) > 0) : ?>
                <?php $i = 0;
                while ($row = mysqli_fetch_assoc($data['dulieu'])) :
                    $soHocSinh = $this->sosvdk($row['mamonhoc']);
                ?>
                    <tr data-hocki="<?php echo $row['hocki'] ?>"  >
                  
                        <td><?php echo ++$i ?></td>
                        <td><?php echo $row['malop'] ?></td>
                        <td><?php echo $row['tenlop'] ?></td>
                        <td><?php echo $row['mamonhoc'] ?></td>
                        <td><?php echo $row['tenmonhoc'] ?></td>
                        <td><?php echo $row['sotinchi'] ?></td>
                        <td><?php echo $row['giaoviengiangday'] ?></td>
                        <td><?php echo $soHocSinh ;echo ' / '; echo $row['sohocsinh'] ?></td>
                        <td><?php echo $row['hocki'] ?></td>
                        <td><?php echo $row['nganh'] ?></td>
                        
                        <td>
                            
                           
                                 <a href="javascript:void(0);" name="btndangky"

                                 class="btndk btn-fix btn" data-masv="<?php echo $masv ?>">Đăng kí</a>
                        </td>
                                
                           </td>
                           
                        
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <!-- Form ẩn -->
    <form id="hiddenForm" action="http://localhost/svdangkyhoc/dangkihoc_ctrl/dangkihoc" method="post" style="display:none;">
        <input type="text" name="malop" id="malop" value="<?php if(isset($data['malop'])) echo $data['malop'] ?>">
        <input type="text" name="mamonhoc" id="mamonhoc" value="<?php if(isset($data['mamonhoc'])) echo $data['mamonhoc'] ?>">
        <input type="text" name="tenmonhoc" id="tenmonhoc" value="<?php if(isset($data['tenmonhoc'])) echo $data['tenmonhoc'] ?>">
       
    </form>
    <script>
      document.querySelectorAll('.btndk').forEach(function(button) {
            button.addEventListener('click', function() {
                var row = this.closest('tr'); // Lấy hàng (row) gần nhất
                var malop = row.cells[1].innerText; // Lấy giá trị từ cột "Mã lớp"
                var mamonhoc = row.cells[3].innerText; // Lấy giá trị từ cột "Mã Môn Học"
                var tenmonhoc = row.cells[4].innerText; // Lấy giá trị từ cột "Tên Môn Học"
                var currentDateTime = new Date().toLocaleString(); // Lấy ngày giờ hiện tại

                // Lưu thời gian đăng ký vào LocalStorage
                localStorage.setItem(`thoigiandk_${mamonhoc}`, currentDateTime);
                // Gán giá trị vào form ẩn
                document.getElementById('malop').value = malop;
                document.getElementById('mamonhoc').value = mamonhoc;
                document.getElementById('tenmonhoc').value = tenmonhoc;
                
                // Submit form ẩn
                document.getElementById('hiddenForm').submit();
            });
        });
//
document.addEventListener('DOMContentLoaded', function () {
            const radios = document.querySelectorAll('input[name="bt"]');
            const selectedHocki = localStorage.getItem('selectedHocki');

            if (selectedHocki) {
                document.querySelector(`input[value="${selectedHocki}"]`).checked = true;
                filterTable(selectedHocki);
            }

            radios.forEach(radio => {
                radio.addEventListener('change', function () {
                    const selectedValue = this.value;
                    localStorage.setItem('selectedHocki', selectedValue);
                    filterTable(selectedValue);
                });
            });

            function filterTable(selectedValue) {
                const rows = document.querySelectorAll('tbody tr');
                rows.forEach(row => {
                    const hocki = row.getAttribute('data-hocki');
                    if (selectedValue === hocki) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            }
        });



    </script>
</body>

</html>
