<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="margin:5% 0">
    <h1 class="gallery-title">Tìm Kiếm</h1>
</div>
<div id="resultSearch"><h3 class="alert alert-success"><?= count($this->items) ?> Kết quả</h3></div>
<div class="row" style="margin:5% 0" id="searchBody">
    <?php foreach($this->items as $item): ?>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project wow animated fadeInLeft"  style="background-image:url(../app/public/source/img/product/<?= $item->TenSP) ?>/<?= $item->HinhSP ?>)">
        <div class="project-hover" id="sp<?=$item->MaSP ?>">
            <h2><?= $item->TenSP ?></h2>
            <h4><span><?= $item->GiaSP ?><i class="fa fa-diamond" aria-hidden="true"></i></span></h4>
            <hr />
            <p><?= substr($item->MoTa,  0, 90) ?>..</p>
            <a href="Page/Detail/<?= $item->MaSP ?>">Chi tiết</a>
            <a href="javascript:;" onclick="addCart(<?= $item->MaSP ?>)"><span class="fa fa-cart-arrow-down"></span></a>
        </div>
    </div>
    <?php endforeach; ?>
    
    <div class="clearfix"></div>
    </div>
    <!-- load ajax -->
    <!-- <div style="text-align:center;margin-bottom: 5%">
    <button id="ajax-load" class="btn btn-outline-info">More</button>
    </div> -->


