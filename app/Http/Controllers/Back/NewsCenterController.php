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
    return view('back/createnews');
  }
  public function edit($id)
  {
    return view("back/editnews")->with('newsitem', NewsCenter::find($id));
  }
  public function store(Request $request)
  {
    $this->validate($request, [
        'title' => 'required',
        // 'title' => 'max:200',
        'content' => 'required',
        'imgpath' => 'required',

    ]);
    $newsitem = new NewsCenter;
    $newsitem->title = $request->get('title');
    $newsitem->author = $request->get('author');
    $newsitem->imgpath = $request->get('imgpath');
    $newsitem->content = $request->get('content');
    if ($newsitem->save())
    {
      return redirect('/back/newscenter');
    } else {
      return redirect()->back()->withInput()->withErrors('Save News faild');
    }
  }
  public function destroy($id)
  {
    NewsCenter::find($id)->delete();
    return redirect()->back();
    // return redirect()->back()->withInput()->withErrors('删除成功！');
  }

  public function update(request $request, $id){
  // $this->validate($request, [
  //   'title' => 'required',
  //   'body' => 'required',
  //   ]);
    $newsitem = NewsCenter::find($id);
    $newsitem->title = $request->get('title');
    $newsitem->author = $request->get('author');
    $newsitem->imgpath = $request->get('imgpath');
    $newsitem->content = $request->get('content');
    if ($newsitem->save()) {
          return redirect('/back/newscenter');
      } else {
          return redirect()->back()->withInput()->withErrors('更新失败！');
      }
}
}
