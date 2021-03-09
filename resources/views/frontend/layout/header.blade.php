<!-- Document Wrapper
============================================= -->
<div class="clearfix">
    <!-- Header
    ============================================= -->
    <header id="header" class="sticky-style-2" style="height:285px">
    <div class="container clearfix"
         style="background: url(frontend_assets/images/top-banner.jpg) no-repeat; color: #fff;height:180px;background-size: 100% 180px;">
        <!-- Logo
        ============================================= -->
        <div id="logo" class="logo" style="margin-top: 28px;">
            <a href="index.html" class="standard-logo" data-dark-logo="frontend_assets/assets/frontend_assets/images/mayor.jpg"><img
                        class="divcenter" style="height: 102px; padding: 5px 0px 5px 0px;"
                        src="frontend_assets/images/logo.png" alt="বেনাপোল পৌরসভা"></a>
        </div><!-- #logo end -->
        <div class="brand" style="margin-top: 30px;">
            <h3 class="title">বেনাপোল পৌরসভা</h3>

        </div>

    </div>

    <div id="header-wrap">

        <!-- Primary Navigation
        ============================================= -->
        <nav id="primary-menu" class="style-2 center">
            <div class="container clearfix">
                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                <ul>
                    <li class="current"><a href="{{ route('home') }}">
                            <div>মূলপাতা</div>
                        </a></li>
                    <li><a href="#">পৌরসভা সম্পর্কে</a>

                        <ul>
                            <li><a href="{{ route('about')}}">এক নজরে
                                    পৌরসভা </a>
                            </li>
                            <li><a href="{{ route('structure') }} ">সাংগঠনিক কাঠামো </a>
                            </li>

                        </ul>

                    </li>


                    <li><a href="{{ route('parishad') }}">পৌর পরিষদ </a>

                    </li>


                    <li><a href="{{ route('staff') }}">কর্মকর্তা/কর্মচারীবৃন্দ </a>

                    </li>

                    <li><a href="{{ route('service') }}">সেবাসমূহ </a>

                    </li>


                    <li><a href="{{ route('notice') }}">নোটিশ</a></li>
                    <li><a href="{{ route('download') }}">ডাউনলোড</a></li>

                    <li><a href="contact.html" class="btn btn-success" style="color:#fff;"> যোগাযোগ </a></li>
                    <!--<li><a href="http://hajigonjpourashava.org/main/login" class="btn btn-success" style="color:#fff;"> Result</a></li>-->
                    <!--<li><a href="http://hajigonjpourashava.org/main/login" class="btn btn-success" style="color:#fff;"><i class="fa fa-user"></i> Login</a></li>-->
                </ul>
            </div>
        </nav><!-- #primary-menu end -->
</div>

    <div class="main-latest container">
        <div class="row">
            <div class="col-md-2 no-padding-right">
                <div class="latest-news">
                    ব্রেকিং নিউজ
                </div>
            </div>
            <div class="col-md-10 no-padding-left">
                <marquee behavior="" direction="" class="marq">
                                            “পৌর কর সংক্রান্ত”
                                    </marquee>
            </div>
        </div>


    </div>

</header><!-- #header end -->
