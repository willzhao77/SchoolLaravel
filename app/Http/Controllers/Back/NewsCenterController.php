<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewsCenter;

class NewsCenterController extends Controller
{
  public function index()
  {
    return view('back/shownews')->with('newsitems', NewsCenter::orderBy('created_at', 'desc')->paginate(3));
  }
  public function create()
  {

  }
  public function edit($id)
  {
    return view("back/editnews")->with('newsitem', NewsCenter::find($id));
  }
  public function newsupdate()
  {

  }
  public function delete()
  {

  }
}
