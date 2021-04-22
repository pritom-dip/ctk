@extends('frontend.layout.app')
@section('body')
<style>
.notice:first-child {
    margin-top: 10px;
}

.notice {
    /* margin-right: 250px;
    margin-left: 250px; */
    padding: 10px;

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
    <div class="card">
        <br>
        <h4 class="text-center text-success">ডাউনলোড </h4>
        <hr>

        <div class="card-body">
            <div class="col-md-6 col-md-offset-3">
            @foreach ($category as $item)

                <h4 style="margin-bottom: -13px; margin-top: 20px;">{{ $item -> name }}</h4>

                <hr>
                @forelse($item -> files as $val)

                    <div class="notice notice-info">
                        <strong>File: </strong> {{$val ->  name }} <span
                                class="pull-right text-info readMore">Details</span>
                        <div class="desc">
                            <br>
                            Attachment: <a href="{{ asset('storage/'. $val ->path) }}" download> Download </a>|<a target="_blank" style="margin-left: 20px" href="{{ route('file.view',$val ->id) }}">View </a>
                        </div>
                    </div>
                @endforeach
            @endforeach
            </div>
        </div>
</section>


<script>
$(document).ready(function () {


    $(".readMore").click(function () {
        var This = $(this);
        $(this).next().toggle(function () {
            if (This.text() == "Details") {
                This.text("Hide")
            }
            else {
                This.text("Details")
            }
        })
    });
})
</script>
@endsection


