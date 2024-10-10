<?php

use App\Http\Controllers\admin\ArticleController;

use Illuminate\Support\Facades\Route;
// use App\Models\Userid;
use App\Models\Article;
use App\Models\Mibro;
// use App\Models\Customer;
use Database\Factories\MibroFactory;
// use Database\Factories\CustomerFactory;
use Illuminate\Support\Facades\Validator;



// Route::get('/admin', 'CustomerController@home'

//       //  $users=Userid::all();


//     // return view('index');



// );

// Route::get('/post' , function(){
//   // return MibroFactory::new()->create();
//   return Mibro::factory(15)->create();
//   // return Mibro::factory()->create();


// });

// Route::get('/user' , function(){
//   // return CustomerFactory::new()->create();
//   // $user=CustomerFactory::new()->create();
//   $user=Customer::factory(15)->create();
//   dd($user);

// });

Route::prefix('/admin')->group(function () {



  Route::get('/article/create', [ArticleController::class, 'create']);

  Route::post('/article/create',[ArticleController::class, 'store']

    // function(){

    // dd($_POST);//توصیه نمیشود(دریافت اطلاعات)
    // dd(request()->all());/به روش helper function
    // dd(Request::all());//به روش کلاس ریکوِست و فساد




    // //روش اول /فرستادن به دیتابیس


    // $article= new Article();
    // $article->title=request('title');
    // $article->slug=request('slug');
    // $article->number=request('number');
    // $article->email=request('email');
    // $article->save();





    //validation
// روش اول و بهتر ولیدیشن
    // $validator= Validator::make(request()->all(),[
    //   'title'=> 'required|min:10|max:50',
    //   'slug'=> 'required',
    //   'number'=> 'required',
    //   'email'=> 'required',

    // ]);
    // if ($validator->fails()) {
    //   return redirect()->back()->withErrors($validator);
    // };




    // / با روش اول ولیدیشن بکار میرود//=>روش دوم و بهتر فرستادن به دیتابیس
//با روش دوم ولیدیشن هم میشود ولی بدون تعریف متغیر
    // Article::create([
    //   'title'=> request('title'),
    //   'slug'=>request('slug'),
    //   'number'=>request('number'),
    //   'email'=>request('email'),
    //هرگز در متد پست از ویوو استفاده نشود


    // ]);


    //روش دوم و اسانتر ولیدیشن

    // $validate_data=Validator::make(request()->all(),[
//     'title'=> 'required|min:10|max:50',
//     'slug'=> 'required',
//     'number'=> 'required',
//     'email'=> 'required',

    //   ])->validated();//به کنترلر منتقل شد




    // Article::create([
    //   'title'=> $validate_data['title'],
    //   'slug'=>$validate_data['slug'],
    //   'number'=>$validate_data['number'],
    //   'email'=>$validate_data['email'],



    // ]);
    // return redirect('/admin/article');//به کنترلر منتقل شد

    // };
  );
  // Route::get('/', [ArticleController::class, 'edit']);
  Route::post('/article/{id}/edit', function ($id) {
    $article = Article::find($id);
    return view('admin.articles.edit', [
      'article' => $article
    ]);
  });

  Route::put('/article/{id}/edit', function ($id) {
    $validate_data = Validator::make(request()->all(), [
      'title' => 'required|max:50',
      'slug' => 'required',
      'number' => 'required',
      'email' => 'required',

    ])->validated();
    // $article=Article::find($id);
    // if(is_null($article)){
    //   abort(404);
    // }
    // return $article->update([
    //   'title'=> $validate_data['title'],
    // 'slug'=>$validate_data['slug'],
    // 'number'=>$validate_data['number'],
    // 'email'=>$validate_data['email'],

    // ])

    // //یا

    $article = Article::findOrFail($id);


    // $article->update([
    //   'title'=> $validate_data['title'],
    // 'slug'=>$validate_data['slug'],
    // 'number'=>$validate_data['number'],
    // 'email'=>$validate_data['email'],

    // ]);
    $article->update($validate_data);
    // return back();
    return redirect('/admin/article');

  });




  // Route::get('/article',function(){
  //   return view('admin.articles.all',[
  //     'articles'=>Article::all(),
  //   ]);


  // });

  Route::get('/article', [ArticleController::class, 'home']);


  Route::delete('/article/{id}', function ($id) {
    $article = Article::findOrFail($id);
    $article->delete();
    return back();

  });


});

