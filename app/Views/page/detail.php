

<div class="container">
    <p>
        <a href="javascript:" onclick="addCart(<?= $this->item->MaSP ?>)">
            <button onclick="addCart(<?= $item->MaSP ?>)" class="btn btn-outline-info" style="float:right">
                Thêm<span class="fa fa-cart-arrow-down"></span>
            </button>
        </a>
    </p>
    <p style="color:red"> <?= $this->item->TenSP ?></p>
    <p style="color:red">Giá: <?= number_format($this->item->GiaSP) ?>&nbsp;VNĐ</p>
    <p> <?= $this->item->MoTa ?></p>
    <p> Lượt Xem <?= $this->item->SoLuotXem ?></p>
    <p> Số Lượng Đã Bán <?= $this->item->SoLuongBan?></p>
    <p><img src="source/img/product/<?= $this->item->MaLoaiSP ?>/<?= $this->item->HinhSP ?>" width="90%" alt="K load dc"></p>
</div>

<div class="container">
    <div class="clearfix" style="margin:5% 0"></div>
    <h3 style="text-align:center">Sản Phẩm Cùng Loại</h3>
    <div class="row">
    <?php foreach($this->sameItems as $item): ?>
        <div class="col-sm-2">
            <a  href="<?= route('page','detail',$item->MaSP) ?>">
                <img src="source/img/product/<?= $item->MaLoaiSP ?>/<?= $item->HinhSP ?>" alt="" height="80" width="170">
            </a>
            <p><h5><?= $item->TenSP ?></h5></p>
            <p><h6><?= $item->GiaSP ?></h6></p>
            <a class="btn btn-info" href="<?= route('page','detail',$item->MaSP) ?>">Chi tiết <i class="fa fa-chevron-right"></i></a>
            <a class="btn btn-info" onclick="addCart(<?= $item->MaSP ?>)" href="javascipt:;"><i class="fa fa-shopping-cart"></i></a>
            <div class="clearfix" style="margin:5% 0"></div>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<div class="container">
    <div class="clearfix" style="margin:5% 0"></div>
    <h3 style="text-align:center">Sản Phẩm Khác Loại</h3>
    <div class="row">
    <?php foreach($this->otherItems as $item): ?>
        <div class="col-sm-2">
            <a  href="<?= route('page','detail',$item->MaSP) ?>">
                <img src="source/img/product/<?= $item->MaLoaiSP ?>/<?= $item->HinhSP ?>" alt="" height="80" width="170">
            </a>
            <p><h5><?= $item->TenSP ?></h5></p>
            <p><h6><?= $item->GiaSP ?></h6></p>
            <a class="btn btn-info" href="<?= route('page','detail',$item->MaSP) ?>">Chi tiết <i class="fa fa-chevron-right"></i></a>
            <a class="btn btn-info" onclick="addCart(<?= $item->MaSP ?>)" href="javascipt:;"><i class="fa fa-shopping-cart"></i></a>
            <div class="clearfix" style="margin:5% 0"></div>
        </div>
    <?php endforeach; ?>
    </div>
</div>