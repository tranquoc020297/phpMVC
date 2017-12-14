
<section class="charts">
        <div class="container-fluid">
          <header> 
            <h1 class="h3">Bảng Thống Kê</h1>
          </header>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Sản Phẩm</h2>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Hình</th>
                        <th>Mô Tả</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach(Product::all(10) as $item):?>
                      <tr>
                        <th scope="row"><?= $item->MaSP ?></th>
                        <td><?= $item->TenSP ?></td>
                        <td><?= $item->GiaSP ?></td>
                        <td><?= $item->HinhSP ?></td>
                        <td><?= substr($item->MoTa,0,50)?>..</td>
                      </tr>
                    <?php endforeach ?>
                    <tr>
                        <th scope="row">..</th>
                        <td>..</td>
                        <td>..</td>
                        <td>..</td>
                        <td>..</td>
                      </tr>
                    </tbody>
                  </table>
                  <div style="text-align:center">
                    <a href="products"><button class="btn btn-outline-info btn-sm">Xem Thêm</button></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Loại Sản Phẩm</h2>
                </div>
                <div class="card-body">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Tên</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach(ProductType::all() as $item):?>
                        <tr>
                        <th scope="row"><?= $item->MaLoaiSP ?></th>
                        <td><?= $item->TenLoaiSP ?></td>
                        </tr>
                    <?php endforeach ?>
                    </tbody>
                  </table>
                  <div style="text-align:center">
                    <a href="types"><button class="btn btn-outline-info btn-sm">Xem Thêm</button></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Hãng Sản Xuất</h2>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-sm">
                      <thead>
                          <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Logo</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php foreach(Factory::all() as $item):?>
                          <tr>
                              <th scope="row"><?= $item->MaHangSX ?></th>
                              <td><?= $item->TenHangSX ?></td>
                              <td><?= $item->HinhHangSX ?></td>
                          </tr>
                      <?php endforeach ?>
                      </tbody>
                  </table>
                  <div style="text-align:center">
                    <a href="factories"><button class="btn btn-outline-info btn-sm">Xem Thêm</button></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h2 class="h5 display">Striped table with hover effect</h2>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                     
                    </tbody>
                  </table>
                  <div style="text-align:center">
                    <a href="#"><button class="btn btn-outline-info btn-sm">Xem Thêm</button></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
