<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    {{-- head link --}}
    @include('frontend.layout.head')
    <body class="boxed">

        {{-- menu section --}}
        @include('frontend.layout.header')
        {{-- body section --}}
        @section('body')
        @show
        {{-- footer section --}}
        @include('frontend.layout.footer')
        <!-- Go To Top
        ============================================= -->
        <div id="gotoTop"><i class="fa fa-angle-up"></i></div>

        {{-- script link --}}
        @include('frontend.layout.script')
    </body>
</html>

