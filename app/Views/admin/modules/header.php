<header class="header">
  <nav class="navbar">
    <div class="container-fluid">
      <div class="navbar-holder d-flex align-items-center justify-content-between">
        <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
            <div class="brand-text d-none d-md-inline-block"></div></a></div>
        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
          <li class="nav-item dropdown"> <a class="navbar-brand" href="http://localhost:21212/phpMVC/"><i class="fa fa-home" aria-hidden="true"></i>Trang Chủ<span class="sr-only"></span></a></a>
            <ul aria-labelledby="notifications" class="dropdown-menu">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </li>
          <li class="nav-item dropdown"> </a>
            <ul aria-labelledby="notifications" class="dropdown-menu">
              <li></li>
              <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                  </li>
              <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                
              <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="<?= route('auth','logout') ?>" class="nav-link logout"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>