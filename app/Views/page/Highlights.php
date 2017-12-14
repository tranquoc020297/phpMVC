<div class="marquee" style="text-align:center">
<p style="font-size:20pt">Sản Phẩm Nổi Bật</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <a href="">
                <img src="app/public/source/img/product/lamborghini/6.jpg" width="200px"height="140px" >
                <p>Lamborghini AVENTADOR S 2017</p>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="">
                <img src="app/public/source/img/product/lexus/3.jpg"width="200px" height="140px">
                <p>lexus ES350</p>
            </a>
            
        </div>
        <div class="col-sm-3">
            <a href="">
                <img src="app/public/source/img/product/ferrari/1.jpg"width="200px"height="140px" >
                <p>Ferrari LAFERRARI</p>
            </a>
        </div>
        <div class="col-sm-3">
            <a href="">
                <img src="app/public/source/img/product/audi/10.jpg" width="200px"height="140px">
                <p>Audi A8</p>
            </a>
        </div>
    </div>
    
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
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <a href=""><img src="app/public/source/img/product/lamborghini/1.jpg" width="200px" height="150" alt=""></a>
                </div>
                <div class="col-md-6">
                <a href="page/detail/<?= $item->MaSP ?>"><?= $item->TenSP ?></a>
                <?= substr($item->MoTa,0,120). '...' ?>
                <a href="page/detail/<?= $item->MaSP ?>">xem thêm</a> 
                </div>
            </div>
        </div>
            <?php } ?>  
        </div>
        <div style="height:10%">&nbsp;</div>
    <?php } ?>
</div>