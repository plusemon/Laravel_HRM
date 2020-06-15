<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    return view('welcome');
});



/*Manager Section Route*/
Route::get('/manager', function () {
    return view('manager.index');
});
/*Manager Section Route*/
Route::get('/manager-profile', function () {
    return view('manager.profile.index');
});
Route::get('/manager-attandence', function () {
    return view('manager.attandence.index');
});
Route::get('/manager-add_attandence', function () {
    return view('manager.attandence.add_attandence');
});
Route::get('/manager-events', function () {
    return view('manager.events.index');
});
Route::get('/manager-task', function () {
    return view('manager.task.index');
});
Route::get('/manager-award', function () {
    return view('manager.award.index');
});
Route::get('/manager-notice', function () {
    return view('manager.notice.index');
});


/*PDF Generate Section Route*/
Route::get('/certificate', function () {
    return view('pdf.certificate');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
