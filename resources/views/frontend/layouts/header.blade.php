@auth
    <div id="header-wrap">
        <div class="top-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="right-element" style="height: 50px">
                            @if(auth()->user()->role == 1)
                                <a href="/admin/dashboard" class="user-account for-buy"><i class="icon icon-user"></i><span>{{auth()->user()->first_name }}</span></a>
                            @else
                                <a href="#" class="user-account for-buy"><i class="icon icon-user"></i><span>{{auth()->user()->first_name }}</span></a>
                            @endif
                            <a href="/view-orders" class="cart for-buy"><i class="icon icon-clipboard"></i><span> Orders: {{auth()->user()->order_count}}</span></a>
                            <form action="/logout" method="post" style="display: inline-block">
                                @csrf
                                <button style="height: 38px">Log out</button>
                            </form>
                            <div class="action-menu">
                                <div class="search-bar">
                                    <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                                        <i class="icon icon-search"></i>
                                    </a>
                                    <form role="search" method="get" class="search-box">
                                        <input class="search-field text search-input" placeholder="Search" type="search">
                                    </form>
                                </div>
                            </div>
                        </div><!--top-right-->
                    </div>
                </div>
            </div>
        </div><!--top-content-->
    </div><!--header-wrap-->
@else
    <div id="header-wrap">
        <div class="top-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="right-element" style="height: 50px">
                            <a href="/login" class="user-account for-buy"><i class="icon icon-user"></i><span>User Login</span></a>
                            <a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0 $)</span></a>
                            <div class="action-menu">
                                <div class="search-bar">
                                    <a href="#" class="search-button search-toggle" data-selector="#header-wrap">
                                        <i class="icon icon-search"></i>
                                    </a>
                                    <form role="search" method="get" class="search-box">
                                        <input class="search-field text search-input" placeholder="Search" type="search">
                                    </form>
                                </div>
                            </div>
                        </div><!--top-right-->
                    </div>
                </div>
            </div>
        </div><!--top-content-->
    </div><!--header-wrap-->
@endauth
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <div class="main-logo">
                    <h4><a href="/" style=" font-size: larger; text-align: center; text-decoration: none;"><strong>Cinema Application</strong></a></h4>
                </div>
            </div>

            <div class="col-md-10">
                <nav id="navbar">
                    <div class="main-menu stellarnav">
                        <ul class="menu-list">
                            <li class="menu-item active"><a href="/" data-effect="Home">Home</a></li>
                            <li class="menu-item"><a href="#about" class="nav-link" data-effect="About">About</a></li>
                            <li class="menu-item has-sub">
                                <a href="#pages" class="nav-link" data-effect="Pages">Pages</a>
                                <ul>
                                    <li class="active"><a href="/">Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="shop.html">Our Store</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="#popular-movies" class="nav-link" data-effect="Shop">Shop</a></li>
                            <li class="menu-item"><a href="#latest-blog" class="nav-link" data-effect="Articles">Articles</a></li>
                            <li class="menu-item"><a href="#contact" class="nav-link" data-effect="Contact">Contact</a></li>
                        </ul>
                        <div class="hamburger">
                            <span class="bar"></span>
                            <span class="bar"></span>
                            <span class="bar"></span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
