
<div class="container" style="padding:5px" >
<div class="row">
<?php
    if(isset($_GET["trang"])){
        $trang=$_GET["trang"];
        settype($trang,["trang"]);

    }
    else{
            $trang=1;
    }
    foreach($this->types as $item):
?>
           
            <div class="col-6">
            <div>&nbsp;</div>
            <div class="row">
                <div class="col-6">
                    <a href="<?= route('page','detail',$item->MaSP) ?>">
                        <img src="source/img/product/<?= $item->MaLoaiSP ?>/<?= $item->HinhSP ?>" width="90%" alt="K load dc">
                    </a>
                </div>
                <div class="col-6">
                    <?= substr($item->MoTa,0,150). '...' ?>
                    <a href="<?= route('page','detail',$item->MaSP) ?>">Xem Chi Tiết
                    </a>
                    <p style="text-align:center">
                        <a href="javascript:" onclick="addCart(<?= $item->MaSP ?>)">
                            <button class="btn btn-outline-info" style="float:center">
                                Thêm<span class="fa fa-cart-arrow-down"></span>
                            </button>
                        </a>
                    </p>
                </div>
                <div style="height:10%">&nbsp;</div>
            </div>
            </div>
 <?php endforeach; ?>
 </div>

</div>
<center>
<?php
    $item=$this->types[0];
    $sum=$this->phantrang;
    $sumtong=count($sum);
    $sumtrang=ceil($sumtong/4);
    for($i=1; $i<=$sumtrang;$i++):
?>
    
    <a href="<?= route('page','type',$item->MaLoaiSP)?>&trang=<?= $i ?>"><?= $i ?></a>

<?php endfor; ?>
   
</center>
