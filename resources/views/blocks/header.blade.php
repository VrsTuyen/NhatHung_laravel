<header>
    <div class="header">
     <div class="grid">
      <div class="header-contact">
        <div class="header-contact-logo">
            <a href="./">
                <img src="https://pic.trangvangvietnam.com/395716251/LOGO.jpg" alt=""></a>
        </div>
        <div class="header-contact-company">
            <h1>Công TY TNHH HÀNG HẢI NHẬT HÙNG</h1>
        </div>
        <div class="header-contact-info">
            <a href="tel:0973 128 268" class="header-contact-info-link">
                <div class="header-contact-info-link-icon">
                    <!-- icon here -->
                    <img src="http://nhathungmaritime.com/images/phone-ico.png" alt="">
                </div>
                <div class="header-contact-info-link-phone-number">
                    <p>Hotline hỗ trợ</p>
                    <p>0973 128 268</p>
                </div>
            </a>
        </div>
        </div>
      </div>
      <div class="header-navigation">
        <div class="grid">
         <div class="header-navigation-grid">

            <div class="header-navigation-mobile-menu">
                <div class="header-navigation-mobile-menu-icon">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>

              <div class="header-navigation-menu">
            <ul class="header-navigation-menu-list">
                <li class="header-navigation-menu-item @php if($title === 'Home') echo 'active' @endphp">
                    <a href="" class="header-navigation-menu-item-link">trang chủ</a>
                </li>
                <li class="header-navigation-menu-item">
                    <a href="" class="header-navigation-menu-item-link">giới thiệu</a>
                </li>
                <li class="header-navigation-menu-item">
                    <a class="header-navigation-menu-item-link">dịch vụ</a>
                        <i class="icon-for-submenu fa-solid fa-chevron-down"></i>
                        <ul class="header-navigation-submenu">
                            <li class="header-navigation-submenu-item"><a href="#">chằng buộc hàng hóa</a></li>
                            <li class="header-navigation-submenu-item"><a href="#">Đóng kiện hàng</a></li>
                            <li class="header-navigation-submenu-item"><a href="#">Di dời & lắp đặt máy móc</a></li>
                            <li class="header-navigation-submenu-item"><a href="#">Dóng & rút hàng Container</a></li>
                            <li class="header-navigation-submenu-item"><a href="#">Cung cấp vật tư</a></li>
                            <li class="header-navigation-submenu-item"><a href="#">Vận chuyển hàng hóa</a></li>
                        </ul>
                </li>
                <li class="header-navigation-menu-item">
                    <a class="header-navigation-menu-item-link">bảng giá</a>
                    <i class="icon-for-submenu fa-solid fa-chevron-down"></i>
                    <ul class="header-navigation-submenu">
                        <li class="header-navigation-submenu-item"><a href="">bảng giá vận chuyển</a></li>
                        <li class="header-navigation-submenu-item"><a href="">bảng giá vật tư</a></li>
                        <li class="header-navigation-submenu-item"><a href="">bảng giá thi công</a></li>
                    </ul>
                </li>
                <li class="header-navigation-menu-item">
                    <a href="" class="header-navigation-menu-item-link">dự án</a>
                </li>
                <li class="header-navigation-menu-item">
                    <a href="" class="header-navigation-menu-item-link">tin tức sự kiện</a>
                </li>
                <li class="header-navigation-menu-item">
                    <a href="" class="header-navigation-menu-item-link">tuyển dụng</a>
                </li>
                <li class="header-navigation-menu-item">
                    <a href="" class="header-navigation-menu-item-link">liên hệ</a>
                </li>
            </ul>
          </div>
          <div class="header-navigation-search">
            <form action="" method="post">
              <div class="header-navigation-search-container">
                  <div class="header-navigation-search-wrap">
                      <input required type="search" name="input-search" placeholder="Nhập từ khóa cần tìm...">
                  </div>
                    <!-- icon -->
                  <button type="submit" class="header-navigation-search-wrap-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </button>
                </div>
                @csrf
              </form>
          </div>
         </div>
        </div>
      <!-- grid -->
       </div>
    </div>

  </header>