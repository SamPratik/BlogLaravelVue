<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home() {
      return view('user.home');
    }

    public function about() {
        return view('user.about');
    }
}
