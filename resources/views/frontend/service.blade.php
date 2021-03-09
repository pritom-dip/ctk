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

<div class="col-md-6 col-md-offset-3">
                    <div class="notice notice-info">
            <strong>সেবা: </strong> নাগরিকত্ব সনদ
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> ওয়ারিশান সনদ
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> চারিত্রিক সনদ
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> অবিবাহিত সনদ
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> পৌর কর আদায়
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> পানির লাইন সংযোগ
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> বিনামূল্যে কম্পিউটার প্রশিক্ষণ
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> ষাটোর্ধ নাগরিকদের বিনামূল্যে স্বাস্থ্যসেবা ও ঔষধ প্রদান
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> সকল নাগরিকদের বিনামূল্যে স্বাস্থ্যসেবা প্রদান
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> দরিদ্র ও অসহায় নারীদের বিনামূল্যে হস্তশিল্প প্রশিক্ষণ
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> শিক্ষা কর্ণার
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> স্পোর্টস কর্ণার
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> নতুন হোল্ডিং
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> জন্ম নিবন্ধন সনদ
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> মৃত্যু নিবন্ধন সনদ
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> সড়ক বাতি স্থাপন/পুনঃস্থাপন
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> ট্রেড লাইসেন্স
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> ড্রেন পরিষ্কার
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> রিক্সা/ভ্যান লাইসেন্স
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> অটোরিক্সা লাইসেন্স
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> পৌর কবরস্থানে বেওয়ারিশ লাশ দাফন
        </div>

                    <div class="notice notice-info">
            <strong>সেবা: </strong> নির্দিষ্ট স্থানে পশু জবাই
        </div>

            </div>


</section>
@endsection
