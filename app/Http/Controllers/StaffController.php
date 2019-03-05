<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use Validator;

class StaffController extends Controller
{
  public function index()
  {
    return view('back/showstaff')->with('staffitems', Staff::paginate(5));
    // return view('back/shownews')->with('newsitems', NewsCenter::orderBy('created_at', 'desc')->paginate(3));
  }

  public function create()
  {
    return view('back/createstaff');
  }

  public function showteachingstaff()
  {
    return view('front/teachingstaff')->with('staffitems', Staff::where('type', '=', '1')->get());
  }

  public function showsupportstaff()
  {
    return view('front/supportstaff')->with('staffitems', Staff::where('type', '=', '2')->get());
  }

  public function store(Request $request)
  {
    $this->validate($request, [
        'name' => 'required',
        'title' => 'required',
        'type' => 'required',
        'image' => 'required',

    ]);


    $image = $request->file('image');
    $imagename =time() . $image->getClientOriginalName();
    $destinationPath = 'img/staff/';
    $image->move($destinationPath, $imagename);

    $staffitem = new Staff;
    $staffitem->name = $request->get('name');
    $staffitem->title = $request->get('title');
    $staffitem->imgpath = 'img/staff/' . $imagename;
    $staffitem->type = $request->get('type');



    if ($staffitem->save())
    {
      return redirect('/back/staff');
    } else {
      return redirect()->back()->withInput()->withErrors('Save News faild');
    }
  }



  public function edit($id)
  {
    return view("back/editstaff")->with('staffitem', Staff::find($id));
  }


  public function update(request $request, $id){
  // $this->validate($request, [
  //   'title' => 'required',
  //   'body' => 'required',
  //   ]);




    $staffitem = Staff::find($id);
    $staffitem->name = $request->get('name');
    $staffitem->title = $request->get('title');

    // if user selected new photo, upload photo
    if ($request->hasFile('image')) {
      $image = $request->file('image');
      $imagename =time() . $image->getClientOriginalName();
      $destinationPath = 'img/staff/';
      $image->move($destinationPath, $imagename);
      $staffitem->imgpath = 'img/staff/' . $imagename;
    }


    $staffitem->type = $request->get('type');
    if ($staffitem->save()) {
          return redirect('/back/staff');
      } else {
          return redirect()->back()->withInput()->withErrors('更新失败！');
      }
}





  public function destroy($id)
  {
    Staff::find($id)->delete();
    return redirect()->back();
    // return redirect()->back()->withInput()->withErrors('删除成功！');
  }

}
