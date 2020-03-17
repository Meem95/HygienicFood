@extends('welcome')
@section('title','Blog')

@section('body')
    <div class="c-layout-page">
    <div class="c-layout-breadcrumbs-1 c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
        <div class="container">
            <div class="c-page-title c-pull-left">
                <h3 class="c-font-uppercase c-font-sbold">Blog List View</h3>
            </div>
            <ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
                <li><a href="#">Pages</a></li>
                <li>/</li>
                <li><a href="#">Blog List View</a></li>
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
                    <div class="c-content-blog-post-1-list">
                        <div class="c-content-blog-post-1">
                            @foreach($posts as $post)
                            <div class="c-media">

                                <div class="c-content-media-2-slider" data-slider="owl">
                                    <div class="owl-carousel owl-theme c-theme owl-single" data-single-item="true" data-auto-play="4000" data-rtl="false">
                                        <div class="item">
                                            <div class="c-content-media-2" style="background-image: url('{{asset('uploads/post/'.$post->image)}}'); min-height: 460px;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="c-title c-font-bold c-font-uppercase">
                                <a href="{{route('blog.details')}}">{{$post->title}}</a>
                            </div>

                            <div class="c-desc">
                                {{$post->description}}
                                <a href="#">read more...</a>
                            </div>

                            <div class="c-panel">
                                <div class="c-author"><a href="#">By <span class="c-font-uppercase">{{Auth::user()->name}}</span></a></div>
                                <div class="c-date">on <span class="c-font-uppercase">{{date('jS F Y , H:i A',strtotime($post->created_at))}}</span></div>

                                <ul class="c-tags c-theme-ul-bg">
                                    <li>ux</li>
                                    <li>marketing</li>
                                    <li>events</li>
                                </ul>
                                <div class="c-comments"><a href="#"><i class="icon-speech"></i> 30 comments</a></div>
                            </div>
                            @endforeach
                        </div>
                        <div class="c-pagination">
                            <ul class="c-content-pagination c-theme">
                                {{$posts->links()}}

                            </ul>
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
                            @foreach($categories as $category)
                            <li><a href="#">{{$category->name}}</a></li>
                                @endforeach
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
                                        @foreach($recentPosts as $post)
                                        <li>
                                            <div class="c-image">
                                                <a href="{{asset('/uploads/post/'.$post->image)}}" alt="{{$post->title}}" class="img-responsive"> </a>

                                            </div>
                                            <div class="c-post">
                                                <a href="#" class="c-title">{{$post->title}}
                                                </a>
                                                <div class="c-date">{{date('jS F Y , H:i A',strtotime($post->created_at))}}</div>
                                            </div>
                                        </li>
                                            @endforeach
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
                </div>
            </div>
        </div>
    </div>
@endsection
