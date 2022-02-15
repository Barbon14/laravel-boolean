<?php

namespace App\Http\Controllers;

use App\Postcard;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getPostcardsList()
    {

        $postcards = Postcard::all();

        return json_encode($postcards);
    }
}
