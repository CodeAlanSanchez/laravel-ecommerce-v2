@extends('layouts.app')

@section('content')
    <div class="form__container">
        <form action="/p" enctype="multipart/form-data" method="post">
            @csrf

            <div class="input required">
                <label for="pname">Product Name</label>
                <input name="pname" type="text" placeholder="Product Name">
            </div>
            <div class="input required">
                <label for="desc">Description</label>
                <input name="desc" type="text" placeholder="Description">
            </div>
            <div class="input required">
                <label for="price">Price</label>
                <input name="price" type="text" placeholder="Price">
            </div>
            <div class="input required">
                <label for="image">Image</label>
                <input name="image" type="file" placeholder="Image">
            </div>
            <div class="input">
                <label for="discount">Discount</label>
                <input name="discount" type="file" placeholder="Discount (optional)">
            </div>
            <div class="input">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="unisex">Unisex</option>
                </select>
            </div>
        </form>
    </div>
@endsection
