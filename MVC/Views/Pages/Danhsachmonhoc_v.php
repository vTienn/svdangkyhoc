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
            background-color: #e76f51;
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
    </style>

<script>
        
    </script>

</head>

<body>
    <form method="post" action="http://localhost/svdangkyhoc/Danhsachmonhoc/timkiem">
        <div class="form-group">
            <label for="txtMamonhoc">Mã Môn Học</label>
            <input type="text" id="txtMamonhoc" name="txtMamonhoc" value="<?php if (isset($data['mamonhoc'])) echo $data['mamonhoc'] ?>">
        </div>
        <div class="form-group">
            <label for="txtTenmonhoc">Tên Môn Học</label>
            <input type="text" id="txtTenmonhoc" name="txtTenmonhoc" value="<?php if (isset($data['tenmonhoc'])) echo $data['tenmonhoc'] ?>">
        </div>
        <button type="submit" class="btn" name="btnTimkiem">Tìm Kiếm</button>
        <button type="submit" class="btn" name="btnXuatExcel">Xuất Excel</button>

    </form>
    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Môn Học</th>
                <th>Tên Môn Học</th>
                <th>Số Tín Chỉ</th>
                <th>Giáo Viên Giảng Dạy</th>
                <th>Học Kì</th>
                <th>Ngành</th>
               
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($data['dulieu']) && mysqli_num_rows($data['dulieu']) > 0) : ?>
                <?php $i = 0;
                while ($row = mysqli_fetch_assoc($data['dulieu'])) : ?>
                    <tr>
                        <td><?php echo ++$i ?></td>
                        <td><?php echo $row['mamonhoc'] ?></td>
                        <td><?php echo $row['tenmonhoc'] ?></td>
                        <td><?php echo $row['sotinchi'] ?></td>
                        <td><?php echo $row['giaoviengiangday'] ?></td>
                        <td><?php echo $row['hocki'] ?></td>
                        <td><?php echo $row['nganh'] ?></td>
                        <td>
                            <a href="http://localhost/svdangkyhoc/Danhsachmonhoc/sua/<?php echo $row['mamonhoc'] ?>" class="btn-outline-primary">Sửa</a> &nbsp;
                            <a href="#" class="btn-outline-danger" onclick="confirmDelete(event, '<?php echo $row['mamonhoc'] ?>')">Xóa</a>
                            <!-- <a href="http://localhost/svdangkyhoc/Danhsachmonhoc/xoa/<?php echo $row['mamonhoc'] ?>" class="btn-outline-danger">Xóa</a> -->
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
    <script>
         var a=document.querySelector(".phan-quyen .user").textContent.trim();
    var b=document.querySelectorAll("td a");
    if(a!="admin"){
      b.forEach(function(item) {
               item.addEventListener('click', function(event) {
                   event.preventDefault();
                   alert("Bạn không có quyền truy cập");
               });
           });
    }
    else if(a=="admin"){
        function confirmDelete(event, mamonhoc) {
            event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết
            if (confirm("Bạn có chắc chắn muốn xóa môn học này?")) {
                // Nếu người dùng đồng ý, chuyển hướng đến liên kết xóa
                window.location.href = "http://localhost/svdangkyhoc/Danhsachmonhoc/xoa/" + mamonhoc;
            }
        }
    }


   
    </script>
</body>

</html>
