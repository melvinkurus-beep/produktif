<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController;

Route::get('/', function () {
    return view('welcome');
});

#Route::get($uri, $callback);
#Route::post($uri, $callback);
#Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

Route::match(['get', 'post'], '/', function () {
    //
});

Route::any('/', function () {
    //
});

route::view('/welcome','welcome');
route::view('/welcome','welcome',['name'=>'taylor']);

route::get('user/{name?}',function($name=null)
{return $name;
});
route::get('user/{name?}',function($name='john')
{return $name;
});

route::get('user/{name}',function($name){
    //
})->where('name','[A-Za-z]+');
route::get('user/{id}',function($id){
    //
})->where('id','[0-9]+');
route::get('user/{id}/{name}',function($id,$name){
    //
})->where(['id' => '[0-9]+','name'=> '[a-z]+']);
//Route::get('user','ManagementUserController@index');
//use app\Http\Controllers\ManagementUserController;
Route::resource('user','ManagementUserController');
  Route::get("/home",function(){
     return view("home");
 });
Route::get('/index', [ManagementUserController::class, 'index']);