<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsCenter;

class DashboardController extends Controller
{
  public function index()
  {
    // return all data from database
    // return view('back/shownews')->with('newsitems', NewsCenter::orderBy('created_at', 'desc')->paginate(3));
    return view('back/adminwelcome');
  }
  public function showstaff()
  {
    return view('back/showstaff');
  }
}
