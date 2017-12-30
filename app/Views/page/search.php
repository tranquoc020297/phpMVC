<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="margin:5% 0">
    <h1 class="gallery-title">Tìm Kiếm</h1>
</div>
<div id="resultSearch"><h3 class="alert alert-success"><?= count($this->items) ?> Kết quả</h3></div>
<div class="row" style="margin:5% 0" id="searchBody">
    <?php foreach($this->items as $item): ?>
    <div class="col-6">
        <div class="row">
            <div class="col-md-6">
                <a href="<?= route('page','detail',$item->MaSP) ?>"> <img src="source/img/product/<?= $item->MaLoaiSP?>/<?= $item->HinhSP ?>" width="90%" height="150px" alt="K load dc"></a>
            </div>
            <div class="col-md-6">
                <a href="<?= route('page','detail',$item->MaSP) ?>"><?= $item->TenSP ?></a>
                <?= substr($item->MoTa,0,150). '...' ?>
                <a href="<?= route('page','detail',$item->MaSP) ?>">xem thêm</a> 
            </div>        
        </div>
        <div>&nbsp;</div>
        <p style="text-algin:center">
            <a href="javascript:" onclick="addCart(<?= $item->MaSP ?>)">
                <button class="btn btn-outline-info" style="float:center">
                    Thêm<span class="fa fa-cart-arrow-down"></span>
                </button>
            </a>
        </p>
    </div>
    <?php endforeach; ?>
    
    <div class="clearfix"></div>
    </div>
    <!-- load ajax -->
    <!-- <div style="text-align:center;margin-bottom: 5%">
    <button id="ajax-load" class="btn btn-outline-info">More</button>
    </div> -->


