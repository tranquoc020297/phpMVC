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
                    <a href="page/detail/<?= $item->MaSP ?>"> <img src="app/public/source/img/product/<?= $item->MaLoaiSP?>/<?= $item->HinhSP ?>" width="90%" height="150px" alt="K load dc"></a>
                </div>
                <div class="col-md-6">
                <a href="page/detail/<?= $item->MaSP ?>"><?= $item->TenSP ?></a>
                <?= substr($item->MoTa,0,150). '...' ?>
                <a href="page/detail/<?= $item->MaSP ?>">xem thêm</a> 
                </div>
                
            </div>
            <div>&nbsp;</div>
            <p> <a href=""><button class="btn btn-outline-info"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i>Đặt Hàng</span></button></a></p>
   
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
                    <a href="page/detail/<?= $item->MaSP ?>"> <img src="app/public/source/img/product/<?= $item->MaLoaiSP?>/<?= $item->HinhSP ?>" width="90%" height="150px" alt="K load dc"></a>
                </div>
                <div class="col-md-6">
                <a href="page/detail/<?= $item->MaSP ?>"><?= $item->TenSP ?></a>
                <?= substr($item->MoTa,0,150). '...' ?>
                <a href="page/detail/<?= $item->MaSP ?>">xem thêm</a> 
                </div>
                
            </div>
            <div>&nbsp;</div>
            <p> <a href=""><button class="btn btn-outline-info"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i>Đặt Hàng</span></button></a></p>
        </div>
            <?php } ?>  
        </div>
        <div style="height:10%">&nbsp;</div>
    <?php } ?>

    <div class="news" style="text-align:center">
    <h3>Sản Phẩm Bán Nhiều Nhất</h3>
    </div>

    <div style="height:10%">&nbsp;</div>
    
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
                    <a href="page/detail/<?= $item->MaSP ?>"> <img src="app/public/source/img/product/<?= $item->MaLoaiSP?>/<?= $item->HinhSP ?>" width="90%" height="150px" alt="K load dc"></a>
                </div>
                <div class="col-md-6">
                <a href="page/detail/<?= $item->MaSP ?>"><?= $item->TenSP ?></a>
                <?= substr($item->MoTa,0,150). '...' ?>
                <a href="page/detail/<?= $item->MaSP ?>">xem thêm</a> 
                
                </div>
                
            </div>
            <div>&nbsp;</div>
            <p> <a href=""><button class="btn btn-outline-info"><span><i class="fa fa-shopping-cart" aria-hidden="true"></i>Đặt Hàng</span></button></a> </p>
           
        </div>
            <?php } ?>  
        </div>
        <div style="height:10%">&nbsp;</div>
    <?php } ?>
  

</div>