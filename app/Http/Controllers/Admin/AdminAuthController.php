<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login(): View
    {
        return view('admin.auth.login');
    }
}
