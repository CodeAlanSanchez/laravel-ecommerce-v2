@extends('layouts.app')

@section('content')
    <div class="banner banner--main">
        <img src={{ $banner_img }} alt="Banner showing current promotions" class="banner_img">
    </div>
    @include('components.carousel', [
        'slides' => [
            [
                'image_url' => asset('storage/carousel_0.png'),
                'image_name' => 'first promotional deal for this month',
            ],
            [
                'image_url' => asset('storage/carousel_1.png'),
                'image_name' => 'second promotional deal for this month',
            ],
            [
                'image_url' => asset('storage/carousel_3.png'),
                'image_name' => 'third promotional deal for this month',
            ],
        ],
    ])
    <h4 class="title">
        title
    </h4>
    <div class="products__list">

    </div>
@endsection
