@extends('layouts.app')

@section('content')
    <div class="products__page--create">

        @if ($errors->any())
            <div class="alert alert--danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form__container">
            <form class="form" action="/products" enctype="multipart/form-data" method="post">
                @csrf
                <h6 class="form__title">Create New Product</h6>

                <div class="input required">
                    <label for="pname">Product Name</label>
                    <input name="pname" type="text" placeholder="Product Name">
                </div>
                <div class="input required">
                    <label for="desc">Description</label>
                    <textarea name="desc" id="desc" cols="30" rows="3" placeholder="Product Description"></textarea>
                </div>
                <div class="input required">
                    <label for="price">Price</label>
                    <input name="price" type="text" placeholder="Price">
                </div>
                <div class="input">
                    <label for="discount">Discount</label>
                    <input name="discount" type="text" placeholder="Discount (optional)">
                </div>
                <div class="input required">
                    <label for="image">Image</label>
                    <input name="image" type="file" placeholder="Image">
                </div>
                <div class="input">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="unisex">Unisex</option>
                    </select>
                </div>
                <button type="submit" class="button button--neutral outline">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@endsection
