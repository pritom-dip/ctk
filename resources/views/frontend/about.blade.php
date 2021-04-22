@extends('frontend.layout.app')
@section('body')
<div class="container">
    <div class="card">
        <br>
        <h2 class="text-center">ভূমিকা </h2>
        <hr>

        <div class="card-body">
            <div class="col-md-8 col-md-offset-2">
                <div class="card-body">

                    {!!$about->description !!}

                    @php

                        $number =  array('১।', '২।', '৩।','৪।','৫।','৬।','৭।','৮।','৯।','১০।','১১।','১২।','১৩।','১৪।','১৫।','১৬।','১৭।','১৮।','১৯।','২০।','২১।','২২।','২৩।','২৪।'
                        ,'২৫।','২৬।','২৭।','২৮।','২৯।','৩০।','৩১।','৩২।','৩৩।','৩৪।','৩৫।','৩৬।','৩৭।','৩৮।','৩৯।','৪০।','৪১।','৪২।','৪৩।','৪৪।','৪৫।','৪৬।','৪৭।','৪৮।',
                        '৫০।','৫১।','৫২।','৫৩।','৫৪।','৫৫।','৫৬।','৫৭।','৫৮।','৫৯।','৬০।'
                    );


                         $info = json_decode($about -> information);

                    @endphp
                        @forelse ($info as $key => $item)
                            <p>{{ $number[$key] }} <span style="margin-left: 10px">{{ $item -> description }}</span></p>
                            @empty
                        @endforelse






                </div>

            </div>
        </div>
    </div>
</div>
@endsection
