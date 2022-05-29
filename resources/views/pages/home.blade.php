@extends('layouts.app')

@section('content')
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
    @include('components.products', [
        'product_title' => 'Popular',
        'products' => [
            [
                'link' => 'go.om',
                'image' =>
                    'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.pLjna-5iqTKTXe6_yXK8zQHaJQ%26pid%3DApi&f=1',
                'name' => 'Black T-Shirt',
                'description' => '100% Cotton, paraben-free t-shirt made in the USA',
                'price' => '19.99',
            ],
        ],
    ])
    <div class="products__list">

    </div>
@endsection
