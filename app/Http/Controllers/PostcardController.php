<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostcardController extends Controller
{
    public function create() {

        return view('pages.postcards.create');
    }
}
