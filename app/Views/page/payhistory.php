<div class="container">
    <div style="margin-top: 5%; text-align:center">
        <h1>Lịch sử thanh toán</h1>
    </div>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Mã Hóa Đơn</th>
                <th>Ngày Lập</th>
                <th>Tổng Thành Tiền</th>
                <th>Mã Tài Khoản</th>
                <th>Tình Trạng</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach(Bill::getByUserID(Session::get('auth')->id) as $item):?>
            <tr>
                <th scope="row"><?= $item->MaHD ?></th>
                <td><?= $item->NgayLap ?></td>
                <td><?= number_format($item->TongTien) ?></td>
                <td><?= $item->MaTK ?></td>
                <td>
                <?= $item->TenTinhTrang ?>
                </td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>