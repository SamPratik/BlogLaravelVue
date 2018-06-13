<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function fileForm() {
      return view('test.fileForm');
    }

    public function upload(Request $request) {
        return $request->all();
    }
}
