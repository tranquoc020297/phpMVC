
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
                    <a href="../../page/detail/<?= $item->MaSP ?>">
                    <img src="../../app/public/source/img/product/<?= $item->MaLoaiSP ?>/<?= $item->HinhSP ?>" width="90%" alt="K load dc">
                    </a>
                </div>
                <div class="col-6">
                    <?= substr($item->MoTa,0,150). '...' ?>
                    <a href="../../page/detail/<?= $item->MaSP ?>">Xem Chi Tiết
                    </a>
                </div>
                <div style="height:10%">&nbsp;</div>
            </div>
            </div>
 <?php endforeach; ?>
 </div>

</div>
<center>
<?php
    $item=$this->types;
    $sum=$this->phantrang;
    $sumtong=count($sum);
    $sumtrang=ceil($sumtong/4);
    for($i=1; $i<=$sumtrang;$i++){
?>
    
    <a href="../../phpMVC/page/type/<?=$item->MaLoaiSP?>&<?= $i ?>"><?= $i ?></a>

<?php
   
    }
?>
   
</center>
