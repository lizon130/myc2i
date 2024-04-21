@extends('layouts.master')

@section('title')
Support
@endsection


@section('main-content')
<section>
    <h1 class="title">Support</h1>
    <div class="roboto-slab">
        <div class="d-flex justify-content-center flex-column align-items-center">
            <i class="fa-solid fa-location-dot" style="padding: 20px 23.5px;color:white;aspect-ratio: 1 / 1;background-color:#DB9E30;border-radius:50%;font-size:30px;"></i>

            <h3 class="section-title">Our Location</h3>
            <p>8111 LYNDON B JOHNSON FWY STE 1250</p>
            <p>DALLAS, TX 75251-1319</p>
            <p>USA</p>
        </div>
        <div class="d-flex justify-content-center flex-column align-items-center" style="margin-top: 30px;">
            <i class="fa-solid fa-phone" style="padding: 20px;color:white;aspect-ratio: 1 / 1;background-color:#DB9E30;border-radius:50%;font-size:30px;"></i>

            <h3 class="section-title">Phone</h3>
            <p>+ 1 469 867 9430</p>
        </div>
    </div>
</section>

<style>
    .info-section {
        text-align: left!important;
        background-color: #f8f8f8;
        padding: 50px;
        border-radius: 10px;
    }
    .section-title {
        color: #441a05;
        font-family: 'Cinzel Decorative', cursive;
        font-size: 21px;
        text-align: left!important;
        margin-top: 10px;
        padding-bottom: 0;
    }
    .section-sub-title {
        color: #441a05;
        font-size: 16px;
    }

    p{
        margin-bottom: 0;
    }
</style>
@endsection
