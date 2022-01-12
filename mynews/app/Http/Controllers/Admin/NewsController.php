<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//以下を追記することでNews Modelが扱えるようになる
use App\News;

class NewsController extends Controller
{
    //以下を追記
    public function add()
    {
        return view('admin.news.create');
    }
    
     // 以下を追記
  public function create(Request $request)
  {
      // 以下を追記
      // Varidationを行う
      $this->validate($request, News::$rules);
      
      $news = new News;
      $form = $request->all();
      
      if (isset($form['image'])) {
          $path = $request->file('image')->store('public/image');
          $news->image_path = basename($path);
      } else {
          $news->image_path = null;
      }
      
      unset($form['_token']);
      unset($form['image']);
      
      $news->fill($form);
      $news->save();
      // admin/news/createにリダイレクトする
      return redirect('admin/news/create');
  }  
}