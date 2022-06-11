@extends('layouts.app')

@section('content')
    @include('components.products', ['product_title' => 'Products', 'products' => $products])
@endsection
