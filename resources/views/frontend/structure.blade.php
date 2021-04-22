@extends('frontend.layout.app')
@section('body')
<section id="content">
    <div class="content-wrap">
        <div class="row">
            <div class="container">

                <div class="card">
                    <div class="card-body">


                            <img src="{{ asset('storage/'. $structure ->image) }}" width="100%"/>




                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
