@extends('frontend.layout.app')
@section('body')
<div class="container">
    <div class="row">
        @foreach ($parishad as $item)

            <div class="col-md-3">
                <div class="panel panel-default" style="height: 350px">
                    <div class="panel-body">
                        <center>
                            <img src="{{ asset('storage/'. $item -> image) }}"
                                alt="." class="img-rounded" height="120px" width="120px">
                            <br>
                            <h4>{{ $item -> name }}</h4>
                            <p>{{ $item -> designation }}</p>
                            <p>{{ $item ->  fathers_name}}</p>
                            <p>{{ $item ->  address }}</p>
                            <p>{{ $item ->  cell }}</p>
                        </center>


                    </div>
                </div>
            </div>
        @endforeach
    </div>



</div>
@endsection
