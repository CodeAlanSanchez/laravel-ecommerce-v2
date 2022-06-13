<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use Str;
use Storage;

use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth as FacadesJWTAuth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $gender = $request->route('group');

        if ($gender != null) {
            $products = Product::select()->where('gender', $gender)->get();
            return view('products.index', ['products' => $products]);
        }

        $products = Product::all();

        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:1023',
            'price' => 'required|numeric|max:999',
            'image' => 'required|image',
            'discount' => 'numeric',
            'gender' => ''
        ]);

        if (preg_match('/^data:image\/(\w+);base64,/', $base64_image = request('image'))) {
            $image = substr($base64_image, strpos($base64_image, ',') + 1);

            $image = base64_decode($image);

            $imageName = Str::random(16);

            Storage::disk('public')->put($imageName . ".png", $image);

            $imagePath = Storage::url($imageName . ".png");
        }

        $user = JWTAuth::user();

        $product = $user->products()->create([
            'name' => $validated['name'],
            'image' => $imagePath,
            'price' => $validated['price'],
            'category' => $validated['category'],
            'discount' => $validated['discount'],
        ]);

        return view('products.view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
