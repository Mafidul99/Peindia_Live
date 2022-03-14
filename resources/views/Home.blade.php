@extends('layout.master')
@section('title') {{'News Protal'}} @endsection
@section('main-container')

<section class="main-wrapper mb-40">
    <div class="container">
        <div class="featured-wrap">
            <div class="col-md-5 col-sm-12">
                <div class="post-carousel owl-carousel">
                    <div class="featured-post" style="background-image: url({{asset('assets')}}/img/slider-post-1.jpg);">
                        <div class="post-info">
                            <a href="#" class="cat-name tt-u">India</a>
                            <h3 class="fw-6 fz-16"><a href="#" class="text-white">Narendra Modi Talks About Indian People.</a></h3>
                        </div>
                    </div>
                    <div class="featured-post" style="background-image: url({{asset('assets')}}/img/slider-post-2.jpg);">
                        <div class="post-info">
                            <a href="#" class="cat-name tt-u">India</a>
                            <h3 class="fw-6 fz-16"><a href="#" class="text-white">Narendra Modi Talks About Indian People.</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /.post-carousel -->
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="post-carousel owl-carousel">
                    <div class="featured-post" style="background-image: url({{asset('assets')}}/img/slider-post-2.1.jpg);">
                        <div class="post-info">
                            <a href="#" class="cat-name tt-u">Sports</a>
                            <h3 class="fw-6 fz-16"><a href="#" class="text-white">Improve Your Health And Stamina With Cycling.</a></h3>
                        </div>
                    </div>
                    <div class="featured-post" style="background-image: url({{asset('assets')}}/img/slider-post-2.2.jpg);">
                        <div class="post-info">
                            <a href="#" class="cat-name tt-u">Sports</a>
                            <h3 class="fw-6 fz-16"><a href="#" class="text-white">Improve Your Health And Stamina With Cycling.</a></h3>
                        </div>
                    </div>
                </div>
                <!-- /.post-carousel -->
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="top-wrap mb-10">
                    <div class="post-carousel owl-carousel">
                        <div class="featured-post" style="background-image: url({{asset('assets')}}/img/slider-post-3.jpg);">
                            <div class="post-info">
                                <a href="#" class="cat-name tt-u">Indian Army</a>
                                <h3 class="fw-6 fz-16"><a href="#" class="text-white">An Army or Ground Force is a Fighting Force That Fights Primarily On Land.</a></h3>
                            </div>
                        </div>
                        <div class="featured-post" style="background-image: url({{asset('assets')}}/img/slider-post-3.1.jpg);">
                            <div class="post-info">
                                <a href="#" class="cat-name tt-u">Indian Army</a>
                                <h3 class="fw-6 fz-16"><a href="#" class="text-white">An Army or Ground Force is a Fighting Force That Fights Primarily On Land.</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.post-carousel -->
                </div>
                <div class="bottom-wrap">
                    <div class="post-carousel owl-carousel">
                        <div class="featured-post" style="background-image: url({{asset('assets')}}/img/slider-post-4.0.jpg);">
                            <div class="post-info">
                                <a href="#" class="cat-name tt-u">World</a>
                                <h3 class="fw-6 fz-16"><a href="#" class="text-white">Alex Helis Confirms Mystery Pop Singer On New Music Album.</a></h3>
                            </div>
                        </div>
                        <div class="featured-post" style="background-image: url({{asset('assets')}}/img/slider-post-4.1.jpg);">
                            <div class="post-info">
                                <a href="#" class="cat-name tt-u">World</a>
                                <h3 class="fw-6 fz-16"><a href="#" class="text-white">Alex Helis Confirms Mystery Pop Singer On New Music Album.</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.post-carousel -->
                </div>
            </div>
        </div>
        <!-- /.slider-wrap -->

        <div class="news-ticker-wrap">
            <span class="ticker-title tt-u">Breaking News</span>
            <ul class="news-ticker">
                <li><a href="#">Michel Brown Talks About American People.</a></li>
                <li><a href="#">An Army or Ground Force is a Fighting Force That Fights Primarily On Land.</a></li>
                <li><a href="#">Alex Helis Confirms Mystery Pop Singer On New Music Album.</a></li>
                <li><a href="#">Improve Your Health And Stamina With Cycling.</a></li>
            </ul>

            <div class="ticker-control">
                <i class="ti-angle-left" id="prev-ticker"></i>
                <i class="ti-angle-right" id="next-ticker"></i>
            </div>

        </div>
        <!-- /.news-ticker-wrap -->

    <!-- Main Content-ticker-wrap -->
        <div class="main-content mt-20 ov-hidden">
            <div class="col-md-8 left col-md-push-4 sm-padding">
                <div class="news-block padding-15 bg-white bd-grey mb-40">
                    <h2 class="block-heading mb-40">Trending News</h2>
                    <div class="grid-posts">
                        <div class="col-xs-6 padding-10">
                            <div class="grid-post">
                                <a href="#" class="mb-20"><img src="{{asset('assets')}}/img/trending-1.jpg" alt="Tranding News"></a>
                                <div class="post-info padding-15 ptb-20 bd-grey">
                                    <h4 class="mb-15 fw-6"><a href="#" class="text-dark">The future of possible innovation for business company.</a></h4>
                                    <span class="date"><i class="ti-timer"></i> November 16 , 2017</span>
                                </div>
                            </div>
                        </div>
                        <!-- post -1 -->
                        <div class="col-xs-6 padding-10">
                            <div class="grid-post">
                                <a href="#" class="mb-20"><img src="{{asset('assets')}}/img/trending-2.jpg" alt="Tranding News"></a>
                                <div class="post-info padding-15 ptb-20 bd-grey">
                                    <h4 class="mb-15 fw-6"><a href="#" class="text-dark">The future of possible innovation for business company.</a></h4>
                                    <span class="date"><i class="ti-timer"></i> November 16 , 2017</span>
                                </div>
                            </div>
                        </div>
                        <!-- post -2 -->
                        <div class="col-xs-6 padding-10">
                            <div class="grid-post">
                                <a href="#" class="mb-20"><img src="{{asset('assets')}}/img/trending-3.jpg" alt="Tranding News"></a>
                                <div class="post-info padding-15 ptb-20 bd-grey">
                                    <h4 class="mb-15 fw-6"><a href="#" class="text-dark">The future of possible innovation for business company.</a></h4>
                                    <span class="date"><i class="ti-timer"></i> November 16 , 2017</span>
                                </div>
                            </div>
                        </div>
                        <!-- post -3 -->
                        <div class="col-xs-6 padding-10">
                            <div class="grid-post">
                                <a href="#" class="mb-20"><img src="{{asset('assets')}}/img/trending-4.jpg" alt="Tranding News"></a>
                                <div class="post-info padding-15 ptb-20 bd-grey">
                                    <h4 class="mb-15 fw-6"><a href="#" class="text-dark">The future of possible innovation for business company.</a></h4>
                                    <span class="date"><i class="ti-timer"></i> November 16 , 2017</span>
                                </div>
                            </div>
                        </div>
                        <!-- post -4 -->
                    </div>
                    <!-- /.grid-posts -->
                </div>
                <!-- /.news-block -->

                <div class="news-block padding-15 bg-white bd-grey mb-40">
                    <h2 class="block-heading mb-40">World News</h2>
                    <div class="two-col-posts">
                        <div class="col-md-6 padding-10">
                            <div class="post-item">
                                <a href="#" class="mb-20"><img src="{{asset('assets')}}/img/world-1.jpg" alt="World News"></a>
                                <div class="post-info padding-15 ptb-20 bd-grey">
                                    <h4 class="mb-15 fw-6"><a href="#" class="text-dark">The future of possible innovation for business company.</a></h4>
                                    <span class="date"><i class="ti-timer"></i> November 16 , 2017</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 padding-10">
                            <div class="small-posts">
                                <div class="sm-post-item">
                                    <img src="{{asset('assets')}}/img/world-2.jpg" alt="World News">
                                    <div class="sm-post-content bd-grey">
                                        <h4 class="fz-14"><a href="#">William braynt went to visit.</a></h4>
                                        <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
                                    </div>
                                </div>
                                <div class="sm-post-item">
                                    <img src="{{asset('assets')}}/img/world-3.jpg" alt="World News">
                                    <div class="sm-post-content bd-grey">
                                        <h4 class="fz-14"><a href="#">White house press secretary Spicer briefs.</a></h4>
                                        <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
                                    </div>
                                </div>
                                <div class="sm-post-item">
                                    <img src="{{asset('assets')}}/img/world-4.jpg" alt="World News">
                                    <div class="sm-post-content bd-grey">
                                        <h4 class="fz-14"><a href="#">Expert tips on how to get a pay rise business.</a></h4>
                                        <p class="fz-12 fw-6 tt-u no-margin">national Octobar 2017</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .news-block -->

                <div class="news-block padding-15 bg-white bd-grey mb-40">
                    <h2 class="block-heading mb-40">Featured Videos</h2>
                    <div class="side-tab">

                        <div class="col-md-6 padding-10">
                            <div class="tab-content">
                                <div class="tab-pane v-player fade in active" id="video-1">
                                    <iframe src="https://player.vimeo.com/video/39524612" allowfullscreen></iframe>
                                </div>
                                <!-- /#video-1 -->
                                <div class="tab-pane v-player fade in" id="video-2">
                                    <iframe src="https://player.vimeo.com/video/39524612" allowfullscreen></iframe>
                                </div>
                                <!-- /#video-2 -->
                                <div class="tab-pane v-player fade in" id="video-3">
                                    <iframe src="https://player.vimeo.com/video/39524612" allowfullscreen></iframe>
                                </div>
                                <!-- /#video-3 -->
                                <div class="tab-pane v-player fade in" id="video-4">
                                    <iframe src="https://player.vimeo.com/video/39524612" allowfullscreen></iframe>
                                </div>
                                <!-- /#video-4 -->
                            </div>
                        </div>
                        <div class="col-md-6 padding-10">
                            <ul class="video-thumbs">
                                <li class="active">
                                    <img src="{{asset('assets')}}/img/video-1.jpg" alt="Featured Video">
                                    <a href="#video-1" data-toggle="tab">
                                        <div class="display-table">
                                            <div class="table-cell">
                                                <i class="ti-control-play"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <img src="{{asset('assets')}}/img/video-2.jpg" alt="Featured Video">
                                    <a href="#video-2" data-toggle="tab">
                                        <div class="display-table">
                                            <div class="table-cell">
                                                <i class="ti-control-play"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <img src="{{asset('assets')}}/img/video-3.jpg" alt="Featured Video">
                                    <a href="#video-3" data-toggle="tab">
                                        <div class="display-table">
                                            <div class="table-cell">
                                                <i class="ti-control-play"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <img src="{{asset('assets')}}/img/video-4.jpg" alt="Featured Video">
                                    <a href="#video-4" data-toggle="tab">
                                        <div class="display-table">
                                            <div class="table-cell">
                                                <i class="ti-control-play"></i>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.news-block -->

                <div class="banner-in-content padding-15 bg-white bd-grey ov-hidden mb-40">
                    <a href="#"><img src="{{asset('assets')}}/img/banner.jpg" alt="Banner AD"></a>
                </div>
                <!-- /.banner-in-content -->

                <div class="news-block padding-15 bg-white bd-grey">
                    <h2 class="block-heading mb-40">Sports News</h2>
                    <div class="news-items">
                        <div class="col-xs-12 padding-10">
                            <div class="list-post-item">
                                <a href="#" class="img-thumb"><img src="{{asset('assets')}}/img/sports-1.jpg" alt="Sports News"></a>
                                <div class="post-info padding-15 ptb-20 bd-grey">
                                    <h4 class="mb-15 fw-6">
                                        <a href="#" class="text-dark">The future of possible innovation for local business company.</a></h4>
                                    <p class="fz-13">Stay focused and remember we design the best WordPress News and Magazine Themes. It’s the ones closest to you that want to…</p>
                                    <span class="date">
                                        <i class="ti-timer"></i> November 16 , 2017</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 padding-10">
                            <a href="#"><img src="{{asset('assets')}}/img/sports-2.jpg" class="img-full" alt="Sports News"></a>
                        </div>
                        <div class="col-md-3 col-xs-6 padding-10">
                            <a href="#"><img src="{{asset('assets')}}/img/sports-3.jpg" class="img-full" alt="Sports News"></a>
                        </div>
                        <div class="col-md-3 col-xs-6 padding-10">
                            <a href="#"><img src="{{asset('assets')}}/img/sports-4.jpg" class="img-full" alt="Sports News"></a>
                        </div>
                        <div class="col-md-3 col-xs-6 padding-10">
                            <a href="#"><img src="{{asset('assets')}}/img/sports-5.jpg" class="img-full" alt="Sports News"></a>
                        </div>
                    </div>
                </div>
                <!-- /.news-block -->

            </div>
            <!-- content block -->
            @include('layout.sidebar')
            <!-- sidebar block -->
        </div>
        <!-- /.main-content -->
    </div>
    <!-- /.container -->
</section>
<!-- /.main-wrapper -->

@endsection
