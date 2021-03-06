<nav class="navbar navbar-expand-lg navbar-light bg-light" >
		<a class="navbar-brand" href="http://localhost:21212/phpMVC/"><i class="fa fa-home" aria-hidden="true"></i>Trang Chủ<span class="sr-only"></span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#">Liên Hệ</a>
        </li>
        
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Sản Phẩm
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<?php

						$types = ProductType::all();
						foreach($types as $item){
					?>
						<a class="dropdown-item" href="<?= route('page','type',$item->MaLoaiSP )?>"><?= $item->TenLoaiSP ?></a>
						
					
					<?php	
						}
					?>
					</div>
				
        </li>	
        
				<!-- <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Bảng Giá
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#"> 1-5 tỷ</a>
						<a class="dropdown-item" href="#"> 5-10 tỷ</a>
						<a class="dropdown-item" href="#"> 10-20 tỷ</a>
						<a class="dropdown-item" href="#"> 20-50 tỷ</a>
						<a class="dropdown-item" href="#"> Trên 50 tỷ</a>
					</div>
				</li> -->

			</ul>

			
	<ul class="navbar-nav my-auto">
    <li class="nav-item dropdown">
      <button class="btn btn-outline-info my-2 my-sm-0" id="navbarDropdownCart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span id="cartStatus" class="fa fa-shopping-cart">
          <?php if(Session::has('cart')): ?>
            (<?= Session::get('cart')->totalQty ?>)
          <?php else: echo "(0)" ?>
          <?php endif;?>
        </span>
        <i class="fa fa-chevron-down"></i>
      </button>
      <div class="dropdown-menu" aria-labelledby="navbarDropdownCart">
        <div id="cartBody">
        <?php if(Session::has('cart')): ?>
          <?php foreach(Session::get('cart')->items as $item): ?>
            <a class="dropdown-item" onclick="removeCartItem(<?= $item['item']->MaSP ?>)">
              <span><img width="50" src="source/img/product/<?= trim($item['item']->MaLoaiSP)?>/<?=trim($item['item']->HinhSP)?>" alt=""></span>
              <span><?= $item['item']->TenSP ?></span>
              <span><?= number_format($item['item']->GiaSP) ?></span>
              <span>x<?= $item['qty'] ?></span>
              <span class="badge badge-pill badge-warning"><i class="fa fa-times" aria-hidden="true"></i></span>
            </a>
          <?php endforeach; ?>
        <?php endif;?>
        </div>
        <?php if(Session::has('cart')): ?>
          <div class="dropdown-divider"></div>
          <div id="totalPrice" class="dropdown-item">Tổng: <span><?= number_format(Session::has('cart')?Session::get('cart')->totalPrice:0) ?></span></div>
          <div class="dropdown-divider"></div>
          <div id="removeAllCart" class="dropdown-item"><button class="btn btn-outline-warning">Xóa hết giỏ hàng</button></div>
          <div class="dropdown-divider"></div>
          <a href="<?= route('page','order') ?>" class="dropdown-item" id="orderCart">
            <button  class="btn btn-info">
              <span>
                Đặt hàng
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </span>
            </button>
          </a>
        <?php else: ?>
          <div style="display:none" class="dropdown-divider"></div>
          <div style="display:none" id="totalPrice" class="dropdown-item">Tổng: <span><?= number_format(Session::has('cart')?Session::get('cart')->totalPrice:0) ?></span></div>
          <div style="display:none" class="dropdown-divider"></div>
          <div style="display:none" id="removeAllCart" class="dropdown-item"><button class="btn btn-outline-warning">Xóa hết giỏ hàng</button></div>
          <div style="display:none" class="dropdown-divider"></div>
          <a style="display:none" href="<?= route('page','order') ?>" class="dropdown-item" id="orderCart">
            <button  class="btn btn-info">
              <span>
                Đặt hàng
                <i class="fa fa-angle-right" aria-hidden="true"></i>
              </span>
            </button>
          </a>
        <?php endif; ?>
      </div>
    </li>
    <li class="nav-item">&nbsp;</li>
    <li class="nav-item">
      <form class="form-inline my-2 my-lg-0" action="<?= route('page','search')?>" method="GET">
        <input class="form-control mr-sm-2" name="key" type="search" placeholder="Search" aria-label="Search">
        <input class="btn btn-outline-info my-2 my-sm-0" type="submit" value="Search">
      </form>
    </li>
    <li class="nav-item">&nbsp;</li>
    <?php if(Session::has('auth')): ?>
    <li class="nav-item dropdown">
        <button class="btn btn-outline-info my-2 my-sm-0" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span>
            <?= Session::get('auth')->displayName ?>
              <i class="fa fa-chevron-down"></i>
          </span>
        </button>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?= route('page','profile') ?>">Thông tin cá nhân</a>
          <?php if(Session::get('auth')->role == 1): ?>
          <a class="dropdown-item" href="<?= route('admin','index') ?>">Trang quản trị</a>
          <?php endif; ?>
          <a class="dropdown-item" href="<?= route('page','payhistory') ?>">Lịch sử giao dịch</a>
          <a class="dropdown-item" href="<?= route('auth','logout') ?>">Đăng xuất</a>
        </div>
    </li>
    <?php else: ?>
      <a href="<?= route('auth','login') ?>"><button class="btn btn-outline-info my-2 my-sm-0"> Đăng nhập</button></a>
    <?php endif; ?>
 	 </ul>
</div>
</nav>