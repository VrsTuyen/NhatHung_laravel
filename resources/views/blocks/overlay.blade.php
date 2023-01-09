<div class="overlay-mobile-menu">
    <div class="overlay-mobile-menu-body">

        <div class="overlay-mobile-menu-body-contact">
            <div class="header-contact-logo">
                <a href="./">
                    <img src="https://pic.trangvangvietnam.com/395716251/LOGO.jpg" alt=""></a>
            </div>
            <div class="header-contact-company">
                <h1>Công TY TNHH HÀNG HẢI NHẬT HÙNG</h1>
            </div>
        </div>
        <ul class="overlay-mobile-menu-body-list">
            
            
            <li class="overlay-mobile-menu-body-list-item">
                <a href="" class="overlay-mobile-menu-body-list-item-link">Trang Chủ</a>    
            </li>

            
            <li class="overlay-mobile-menu-body-list-item">
                <a href="" class="overlay-mobile-menu-body-list-item-link">Giới thiệu</a>    
            </li>

            
            <li class="overlay-mobile-menu-body-list-item">
                <a class="overlay-mobile-menu-body-list-item-link">Dịch vụ</a>    
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

            
            <li class="overlay-mobile-menu-body-list-item">
                <a class="overlay-mobile-menu-body-list-item-link">Bảng giá</a>   
                <i class="icon-for-submenu fa-solid fa-chevron-down"></i>
                <ul class="header-navigation-submenu">
                    <li class="header-navigation-submenu-item"><a href="">bảng giá vận chuyển</a></li>
                    <li class="header-navigation-submenu-item"><a href="">bảng giá vật tư</a></li>
                    <li class="header-navigation-submenu-item"><a href="">bảng giá thi công</a></li>
                </ul>
            </li>

            
            <li class="overlay-mobile-menu-body-list-item">
                <a href="" class="overlay-mobile-menu-body-list-item-link">Dự án</a>    
            </li>

            
            <li class="overlay-mobile-menu-body-list-item">
                <a href="" class="overlay-mobile-menu-body-list-item-link">Tin tức sự kiện</a>    
            </li>

            <li class="overlay-mobile-menu-body-list-item">
                <a href="" class="overlay-mobile-menu-body-list-item-link">Tuyển dụng</a>    
            </li>

            <li class="overlay-mobile-menu-body-list-item">
                <a href="" class="overlay-mobile-menu-body-list-item-link">Liên hệ</a>    
            </li>
        </ul>


        <div class="overlay-mobile-menu-close">
            <i class="fa-solid fa-x"></i>
        </div>
    </div>
    
</div>
<script>
    document.querySelector('.header-navigation-mobile-menu').addEventListener('click', function() {
    toggleMenu()
    } )

    document.querySelector('.overlay-mobile-menu-close').addEventListener('click', function() {
        toggleMenu()
    })

    function toggleMenu(){
        document.querySelector('.overlay-mobile-menu').classList.toggle('active')
    }
</script>