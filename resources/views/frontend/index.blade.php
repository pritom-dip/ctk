@extends('frontend.layout.app')
@section('body')
    <!-- Content
    ============================================= -->
    <section id="content" style=";">
        <div class="content-wrap">
            <!-- Content
            ============================================= -->
            <section id="content" style="margin: -150px 0px 0px 0px;">
                <div class="content-wrap">
                    <div class="container clearfix"><!-- Sidebar
============================================= -->
                        <div class="sidebar nobottommargin clearfix">
                            <div class="sidebar-widgets-wrap">

                                <div class="widget clearfix">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">নোটিশ বোর্ড</h3>
                                        </div>
                                        <div id="feeds">
                                            <div class="feedlist testimonial_wrapp">
                                                <ul>
                                                    @foreach ($notice as $val)

                                                        <li>
                                                            <div class="entry-c clearfix">
                                                                <div class="entry-title">

                                                                    <h5>
                                                                        <a href="{{ route('notice.single',$val ->id) }}"><i class="fa fa-play"></i>
                                                                           {{ $val -> name }}
                                                                        </a>

                                                                        <br>
                                                                        <span class="meta">{{ date('d F Y' ,strtotime($val -> created_at)) }}</span>
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                            <div class="slidebuttons">
                                                <p class="txt"><a href="#" class="readmore txthover">&nbsp;</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="widget" style="margin: 5px 0px -45px 0px;">
                                    <div id='cssmenu'>
                                        <ul>
                                            <li class="has-sub"><a
                                                        href="#"><span>পৌরসভা সম্পর্কে</span></a>
                                                <ul class="mainList">
                                                    <li><a href="{{ route('about') }}">এক নজরে
                                                            পৌরসভা </a></li>
                                                    <li><a href="{{ route('structure') }}">সাংগঠনিক কাঠামো</a>
                                                    </li>
                                                    <!-- <span class="ajax_list">
                                                                               </span>-->
                                                </ul>
                                            </li>
                                            <li class="last"><a href="{{ route('parishad') }}"><span>পৌর পরিষদ</span></a>
                                            </li>

                                            <li class="last"><a href="{{ route('staff') }}"><span>কর্মকর্তা/কর্মচারীবৃন্দ</span></a>
                                            </li>
                                            <!--rite sitebar menue -->
                                            <li class="last"><a
                                                        href="{{ route('service') }}"><span>সেবাসমূহ</span></a>
                                            </li>

                                            <!--<li class="last"><a href="http://hajigonjpourashava.org/main/contact"><span>CONTACT US</span></a></li> -->
                                            <li class="last"><a href="{{ route('notice') }}"><span>নোটিশ</span></a></li>
                                            <!-- <li class="last"><a href="http://hajigonjpourashava.org/pages/view/notice_board"><span>ALL NOTICE</span></a></li> -->
                                            <li class="last"><a href="{{ route('download') }}"><span>ডাউনলোড</span></a></li>

                                        </ul>

                                    </div>
                                </div>

                            </div>


                        </div><!-- .sidebar end -->
                        <!-- Post Content
                        ============================================= -->
                        <div class="postcontent bothsidebar nobottommargin clearfix">

                            <!-- Posts<div class="postcontent nobottommargin clearfix">
                            ============================================= -->
                            <div id="posts" class="small-thumbs alt">

                                <div class="entry clearfix nobottomborder">

                                    <div class="fslider">
                                        <div class="flexslider">
                                            <div class="slider-wrap">

                                                @foreach ($slider as $item)
                                                    <div class="slide">
                                                        <img class="image_fade" style="height: 360px;" src="{{ asset('storage/'. $item -> image) }}" alt="Standard Post with Gallery">
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-wrap" style="margin: 0px 0px -200px 0px;">

                                        <a class="button button-full button-purple center tright header-stick bottommargin-lg">
                                            <div class="clearfix" style="font-size: 22px;">
                                                WELCOME TO BENAPOLE PAURASHAVA
                                            </div>
                                            <div class="clearfix" style="font-size: 16px;">
                                                Benapole, Bangladesh.
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">HONORABLE MINISTER </h3>
                                    </div>
                                    <div class="panel-body">


                                        {!!$about->description !!}

                                    </div>
                                </div>


                            </div><!-- #posts end -->

                        </div><!-- .postcontent end -->

                        <!-- Sidebar
                        ============================================= -->
                        <div class="sidebar nobottommargin col_last clearfix">
                            <div class="sidebar-widgets-wrap">


                                <div class="name">সম্মানিত মেয়র</div>
                                <div class="row">
                                    <div class="mayor">
                                        <img src="frontend_assets/images/mayor.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info_name">
                                    <h5>মোঃ আশরাফুল আলম লিটন</h5>
                                </div>

                            </div>

                            <div class="sidebar-widgets-wrap">

                                <div class="name">স্মার্টসিটি অ্যাপ</div>
                                <div class="row">
                                    <div class="mayor">
                                        <a href="https://play.google.com/store/apps/details?id=com.pixonlab.pourashava"><img
                                                    src="frontend_assets/images/app.png" width="100%" height="450px" alt=""></a>
                                    </div>
                                </div>

                                <a href="https://play.google.com/store/apps/details?id=com.pixonlab.pourashava">

                                    <div class="name">ডাউনলোড</div>
                                </a>

                            </div>


                        </div><!-- .sidebar end -->
                    </div>


                </div>
            </section><!-- #content end -->

        </div>

    </section><!-- #content end -->


    <div class="container">
        <h2>ফটো গ্যালারি </h2>
        <hr>
        @foreach ($gallery as $item)
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="{{ asset('storage/'. $item -> image) }}" style="height:200px; width:250px;"
                        class="img-responsive img-rounded"/>
                </div>
            </div>
        @endforeach

    </div>
@endsection
