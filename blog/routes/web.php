<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return 'hi about page';
// });

// Route::get('/contact', function () {
//     return 'hi i am contact';
// });

// Route::get('posts/{id}',function($id){
//     return "This is post number ".$id;
// });

// Route::get('admin/post/example',array('as'=>'admin.home',function(){
//     $url = Route('admin.home');
//     return "This is a URL: ".$url;
// }));


// Route::get('/post/{id}', [PostController::class,'index']);

// Route::resource('post', '\App\Http\Controllers\PostController');

Route::get('/contact',[PostController::class,'contact']);

Route::get('/post/{id}/{name}/{pass}', [PostController::class,'show_post']);

Route::post('/addHeroes',[PostController::class,'add_heroes']);

Route::get('/getHeroes',[PostController::class,'get_heroes']);


/*
|--------------------------------------------------------------------------
| Database Routes
|--------------------------------------------------------------------------

*/
// Route::get('/insert',function(){
//     DB::insert('insert into posts (title,content) values (?, ?)', ['What up', 'Hi friend']);
// });

// Route::get('/read/{id}', function ($id) {
//     $result = DB::select('select * from posts where id = ?', [$id]);
//     foreach($result as $post){
//         return $post->title;
//     }
    
// });

// Route::get('/update/{id}', function ($id) {
//     $updated = DB::update('update posts set title = "Im iron man" where id = ?', [$id]);
//     return $updated;
// });

// Route::get('/delete/{id}', function ($id) {
//     $deleted = DB::delete('delete from posts where id = ?', [$id]);
//     return $deleted;
// });


/*
|--------------------------------------------------------------------------
| Eloquent Routes
|--------------------------------------------------------------------------

*/

Route::get('/find/{id}', function ($id) {
    $post = Post::find($id);
    return $post->title;
});