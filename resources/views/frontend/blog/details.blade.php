@extends('welcome')
@section('title','Blog Details')

@section('body')
    <div class="c-layout-page">
        <!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->

        <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
            <div class="container">
                <div class="c-page-title c-pull-left">
                    <h3 class="c-font-uppercase c-font-sbold">Blog Single Post</h3>
                </div>
                <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                    <li><a href="#">Pages</a></li>
                    <li>/</li>
                    <li><a href="page-blog-post.html">Blog Single Post</a></li>
                    <li>/</li>
                    <li class="c-state_active">Jango Components</li>

                </ul>
            </div>
        </div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-1 -->
        <!-- BEGIN: PAGE CONTENT -->
        <!-- BEGIN: BLOG LISTING -->
        <div class="c-content-box c-size-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="c-content-blog-post-1-view">
                            <div class="c-content-blog-post-1">
                                <div class="c-media">
                                    <div class="c-content-media-2-slider" data-slider="owl">
                                        <div class="owl-carousel owl-theme c-theme owl-single" data-rtl="false" data-single-item="true" data-auto-play="4000">
                                            <div class="item">
                                                <div class="c-content-media-2" style="background-image: url(../../assets/base/img/content/misc/latest-work-3.jpg); min-height: 460px;">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="c-content-media-2" style="background-image: url(../../assets/base/img/content/misc/latest-work-7.jpg); min-height: 460px;">
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="c-content-media-2" style="background-image: url(../../assets/base/img/content/misc/9.jpg); min-height: 460px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="c-title c-font-bold c-font-uppercase">
                                    <a href="#">UX Design Conference 2015</a>
                                </div>

                                <div class="c-panel c-margin-b-30">
                                    <div class="c-author"><a href="#">By <span class="c-font-uppercase">Nick Strong</span></a></div>
                                    <div class="c-date">on <span class="c-font-uppercase">20 May 2015, 10:30AM</span></div>
                                    <ul class="c-tags c-theme-ul-bg">
                                        <li>ux</li>
                                        <li>marketing</li>
                                        <li>events</li>
                                    </ul>
                                    <div class="c-comments"><a href="#"><i class="icon-speech"></i> 30 comments</a></div>
                                </div>

                                <div class="c-desc">
                                    <p>
                                        Lorem ipsum dolor sit amet, coectetuer diam ipsum dolor sit amet nonummy  coectetuer diam ipsum dolor sit
                                        coectetuer adipiscing elit amipiscing elit sit adipiscing consectetuer ipsum dolor sit amipiscing elit sit amet, sit amet,
                                        coectetuer adipiscing elit adipiscing consectetuer ipsum dolor sit amet diam nonummy adipiscing elit sit amet, sit ame.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, coectetuer diam ipsum dolor sit amet nonummy  coectetuer diam ipsum dolor sit
                                        coectetuer adipiscing elit adipiscing consectetuer ipsum dolor sit amipiscing elit sit amet, sit amet,
                                        coectetuer adipiscing elit adipiscing consectetuer ipsum dolor sit amet diam nonummy adipiscing elit sit amet, sit ame.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, coectetuer diam ipsum dolor sit amet nonummy  coectetuer diam ipsum dolor sit
                                        coectetuer adipiscing elit adipiscing const sit amet, sit amet,
                                        coectetuer adipiscing elit adipiscing consectetuer ipsum dolor sit amet diam nonummy adipiscing elit sit amet, sit ame.
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, coe  coectetuer diam ipsum dolor sit
                                        coectetuer adipiscing elit adipiscing consectetuer ipsum dolor sit amipiscing elit sit amet, sit amet,
                                        coectetuer adipiscing elit adipiscing consectetuer ipsum dolor sit amet diam nonummy adipiscing elit sit amet, sit ame.
                                    </p>
                                </div>

                                <div class="c-comments">

                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold">Comments(30)</h3>
                                        <div class="c-line-left"></div>
                                    </div>

                                    <div class="c-comment-list">

                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="" src="../../assets/base/img/content/team/team1.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#" class="c-font-bold">Sean</a> on <span class="c-date">23 May 2015, 10:40AM</span></h4>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                                                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="" src="../../assets/base/img/content/team/team3.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#" class="c-font-bold">Strong Strong</a> on <span class="c-date">21 May 2015, 11:40AM</span></h4>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                                                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="#">
                                                            <img class="media-object" alt="" src="../../assets/base/img/content/team/team4.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading"><a href="#" class="c-font-bold">Emma Stone</a> on <span class="c-date">30 May 2015, 9:40PM</span></h4>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo.
                                                        Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" alt="" src="../../assets/base/img/content/team/team7.jpg">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading"><a href="#" class="c-font-bold">Nick Nilson</a> on <span class="c-date">30 May 2015, 9:40PM</span></h4>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio,
                                                vestibulum in vulputate at, tempus viverra turpis.
                                            </div>
                                        </div>

                                    </div>

                                    <div class="c-content-title-1">
                                        <h3 class="c-font-uppercase c-font-bold">Leave A Comment</h3>
                                        <div class="c-line-left"></div>
                                    </div>

                                    <form action="#">
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Name" class="form-control c-square">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Email" class="form-control c-square">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" placeholder="Your Website" class="form-control c-square">
                                        </div>
                                        <div class="form-group">
                                            <textarea rows="8" name="message" placeholder="Write comment here ..." class="form-control c-square"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn c-theme-btn c-btn-uppercase btn-md c-btn-sbold btn-block c-btn-square">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <!-- BEGIN: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
                        <form action="#" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control c-square c-theme-border" placeholder="Search blog...">
                                <span class="input-group-btn">
        <button class="btn c-theme-btn c-theme-border c-btn-square" type="button">Go!</button>
      </span>
                            </div>
                        </form>

                        <div class="c-content-ver-nav">
                            <div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
                                <h3 class="c-font-bold c-font-uppercase">Categories</h3>
                                <div class="c-line-left c-theme-bg"></div>
                            </div>
                            <ul class="c-menu c-arrow-dot1 c-theme">
                                <li><a href="#">Web Development(2)</a></li>
                                <li><a href="#">UX Design(12)</a></li>
                                <li><a href="#">Mobile Development(5)</a></li>
                                <li><a href="#">Internet Marketing(7)</a></li>
                                <li><a href="#">Social Networks(11)</a></li>
                                <li><a href="#">Web Design(18)</a></li>
                            </ul>
                        </div>

                        <div class="c-content-tab-1 c-theme c-margin-t-30">
                            <div class="nav-justified">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#blog_recent_posts" data-toggle="tab">Recent Posts</a></li>
                                    <li><a href="#blog_popular_posts" data-toggle="tab">Popular Posts</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="blog_recent_posts">
                                        <ul class="c-content-recent-posts-1">
                                            <li>
                                                <div class="c-image">
                                                    <img src="../../assets/base/img/content/stock/09.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="c-post">
                                                    <a href="#" class="c-title">
                                                        UX Design Expo 2015...
                                                    </a>
                                                    <div class="c-date">27 Jan 2015</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="c-image">
                                                    <img src="../../assets/base/img/content/stock/08.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="c-post">
                                                    <a href="#" class="c-title">
                                                        UX Design Expo 2015...
                                                    </a>
                                                    <div class="c-date">27 Jan 2015</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="c-image">
                                                    <img src="../../assets/base/img/content/stock/07.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="c-post">
                                                    <a href="#" class="c-title">
                                                        UX Design Expo 2015...
                                                    </a>
                                                    <div class="c-date">27 Jan 2015</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="c-image">
                                                    <img src="../../assets/base/img/content/stock/32.jpg" alt="" class="img-responsive">
                                                </div>
                                                <div class="c-post">
                                                    <a href="#" class="c-title">
                                                        UX Design Expo 2015...
                                                    </a>
                                                    <div class="c-date">27 Jan 2015</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="blog_popular_posts">
                                        <ul class="c-content-recent-posts-1">
                                            <li>
                                                <div class="c-image">
                                                    <img src="../../assets/base/img/content/stock/34.jpg" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="c-post">
                                                    <a href="#" class="c-title">
                                                        UX Design Expo 2015...
                                                    </a>
                                                    <div class="c-date">27 Jan 2015</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="c-image">
                                                    <img src="../../assets/base/img/content/stock/37.jpg" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="c-post">
                                                    <a href="#" class="c-title">
                                                        UX Design Expo 2015...
                                                    </a>
                                                    <div class="c-date">27 Jan 2015</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="c-image">
                                                    <img src="../../assets/base/img/content/stock/32.jpg" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="c-post">
                                                    <a href="#" class="c-title">
                                                        UX Design Expo 2015...
                                                    </a>
                                                    <div class="c-date">27 Jan 2015</div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="c-image">
                                                    <img src="../../assets/base/img/content/stock/54.jpg" class="img-responsive" alt=""/>
                                                </div>
                                                <div class="c-post">
                                                    <a href="#" class="c-title">
                                                        UX Design Expo 2015...
                                                    </a>
                                                    <div class="c-date">27 Jan 2015</div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="c-content-ver-nav">
                            <div class="c-content-title-1 c-theme c-title-md c-margin-t-40">
                                <h3 class="c-font-bold c-font-uppercase">Blogs</h3>
                                <div class="c-line-left c-theme-bg"></div>
                            </div>
                            <ul class="c-menu c-arrow-dot c-theme">
                                <li><a href="#">Fasion & Arts</a></li>
                                <li><a href="#">UX & Web Design</a></li>
                                <li><a href="#">Mobile Development</a></li>
                                <li><a href="#">Internet Marketing</a></li>
                                <li><a href="#">Frontend Development</a></li>
                            </ul>
                        </div><!-- END: CONTENT/BLOG/BLOG-SIDEBAR-1 -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END: BLOG LISTING  -->

        <!-- END: PAGE CONTENT -->
    </div>
@endsection
