<?php

use App\Models\Post;
use App\Models\Docs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\vznosController;
use App\Http\Middleware\MyAuth;

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

Route::get('/', 'App\Http\Controllers\FrontViewController@index');
Route::get('/thanks', 'App\Http\Controllers\FrontViewController@thanks');
Route::post('/mail', 'App\Http\Controllers\MailController@send');
Route::get('/news/{id}', 'App\Http\Controllers\FrontViewController@news_one');
Route::get('/children', 'App\Http\Controllers\FrontViewController@children');
Route::get('/news', 'App\Http\Controllers\FrontViewController@news');
Route::get('/events/{id}', 'App\Http\Controllers\FrontViewController@events_one');
Route::get('/events', 'App\Http\Controllers\FrontViewController@events');
Route::get('/invite', 'App\Http\Controllers\FrontViewController@invite');
Route::get('/volonter', 'App\Http\Controllers\FrontViewController@volonter');
Route::get('/vznos', 'App\Http\Controllers\FrontViewController@vznos');
Route::get('/vznos_chek', 'App\Http\Controllers\vznosController@vznos')->name('vznos_chek');
// Route::get('/reports', 'App\Http\Controllers\FrontViewController@reports');
// Route::get('/reports/{id}', 'App\Http\Controllers\FrontViewController@reports_one');
// Route::get('/team', 'App\Http\Controllers\FrontViewController@team');
// Route::get('/team/{id}', 'App\Http\Controllers\FrontViewController@team_one');
Route::get('/supports', 'App\Http\Controllers\FrontViewController@support');
Route::get('/about', 'App\Http\Controllers\FrontViewController@about');
Route::get('/pc', 'App\Http\Controllers\FrontViewController@politic_conf');
Route::get('/user-agreement', 'App\Http\Controllers\FrontViewController@user_agreement');
Route::get('/documents', 'App\Http\Controllers\FrontViewController@docs');
Route::get('/contacts', 'App\Http\Controllers\FrontViewController@contacts');

Route::get('/admin', function(){
    return redirect()->route('login');
});

Route::post('ckeditor/upload', 'App\Http\Controllers\CKEditorController@upload')->name('ckeditor.image-upload')->middleware([MyAuth::class]);


Route::middleware([MyAuth::class])->group(function () {
    
    Route::prefix('admin')->group(function () {

        Route::get('login', 'App\Http\Controllers\LoginController@login')->name('login')->withoutMiddleware([MyAuth::class]);
        Route::post('login', 'App\Http\Controllers\LoginController@auth')->name('auth')->withoutMiddleware([MyAuth::class]);
        Route::get('logout', 'App\Http\Controllers\LoginController@logaut')->name('logaut');
    
        Route::resource('posts', PostController::class)->except(['destroy']);

        Route::get('childs/', 'App\Http\Controllers\ChildrenController@index');
        Route::get('child/create', 'App\Http\Controllers\ChildrenController@create');
        Route::get('child/{id}/edit', 'App\Http\Controllers\ChildrenController@edit');
        Route::post('child/store', 'App\Http\Controllers\ChildrenController@store')->name('child.store');
        Route::put('child/{id}/update', 'App\Http\Controllers\ChildrenController@update')->name('child.update');
        Route::get('child/{id}/img/edit', 'App\Http\Controllers\ChildrenController@imgEdit');
        Route::put('child/{id}/img/update', 'App\Http\Controllers\ChildrenController@imgUpdate')->name('child.img.update');
        Route::get('child/{id}/delete', 'App\Http\Controllers\ChildrenController@destroy');
        
        Route::get('posts/category/{id}', 'App\Http\Controllers\PostController@index');
        Route::get('posts/create/category/{id}', 'App\Http\Controllers\PostController@create');

        Route::get('reports', 'App\Http\Controllers\PostController@reports_show');

        Route::get('team', 'App\Http\Controllers\PostController@team_show');
        
        Route::get('img-update/{id}', 'App\Http\Controllers\PostController@imgEdit')->name('imgEdit');
        Route::put('img-update/{id}', 'App\Http\Controllers\PostController@imgUpdate')->name('imgUpdate');
        Route::get('posts/{id}/delete', 'App\Http\Controllers\PostController@destroy');

        Route::get('page/{id}', 'App\Http\Controllers\PageController@show')->name('page');
        Route::put('page/{id}', 'App\Http\Controllers\PageController@update')->name('page.update');
    
        Route::get('contacts', 'App\Http\Controllers\ContactsController@showC')->name('contacts');
        Route::put('contacts', 'App\Http\Controllers\ContactsController@updateC')->name('contacts.update');
    
        Route::get('requisites/{id}', 'App\Http\Controllers\ContactsController@showR')->name('requisites');
        Route::put('requisites/{id}', 'App\Http\Controllers\ContactsController@updateR')->name('requisites.update');
        
        Route::resource('docs', DocsController::class)->except(['destroy']);
        Route::get('doc-update/{id}', 'App\Http\Controllers\DocsController@edit_doc')->name('docEdit');
        Route::put('doc-update/{id}', 'App\Http\Controllers\DocsController@edit_doc_update')->name('docUpdate');
        Route::get('docs/{id}/delete', 'App\Http\Controllers\DocsController@destroy');
    
        
    
    });

});

//->middleware('MyAuth')
