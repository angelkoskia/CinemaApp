<!--APP-SIDEBAR-->
<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="/admin/dashboard">
            <img src="/backend_assets/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
            <img src="/backend_assets/assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
            <img src="/backend_assets/assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
            <img src="/backend_assets/assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
        </a><!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3>Main</h3></li>
        <li class="slide">
            <a class="side-menu__item"  data-bs-toggle="slide" href="/admin/dashboard"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
        <br>
        <li class="slide">
            <a class="side-menu__item"  data-bs-toggle="slide"  href="{{ url('/admin/users') }}"><i class="side-menu__icon fe fe-user"></i><span class="side-menu__label">Users</span></a>
        </li>
        <br>
        <li class="slide">
            <a class="side-menu__item"  data-bs-toggle="slide"  href="{{ url('/admin/movies') }}"><i class="side-menu__icon fe fe-film"></i><span class="side-menu__label">View Movies</span></a>
        </li>
        <br>
        <li class="slide">
            <a class="side-menu__item"  data-bs-toggle="slide"  href="{{ url('/admin/orders') }}"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">View Orders</span></a>
        </li>
        <br>
        <li class="slide">
            <a class="side-menu__item"  data-bs-toggle="slide"  href="{{ url('/admin/slider') }}"><i class="side-menu__icon fe fe-film"></i><span class="side-menu__label">Featured Movies</span></a>
        </li>
        <br>


    </ul>
</aside>
<!--/APP-SIDEBAR-->
