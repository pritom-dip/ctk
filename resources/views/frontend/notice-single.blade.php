@extends('frontend.layout.app')
@section('body')

    <section class="container" style="margin-bottom:100px">
        <h3>{{ $data -> short_desc}}</h3>
        <p>{!! $data -> long_desc !!}</p>

    </section>
@endsection
