<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thành viên</title>
</head>
<body>
<?php
//echo "<pre";
//print_r($dataId);
//?>
<div class="content">


    <div class="dangkythanhvien">
        <a href="index.php?controller=thanh-vien&action=list" class="list"> Danh sách thành viên</a>
        <h3>Sửa thành viên:</h3>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Tên thành viên:</td>
                    <td><input type="text" name="hoten" placeholder="Họ và tên" value="<?php echo $dataId['hoten']; ?>"></td>
                </tr>
                <tr>
                    <td>Năm sinh:</td>
                    <td><input type="text" name="namsinh" placeholder="Năm sinh" value="<?php echo  $dataId['namsinh']; ?>"></td>
                </tr>
                <tr>
                    <td>Quê quán:</td>
                    <td><input type="text" name="quequan" placeholder="Quê quán" value="<?php echo $dataId['quequan']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="update_user" value="Sửa">
                    </td>
                </tr>
            </table>
        </form>

    </div>
</div>
</body>
</html>