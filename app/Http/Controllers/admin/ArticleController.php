<?php

namespace App\Http\Controllers\admin;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
  public function home()
  {

    return view('admin/articles/all', [
      'articles' => Article::all(),
    ]);
  }



  public function create()
  {
    return view('admin.articles.create');
  }

  // public function store(){

  // // $validate_data=Validator::make(request()->all(),[
  //   //   'title'=> 'required|min:10|max:50',
  //   //   'slug'=> 'required',
  //   //   'number'=> 'required',
  //   //   'email'=> 'required',

  //   // ])->validated();//روش معمول ولیدیشن در کنترلرها

  //   $validate_data= $this->validate(request(),[
  //     'title'=> 'required|min:10|max:50',
  //     'slug'=> 'required',
  //     'number'=> 'required',
  //     'email'=> 'required',

  //   ]);//روش دیگر اعتبارسنجی در کنترلرها





  //   Article::create([
  //     'title'=> $validate_data['title'],
  //     'slug'=>$validate_data['slug'],
  //     'number'=>$validate_data['number'],
  //     'email'=>$validate_data['email'],



  //   ]);
  //   return redirect('/admin/article');



  // }

  public function store(Request $request)
  {
    $validate_data = $request->validate([
      'title' => 'required|min:10|max:50',
      'slug' => 'required',
      'number' => 'required',
      'email' => 'required',


    ]);
    //روش Request اعتبارسنجی
    Article::create([
      'title' => $validate_data['title'],
      'slug' => $validate_data['slug'],
      'number' => $validate_data['number'],
      'email' => $validate_data['email'],



    ]);
    return redirect('/admin/article');
  }
}
