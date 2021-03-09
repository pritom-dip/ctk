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


            <div class="notice notice-info">
        <strong>হেডলাইন: </strong> “পৌর কর সংক্রান্ত” <span
                class="pull-right text-info readMore">বিস্তারিত </span>
        <div class="desc">

            <p>
                নিয়মিত পৌর কর পরিশোধের মধ্য দিয়ে পৌরসভার উন্নয়নে সহায়তা করুন।
            </p>
            <a href="notice/8.html">বিস্তারিত </a>
        </div>
    </div>

            <div class="notice notice-info">
        <strong>হেডলাইন: </strong> জন্ম ও মৃত্যু নিবন্ধন নিশ্চিত করে, পৌর নাগরিক সুবিধা গ্রহণ করুন। <span
                class="pull-right text-info readMore">বিস্তারিত </span>
        <div class="desc">

            <p>
                জন্ম ও মৃত্যু নিবন্ধন নিশ্চিত করে, পৌর নাগরিক সুবিধা গ্রহণ করুন।
            </p>
            <a href="notice/7.html">বিস্তারিত </a>
        </div>
    </div>

            <div class="notice notice-info">
        <strong>হেডলাইন: </strong> “কোভিট-19 (করোনা) ভাইরাস” <span
                class="pull-right text-info readMore">বিস্তারিত </span>
        <div class="desc">

            <p>
                কোভিট-19 (করোনা) ভাইরাস এর কারনে সরকারের সকল নির্দেশনা মেনে, বেনাপোল পৌরসভার সকল কার্যাদি চলমান আছে। আপনার নাগরিক সমস্যা সমাধানে বেনাপোল পৌরসভা সর্বদা আপনার পাশে আছে।
            </p>
            <a href="notice/6.html">বিস্তারিত </a>
        </div>
    </div>

            <div class="notice notice-info">
        <strong>হেডলাইন: </strong> “বেনাপোল পৌরসভার পানির সংযোগ ব্যবহারকারীগণ” <span
                class="pull-right text-info readMore">বিস্তারিত </span>
        <div class="desc">

            <p>
                বেনাপোল পৌরসভার পানির সংযোগ ব্যবহারকারীদের জানানো যাচ্ছে যে, গত মে-মার্চ/2020 খ্রি: 3 (তিন) মাসের সারচার্জ ব্যতিরেকে পানির বিল প্রদান করতে হবে। প্রয়োজনে আপনার পানির বিলটি নিয়ে বেনাপোল পৌরসভায় যোগাযোগ করার জন্য অনুরোধ করা হলো।
            </p>
            <a href="notice/5.html">বিস্তারিত </a>
        </div>
    </div>

            <div class="notice notice-info">
        <strong>হেডলাইন: </strong> “Benapole Paurashava স্মার্ট সিটি অ্যাপস এর মাধ্যমে পেশ করুন সকল নাগরিক জিজ্ঞাস “ <span
                class="pull-right text-info readMore">বিস্তারিত </span>
        <div class="desc">

            <p>
                Google Play Store থেকে Benapole Paurashava লিখে সার্চ করে স্মার্ট সিটি অ্যাপস ডাউনলোড করতে পারবেন।
            </p>
            <a href="notice/4.html">বিস্তারিত </a>
        </div>
    </div>

            <div class="notice notice-info">
        <strong>হেডলাইন: </strong> “ আপনার শহরকে ডেঙ্গুমুক্ত রাখতে, শহর পরিষ্কার পরিচ্ছন্ন রাখুন ” <span
                class="pull-right text-info readMore">বিস্তারিত </span>
        <div class="desc">

            <p>
                “ আপনার শহরকে ডেঙ্গুমুক্ত রাখতে, শহর পরিষ্কার পরিচ্ছন্ন রাখুন ”
            </p>
            <a href="notice/3.html">বিস্তারিত </a>
        </div>
    </div>


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
