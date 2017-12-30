<div style="margin: 5% 0"></div>
<form action="#" class="form-group" >
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Đặt Hàng</h2>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for="name">Họ tên</label>
                </div>
                <div class="col-md-9">
                    <input class="form-control" type="text" id="name" name="name" placeholder="Họ tên" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for="name">Email</label>
                </div>
                <div class="col-md-9">
                    <input class="form-control" type="email" id="email" name="email" placeholder="email" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for="gioitinh">Giới tính</label>
                </div>
                <div class="col-md-9 row">
                    <div class="col-md-6 row">
                        <label class="col-md-6" for="nam">Nam</label>
                        <input class="col-md-6 radio" type="radio" name="gioitinh" id="nam">
                    </div>
                    <div class="col-md-6 row">
                        <label class="col-md-6" for="nam">Nữ</label>
                        <input class="col-md-6 radio" type="radio" name="gioitinh" id="nu">
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for="name">Địa chỉ</label>
                </div>
                <div class="col-md-9">
                    <input class="form-control" type="text" id="diachi" name="diachi" placeholder="địa chỉ" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for="name">Điện thoại</label>
                </div>
                <div class="col-md-9">
                    <input class="form-control" type="text" id="dienthoai" name="dienthoai" placeholder="điện thoại" required>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <label for="name">Ghi chú</label>
                </div>
                <div class="col-md-9">
                    <textarea class="form-control" id="notes" name="note" placeholder="Ghi chú"></textarea>
                </div>
            </div>
            <input type="submit" value="Đặt Hàng" class="btn btn-info">
        </div>
        <div class="col-md-6">
            <div class="container">
                <h2>Chi Tiết Đơn Hàng</h2>
                <div class="row">
                    <?php
                        if(Session::has('cart')):
                            foreach(Session::get('cart')->items as $item):
                    ?>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <a href="<?= route('page','detail',$item['item']->MaSP) ?>" target="_blank">
                                <img src="source/img/product/<?= trim($item['item']->MaLoaiSP)?>/<?=trim($item['item']->HinhSP)?>" alt="Không có" style="width:100%;height:100px;">
                                <div class="caption">
                                  <span><?= $item['item']->TenSP ?></span>
                                  <br>
                                  <span><?= $item['item']->GiaSP ?></span>
                                  <br>
                                  <span>Số lượng: <?= $item['qty'] ?></span>
                                  <hr>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
                <h3>Tổng Tiền: <?= Session::has('cart')?Session::get('cart')->totalPrice:0 ?></h3>
            </div>
        </div>
    </div>
</div>
</form>
<div style="margin: 5% 0"></div>