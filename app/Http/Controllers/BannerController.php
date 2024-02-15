<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function banner() {
        $data = Banner::all();
        return view('banner', ['banners' => $data]);
    }
}
