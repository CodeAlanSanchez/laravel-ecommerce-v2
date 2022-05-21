@extends('layouts.app')

@section('content')
    <div class="banner banner--main">
        <img src={{ $banner_img }} alt="Banner showing current promotions" class="banner_img">
    </div>
    @include('components.carousel')
    <h3 class="title">
        title
    </h3>
    <div class="products__list">

    </div>
@endsection
