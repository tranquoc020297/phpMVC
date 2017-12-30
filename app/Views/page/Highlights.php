<div class="marquee" style="text-align:center">
<h3>Sản Phẩm Xem Nhiều Nhất</h3>
</div>
<div class="container">
    <?php 
        $products = Product::mostView();
        $mangsp = array_chunk($products,2);

   
        foreach($mangsp as $sp){
         ?>
            <div class="row">
        <?php
            foreach($sp as $item){
        ?>
        <div class="col-6">
            <div class="row">
                <div class="col-md-6">
                    <a href="<?= route('page','detail',$item->MaSP) ?>">
                        <img src="source/img/product/<?= $item->MaLoaiSP?>/<?= $item->HinhSP ?>" width="90%" height="150px" alt="K load dc">
                    </a>
                </div>
                <div class="col-md-6">
                    <a href="<?= route('page','detail',$item->MaSP) ?>"><?= $item->TenSP ?></a>
                    <?= substr($item->MoTa,0,150). '...' ?>
                    <a href="<?= route('page','detail',$item->MaSP) ?>">xem thêm</a>
                    <p style="text-align:center">
                        <a href="javascript:" onclick="addCart(<?= $item->MaSP ?>)">
                            <button class="btn btn-outline-info" style="float:center">
                                Thêm<span class="fa fa-cart-arrow-down"></span>
                            </button>
                        </a>
                    </p>
                </div>
                
            </div>
            <div>&nbsp;</div>  
        </div>
            <?php } ?>  
        </div>
        <div style="height:10%">&nbsp;</div>
    <?php } ?>
    
    <div class="news" style="text-align:center">
    <h3>Sản Phẩm Mới Nhất</h3>
    </div>
    <div style="height:10%">&nbsp;</div>
    
    <?php 
        $products = Product::news();
        $mangsp = array_chunk($products,2);

   
        foreach($mangsp as $sp){
         ?>
            <div class="row">
        <?php
            foreach($sp as $item){
        ?>
        <div class="col-6">
            <div class="row">
                <div class="col-md-6">
                    <a href="<?= route('page','detail',$item->MaSP) ?>"> <img src="source/img/product/<?= $item->MaLoaiSP?>/<?= $item->HinhSP ?>" width="90%" height="150px" alt="K load dc"></a>
                </div>
                <div class="col-md-6">
                    <a href="<?= route('page','detail',$item->MaSP) ?>"><?= $item->TenSP ?></a>
                    <?= substr($item->MoTa,0,150). '...' ?>
                    <a href="<?= route('page','detail',$item->MaSP) ?>">xem thêm</a>
                    <p style="text-align:center">
                        <a href="javascript:" onclick="addCart(<?= $item->MaSP ?>)">
                            <button class="btn btn-outline-info" style="float:center">
                                Thêm<span class="fa fa-cart-arrow-down"></span>
                            </button>
                        </a>
                    </p>
                </div>
            </div>
            <div>&nbsp;</div>
        </div>
            <?php } ?>  
        </div>
        <div style="height:10%">&nbsp;</div>
    <?php } ?>

    <div class="news" style="text-align:center">
    <h3>Sản Phẩm Bán Nhiều Nhất</h3>
    </div>

    <?php 
        $products = Product::mostBuy();
        $mangsp = array_chunk($products,2);

   
        foreach($mangsp as $sp){
         ?>
            <div class="row">
        <?php
            foreach($sp as $item){
        ?>
        <div class="col-6">
            <div class="row">
                <div class="col-md-6">
                    <a href="<?= route('page','detail',$item->MaSP) ?>"> <img src="source/img/product/<?= $item->MaLoaiSP?>/<?= $item->HinhSP ?>" width="90%" height="150px" alt="K load dc"></a>
                </div>
                <div class="col-md-6">
                    <a href="<?= route('page','detail',$item->MaSP) ?>"><?= $item->TenSP ?></a>
                    <?= substr($item->MoTa,0,150).'...' ?>
                    <a href="<?= route('page','detail',$item->MaSP) ?>">xem thêm</a> 
                    <p style="text-align:center">
                        <a href="javascript:" onclick="addCart(<?= $item->MaSP ?>)">
                            <button class="btn btn-outline-info" style="float:center">
                                Thêm<span class="fa fa-cart-arrow-down"></span>
                            </button>
                        </a>
                    </p>
                </div>
            </div>
            <div>&nbsp;</div>
        </div>
            <?php } ?>  
        </div>
        <div style="height:10%">&nbsp;</div>
    <?php } ?>
  

</div>