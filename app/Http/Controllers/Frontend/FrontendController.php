<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Hero;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    //
    public function index()
    {
        $hero = Hero::first();
        $context = [
            'hero' => $hero
        ];
        return view('users.home', $context);
    }
}
