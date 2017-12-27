

<div class="container">
<p><a href="javascript:" onclick="addCart(<?= $item->MaSP ?>)"><button class="btn btn-outline-info" style="float:right">Thêm<span class="fa fa-cart-arrow-down"></span></button></a></p>
<p style="color:red"> <?= $this->item->TenSP ?></p>
<p style="color:red">Giá: <?= $this->item->GiaSP ?>&nbsp;VNĐ</p>
<p> <?= $this->item->MoTa ?></p>
<p> Lượt Xem <?= $this->item->SoLuotXem ?></p>
<p> Số Lượng Đã Bán <?= $this->item->SoLuongBan?></p>
<p><img src="../../app/public/source/img/product/<?= $this->item->MaLoaiSP ?>/<?= $this->item->HinhSP ?>" width="90%" alt="K load dc"></p>
</div>