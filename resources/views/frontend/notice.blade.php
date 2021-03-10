@extends('frontend.layout.app')
@section('body')
<style>.notice:first-child {
    margin-top: 10px;
}

.notice {
    padding: 15px;
    background-color: #fafafa;
    border-left: 6px solid #7f7f84;
    margin-bottom: 10px;
    -webkit-box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
    -moz-box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
    box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
}

.notice-sm {
    padding: 10px;
    font-size: 80%;
}

.notice-lg {
    padding: 35px;
    font-size: large;
}

.notice-success {
    border-color: #80D651;
}

.notice-success > strong {
    color: #80D651;
}

.notice-info {
    border-color: #45ABCD;
}

.notice-info > strong {
    color: #45ABCD;
}

.notice-warning {
    border-color: #FEAF20;
}

.notice-warning > strong {
    color: #FEAF20;
}

.notice-danger {
    border-color: #d73814;
}

.notice-danger > strong {
    color: #d73814;
}

.notice > .desc {
    display: none;
}

.readMore {
    cursor: pointer;
}

</style>
<!-- Content
============================================= -->
<section class="container">

@foreach ($notice as $item)

    <div class="notice notice-info">
        <strong>হেডলাইন: </strong> “{{ $item -> name}}” <span
                class="pull-right text-info readMore">বিস্তারিত </span>
        <div class="desc">

            <p>
                {{ $item -> short_desc }}
            </p>
            <a href="{{ route('notice.single',$item ->id) }}">বিস্তারিত </a>
        </div>
    </div>

@endforeach



</section><!-- #content end -->

<script>
$(document).ready(function () {


    $(".readMore").click(function () {
        var This = $(this);
        $(this).next().toggle(function () {
            if (This.text() == "Read") {
                This.text("Hide")
            }
            else {
                This.text("Read")
            }
        })
    });
})
</script>
@endsection
