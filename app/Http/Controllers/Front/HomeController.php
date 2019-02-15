<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsCenter;

class HomeController extends Controller
{
  public function index()
  {
    return view('/front/home')->with('newsitems', NewsCenter::orderBy('created_at', 'desc')->take(3)->get());
  }
}
