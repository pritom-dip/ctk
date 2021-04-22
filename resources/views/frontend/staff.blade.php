@extends('frontend.layout.app')
@section('body')
<div class="container">
    <div class="row">


    @foreach ($staff as $item)

        <div class="col-md-3">

            <div class="panel panel-default" style="height: 500px">
                <div class="panel-body">
                    <center>
                        <img src="{{ asset('storage/'. $item -> image) }}" alt="." class="img-rounded" height="120px" width="120px">
                        <br>
                        <h4>{{ $item -> name }}</h4>
                        <p>{{ $item -> designation }}</p>
                        <p>{{ $item -> father }}</p>
                        <p>{{ $item -> mother }}</p>
                        <p>{{ $item -> address }}</p>
                        <p></p>
                        <p>
                        @if (($item -> marriage_status) == 1)
                             বিবাহিত
                        @else
                             অবিবাহিত
                        @endif
                        </p>
                        @if (($item -> address) == 1)

                        <p>পুত্র-২, কন্যা-১</p>
                        @endif

                        <p>{{ $item -> eamil }}</p>
                        <p>{{ $item -> office_phone }}</p>
                        <p>{{ $item -> personal_phone }}</p>
                    </center>


                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
@endsection
