<div class="c-topbar">
    <div class="c-shop-topbar-offer c-theme-bg">
        <div class="container">
            <h3 class="c-shop-topbar-offer-title c-font-white c-font-uppercase c-font-14 c-font-thin c-center">
                New Collection Sale Up to 70% Off. Use code 'JANGO70'.
                <a href="#" class="c-font-bold c-font-dark c-font-white-hover">Shop now!</a>
            </h3>
            <a href="#" class="c-shop-topbar-close c-font-dark c-font-white-hover"><i class="fa fa-close"></i></a>
        </div>
    </div>
    <div class="container">
        <nav class="c-top-menu">
            <ul class="c-links c-theme-ul">
                <li><a href="{{'/wishlist'}}" class="c-font-dark c-font-uppercase c-font-bold"><i class="fa fa-heart-o"></i> Wishlist</a></li>
                <li class="c-divider"></li>
                <li><a href="#" class="c-font-uppercase c-font-bold c-font-dark">Support</a></li>
                <li >
                    @if (Route::has('login'))
                        <div class="top-right links">

                            @if (Auth::check() && Auth::user()->role_id==1)
                                <a href="{{ url('/home') }}"><b>{{Auth::user()->name}}</b></a>

                            @elseif(Auth::check() && Auth::user()->role_id==2)
                                <a href="{{ url('/home') }}"><b>{{Auth::user()->name}}</b></a>
                            @else
                                <a href="{{ route('login') }}"><b>Login | </b></a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"><b> Register</b></a>
                            @endif

                    @endif
                        </div>
                    @endif
                </li>
            </ul>
            <ul class="c-ext hide c-theme-ul">
                <li class="c-search hide">
                    <!-- BEGIN: QUICK SEARCH -->
                    <form action="#">
                        <input type="text" name="query" placeholder="search..." value="" class="form-control" autocomplete="off">
                        <i class="fa fa-search"></i>
                    </form>
                    <!-- END: QUICK SEARCH -->
                </li>
            </ul>
        </nav>
        <div class="c-brand">
            <a href="{{'/'}}" class="c-logo">
                <img src="/img/hf.gif" alt="Hygienic Food" class="c-desktop-logo">
            </a>
            <button class="c-topbar-toggler" type="button">
                <i class="fa fa-ellipsis-v"></i>
            </button>
            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                <span class="c-line"></span>
                <span class="c-line"></span>
                <span class="c-line"></span>
            </button>
            <button class="c-search-toggler" type="button">
                <i class="fa fa-search"></i>
            </button>
            <button class="c-cart-toggler" type="button">
                <i class="icon-handbag"></i> <span class="c-cart-number c-theme-bg">2</span>
            </button>
        </div>
    </div>
</div>
<div class="c-navbar">
    <div class="container">
        <!-- BEGIN: BRAND -->
        <div class="c-navbar-wrapper clearfix">
            <!-- END: BRAND -->
            <!-- BEGIN: QUICK SEARCH -->
            <form class="c-quick-search" action="#">
                <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                <span class="c-theme-link">&times;</span>
            </form>
            <!-- END: QUICK SEARCH -->
            <!-- BEGIN: HOR NAV -->
            <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU-SHOP -->
            <!-- BEGIN: SHOP MEGA MENU -->
            <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
            <nav class="c-mega-menu c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                <ul class="nav navbar-nav c-theme-nav">
                    <li class="c-active">
                        <a href="{{'/'}}" class="c-link dropdown-toggle">Home
                            <span class="c-arrow c-toggler"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="c-link dropdown-toggle">Shop
                            <span class="c-arrow c-toggler"></span>
                        </a>
                        <div class="dropdown-menu c-menu-type-mega c-menu-type-fullwidth" style="min-width: auto">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="dropdown-menu c-menu-type-inline">
                                                <li>
                                                    <h3>Accessories</h3>
                                                </li>
                                                <li>
                                                    <a href="{{'/products'}}">Watches</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Mens Belts</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">Mens Ties</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>



                            <a href="{{'/blog'}}" class="c-link dropdown-toggle">Blogs </a>

                            <span class="c-arrow c-toggler"></span>

                    </li>
                    <li>
                        <a href="javascript:;" class="c-link dropdown-toggle">About
                            <span class="c-arrow c-toggler"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="c-link dropdown-toggle">Contact
                            <span class="c-arrow c-toggler"></span>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav c-theme-nav c-float-right">
                    <li class="c-cart-toggler-wrapper">
                        <a href="#" class="c-btn-icon c-cart-toggler">
                            <i class="icon-handbag c-cart-icon"></i>
                            <span class="c-cart-number c-theme-bg">2</span>
                        </a>
                    </li>
                    <li class="c-search-toggler-wrapper">
                        <a href="#" class="c-btn-icon c-search-toggler"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
            </nav>
            <!-- END: MEGA MENU -->
            <!-- END: LAYOUT/HEADERS/MEGA-MENU-SHOP -->
            <!-- END: HOR NAV -->
        </div>
        <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
        <!-- BEGIN: CART MENU -->
        <div class="c-cart-menu">
            <div class="c-cart-menu-title">
                <p class="c-cart-menu-float-l c-font-sbold">2 item(s)</p>
                <p class="c-cart-menu-float-r c-theme-font c-font-sbold">$79.00</p>
            </div>
            <ul class="c-cart-menu-items">
                <li>
                    <div class="c-cart-menu-close">
                        <a href="#" class="c-theme-link">×</a>
                    </div>
                    <img src="../../assets/base/img/content/shop2/24.jpg"/>
                    <div class="c-cart-menu-content">
                        <p>1 x <span class="c-item-price c-theme-font">$30</span></p>
                        <a href="shop-product-details-2.html" class="c-item-name c-font-sbold">Winter Coat</a>
                    </div>
                </li>
                <li>
                    <div class="c-cart-menu-close">
                        <a href="#" class="c-theme-link">×</a>
                    </div>
                    <img src="../../assets/base/img/content/shop2/12.jpg"/>
                    <div class="c-cart-menu-content">
                        <p>1 x <span class="c-item-price c-theme-font">$30</span></p>
                        <a href="shop-product-details.html" class="c-item-name c-font-sbold">Sports Wear</a>
                    </div>
                </li>
            </ul>
            <div class="c-cart-menu-footer">
                <a href="shop-cart.html" class="btn btn-md c-btn c-btn-square c-btn-grey-3 c-font-white c-font-bold c-center c-font-uppercase">View Cart</a>
                <a href="shop-checkout.html" class="btn btn-md c-btn c-btn-square c-theme-btn c-font-white c-font-bold c-center c-font-uppercase">Checkout</a>
            </div>
        </div>
        <!-- END: CART MENU --><!-- END: LAYOUT/HEADERS/QUICK-CART -->
    </div>
    <style>
        marquee {
            width: 100%;
            padding: 20px 0;
            height: 100%;
            background-color: lightblue;
        }
    </style>
    <marquee direction="scroll">
        This is test marquee !! Hi Kutti :D !! Ki koros? :D !!
    </marquee>
</div>
