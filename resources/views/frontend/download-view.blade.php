@extends('frontend.layout.app')
@section('body')

<section class="container">

    <iframe src="{{ asset('storage/'. $data ->path) }}" frameborder="0" width="100%" height="900px;"></iframe>
</section>
@endsection


