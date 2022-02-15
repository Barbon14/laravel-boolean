<?php

namespace App\Http\Controllers;

use App\Postcard;
use Illuminate\Http\Request;

class PostcardController extends Controller
{
    public function create() {

        return view('pages.postcards.create');
    }

    public function store(Request $request) {

        $data = $request -> validate([

            'sender' => 'required|string',
            'address' => 'required|string',
            'text' => 'required|string',
            'image' => 'required'
        ]);

        
        $imageFile= $data['image'];
        $imageName = rand(100000, 999999) . '_' . time() . '.' . $imageFile -> getClientOriginalExtension();

        $imageFile -> storeAs('/img/postcards/', $imageName, 'public');
        $data['image'] = $imageName;

        $postcard = Postcard::create($data);

        return redirect() -> route('home');
    }
}
