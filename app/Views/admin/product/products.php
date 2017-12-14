
<div class="container">
    <h2 style="text-align:center">Danh sách Sản Phẩm</h2>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <?php include('add.php') ?>
            <table class="table table-bordered table-hover table-responsive">
                <tr>
                    <th>ID</th>
                    <th>Tiêu Đề</th>
                    <th>Loại</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>
                </tr>
                <?php foreach(Product::news() as $item) { ?>
                <tr>
                    <td><?= $item->MaSP ?></td>
                    <td><?= $item->TenSP ?></td>
                    <td><?= $item->MaLoaiSP ?></td>
                    <td><?= $item->GiaSP ?></td>
                    <td><?= $item->HinhSP ?></td>
                    <td><a href="dashdoard.php?show_product&id=<?= $item->MaSP ?>">Xem</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
