@extends('welcome')
@section('title','My Wishlist')
@section('body')
    <div class="c-layout-page">
        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">Wishlist</h3>
                    <h4 class="">Page Sub Title Goes Here</h4>
                </div>
                <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                    <li><a href="shop-product-wishlist.html">Wish List</a></li>
                    <li>/</li>
                    <li class="c-state_active">Jango Components</li>

                </ul>
            </div>
        </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
        <div class="container">
            <div class="c-layout-sidebar-menu c-theme ">
                <!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
                <div class="c-sidebar-menu-toggler">
                    <h3 class="c-title c-font-uppercase c-font-bold">My Profile</h3>
                    <a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">
                        <span class="c-line"></span> <span class="c-line"></span> <span class="c-line"></span>
                    </a>
                </div>

                <ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
                    <li class="c-dropdown c-open">
                        <a href="javascript:;" class="c-toggler">My Profile<span class="c-arrow"></span></a>
                        <ul class="c-dropdown-menu">
                            <li class="c-active">
                                <a href="shop-customer-dashboard.html">My Dashbord</a>
                            </li>
                            <li class="">
                                <a href="shop-customer-profile.html">Edit Profile</a>
                            </li>
                            <li class="">
                                <a href="shop-order-history.html">Order History</a>
                            </li>
                            <li class="">
                                <a href="shop-customer-addresses.html">My Addresses</a>
                            </li>
                            <li class="">
                                <a href="shop-product-wishlist.html">My Wishlist</a>
                            </li>
                        </ul>
                    </li>
                </ul><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-DASHBOARD -->
            </div>
    <div class="c-layout-sidebar-content ">
        <!-- BEGIN: PAGE CONTENT -->
        <div class="c-content-title-1">
            <h3 class="c-font-uppercase c-font-bold">My Wishlist</h3>
            <div class="c-line-left"></div>
        </div>
        <div class="c-shop-wishlist-1">
            <div class="c-border-bottom hidden-sm hidden-xs">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Product</h3>
                    </div>
                    <div class="col-md-5">
                        <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Description</h3>
                    </div>
                    <div class="col-md-2">
                        <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Stock</h3>
                    </div>
                    <div class="col-md-2">
                        <h3 class="c-font-uppercase c-font-16 c-font-grey-2 c-font-bold">Price</h3>
                    </div>
                </div>
            </div>
            <!-- BEGIN: PRODUCT ITEM ROW -->
            <div class="c-border-bottom c-row-item">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details-2.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-top-center c-overlay-object" data-height="height">
                                <img width="100%" class="img-responsive" src="../../assets/base/img/content/shop2/24.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-8">
                        <ul class="c-list list-unstyled">
                            <li class="c-margin-b-25"><a href="shop-product-details-2.html" class="c-font-bold c-font-22 c-theme-link">Winter Coat</a></li>
                            <li class="c-margin-b-10">Color: Blue</li>
                            <li>Size: S</li>
                            <li class="c-margin-t-30">
                                <div class="form-group" role="group">
                                    <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold"><i class="fa fa-shopping-cart"></i>Add Cart</button>
                                    <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">Remove</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Stock</p>
                        <p class="c-font-sbold c-font-18">In Stock</p>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                        <p class="c-font-sbold c-font-uppercase c-font-18">$20.00</p>
                    </div>
                </div>
            </div>
            <!-- END: PRODUCT ITEM ROW -->
            <!-- BEGIN: PRODUCT ITEM ROW -->
            <div class="c-row-item">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="c-content-overlay">
                            <div class="c-overlay-wrapper">
                                <div class="c-overlay-content">
                                    <a href="shop-product-details.html" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Explore</a>
                                </div>
                            </div>
                            <div class="c-bg-img-top-center c-overlay-object" data-height="height">
                                <img width="100%" class="img-responsive" src="../../assets/base/img/content/shop2/12.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-8">
                        <ul class="c-list list-unstyled">
                            <li class="c-margin-b-25"><a href="shop-product-details.html" class="c-font-bold c-font-22 c-theme-link">Sports Wear</a></li>
                            <li class="c-margin-b-10">Color: Blue</li>
                            <li>Size: S</li>
                            <li class="c-margin-t-30">
                                <div class="form-group" role="group">
                                    <button type="submit" class="btn btn-sm c-theme-btn c-btn-square c-btn-uppercase c-btn-bold"><i class="fa fa-shopping-cart"></i>Add Cart</button>
                                    <button type="submit" class="btn btn-sm btn-default c-btn-square c-btn-uppercase c-btn-bold">Remove</button>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Stock</p>
                        <p class="c-font-sbold c-font-18">In Stock</p>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <p class="visible-xs-block c-theme-font c-font-uppercase c-font-bold">Unit Price</p>
                        <p class="c-font-sbold c-font-uppercase c-font-18">$15.00</p>
                    </div>
                </div>
            </div>
            <!-- END: PRODUCT ITEM ROW -->
        </div>			<!-- END: PAGE CONTENT -->
    </div>
        </div>
    </div>
@endsection
