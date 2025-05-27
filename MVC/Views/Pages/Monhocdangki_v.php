<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            background-color: #e76f51;
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
        .btn-outline-danger {
    color: #d9534f;
    border: 1px solid #d9534f;
    background-color: transparent;
    padding: 5px 10px;
    border-radius: 5px;
    text-decoration: none;
    cursor: pointer;
    transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease;
}

.btn-outline-danger:hover {
    background-color: #d9534f;
    color: #fff;
    border-color: #d9534f;
}

.btn-fix {
    display: inline-block;
    margin: 5px 0;
    text-align: center;
    font-size: 14px;
    padding: 10px 20px;
    border-radius: 5px;
    color: #fff;
    background-color: #F2771E;
    text-decoration: none;
    transition: background-color 0.3s ease;
}


.btn-fix:hover {
    background-color: #c8553d;
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
    </style>

<script>
        
    </script>

</head>

<body>
<div class=>
    <div class="row">
                  <div class="col-12 text-center">
                    <div class="section-two-title">
                    <h2>Môn Học Đã Đăng Kí</h2>
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
                <th>Tên Môn Học</th>
                <th>Mã Môn Học</th>
                <th>Số Tín Chỉ</th>
                <th>Giáo Viên Giảng Dạy</th>
                <th>Thời Gian ĐK</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu']) > 0) : ?>
                <?php $i = 0;
                while ($row = mysqli_fetch_assoc($data['dulieu'])) : ?>
                    <tr data-mamonhoc="<?php echo $row['mamonhoc']; ?>"  >
                  
                        <td><?php echo ++$i ?></td>
                        <td><?php echo $row['malop'] ?></td>
                        <td><?php echo $row['tenlop'] ?></td>
                        <td><?php echo $row['tenmonhoc'] ?></td>
                        <td><?php echo $row['mamonhoc'] ?></td>
                        <td><?php echo $row['sotinchi'] ?></td>
                        <td><?php echo $row['giaoviengiangday'] ?></td>
                        <td class="thoigiandk">N/A</td>
                        <td>                                                
                        <a href="javascript:void(0);" name="btndangky"
                             class="btndk btn-fix btn" >Hủy Đăng Kí</a>                             
                           </td>
                           
                        
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <form id="hiddenForm" action="http://localhost/svdangkyhoc/Monhocdangki/huy" method="post" style="display:none;">
        
        <input type="text" name="mamonhoc" id="mamonhoc" value="<?php if(isset($data['mamonhoc'])) echo $data['mamonhoc'] ?>">
        
    </form>
    
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const rows = document.querySelectorAll('tbody tr');
        rows.forEach(function(row) {
            const mamonhoc = row.getAttribute('data-mamonhoc');
            const thoigiandk = localStorage.getItem(`thoigiandk_${mamonhoc}`);
            if (thoigiandk) {
                row.querySelector('.thoigiandk').innerText = thoigiandk;
            }
        });
    });
    document.querySelectorAll('.btndk').forEach(function(button) {
            button.addEventListener('click', function() {
                var row = this.closest('tr'); // Lấy hàng (row) gần nhất
                var mamonhoc = row.cells[4].innerText; // Lấy giá trị từ cột "Mã Môn Học"
                if (confirm("Bạn có chắc chắn muốn hủy đăng ký môn học này?")) {
                    // Gán giá trị vào form ẩn
                    document.getElementById('mamonhoc').value = mamonhoc;
                    // Submit form ẩn
                    document.getElementById('hiddenForm').submit();
                }
            });
        });
</script>
</body>

</html>
