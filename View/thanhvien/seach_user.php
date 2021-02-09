<div class="timkiem">
    <form action="" method="GET">
        <table>
            <tr>
                <input type="hidden" name="controller" value="thanh-vien">
                <td><input type="text" name="tukhoa" placeholder="nhập từ khóa"></td>
                <td><input type="submit" value="Tìm kiếm"></td>
            </tr>
        </table>
        <input type="hidden" name="action" value="tim-kiem">

    </form>
</div>

<div class="danhsach">
    <h3>Danh sách thành viên</h3>
    <table border="1px">
        <thead>
        <tr>
            <th>STT</th>
            <th>tên</th>
            <th>Năm sinh</th>
            <th>Quê quán</th>
            <th colspan="2">hành động</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php
            $stt = 1;
            foreach ($data_search  as $value){?>
            <td><?php echo $stt +1; ?></td>
            <td><?php echo $value["hoten"]; ?></td>
            <td><?php echo $value["namsinh"]; ?></td>
            <td><?php echo $value["quequan"]; ?></td>
            <td>
                <a onclick="return confirm('bạn có chắc chắc muốn sửa không?')" href="index.php?controller=thanh-vien&action=edit&id=<?php echo $value["id"]; ?>">EDIT</a>
            </td>
            <td><a onclick="return confirm('bạn có chắc chắc muốn xóa không?')" href="index.php?controller=thanh-vien&action=delete&id=<?php echo $value["id"]; ?>" type="Xóa">DELETE</a></td>


        </tr>
        <?php
        $stt++;
        }
        ?>
        </tbody>
    </table>
</div>


