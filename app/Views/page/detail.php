
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">
<p><button class="btn btn-outline-info" style="float:right"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i>Đặt Hàng</span></button></p>
<p style="color:red"> <?= $this->item->TenSP ?></p>
<p style="color:red">Giá: <?= $this->item->GiaSP ?>&nbsp;VNĐ</p>
<p> <?= $this->item->MoTa ?></p>
<p><img src="../../app/public/source/img/product/<?= $this->type->MaLoaiSP ?>/<?= $this->item->HinhSP ?>" width="90%" alt="K load dc"></p>
</div>