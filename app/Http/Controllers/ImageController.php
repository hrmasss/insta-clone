<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120']);

        $imageName = time() . '.' . $request->image->extension();

        $request->image->storeAs('public/uploads/images', $imageName);

        $image = new Image;
        $image->name = $imageName;
        $image->save();

        return redirect()->route('home');
    }

    public function index()
    {
        $images = Image::latest()->take(5)->get();
        $imageUrls = $images->map(function ($image) {
            return asset('storage/uploads/images/' . $image->name);
        });
        return view('index', ['images' => $imageUrls]);
    }

}