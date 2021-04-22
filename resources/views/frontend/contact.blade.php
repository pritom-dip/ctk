@extends('frontend.layout.app')
@section('body')
<div class="container">
    <div class="row">


        <div class="col-md-6 col-md-offset-3">

            <div class="mapouter">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="600" height="500" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=Benapole%20Paurashava%2C%20Benapole%20-%20Bahadurpur%20Road%2C%20Benapole%2C%20Bangladesh&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                    <style>.mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 600px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 600px;
                        }</style>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
