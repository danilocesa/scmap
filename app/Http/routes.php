<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Index
Route::get('/', function()
{
    return view('pages.home');
});

//About
Route::get('about', function()
{
    $users = DB::select('select * from pages where category = "about" and parent = "1" ');
    return View::make('pages.about',$users);
});
//About history
Route::get('about-history', function()
{
    return View::make('pages.about-history');
});

//Contact
Route::get('contact-us', function()
{
    return View::make('pages.contact-us');
});

//Members
Route::get('members', function()
{
    return View::make('pages.members');
});

//Member Requirements
Route::get('member-requirements', function()
{
    return View::make('pages.member-requirements');
});

//Events
Route::get('events', function()
{
    return View::make('pages.events');
});

//Events Conference
Route::get('events-conference', function()
{
    return View::make('pages.events-conference');
});

//Events Lic
Route::get('events-lic', function()
{
    return View::make('pages.events-lic');
});

//Events Vismin
Route::get('events-vismin', function()
{
    return View::make('pages.events-vismin');
});

//Events Vismin
Route::get('events-gmm', function()
{
    return View::make('pages.events-gmm');
});

//Events Fellowship
Route::get('events-fellowship', function()
{
    return View::make('pages.events-fellowship');
});

//Admin

/** Admin Guest*/
Route::group(['middleware' => 'guest'], function () {
    /** Admin Login */
    Route::get('admin',  'Admin\AdminController@getIndex');
    /** Login Post */
    Route::post('admin', 'Admin\AdminController@postIndex');


});

/** Admin Logout */
Route::get('adminLogout', function(){
    Auth::logout();
    Session::flush();
    return redirect()->to('admin');
});

/** Admin Group */
//Route::group(['prefix' => 'admin','middleware' => 'auth','roles'], function () {
    /** Admin Dashboard */
    Route::get('admin/dashboard',[
        'middleware' => ['auth', 'roles'],
	    'uses' => 'Admin\AdminDashboard@getIndex',
	    'roles' => ['administrator','manager','root']
    ]);
    /** Admin Settings */
    Route::get('admin/profile-settings',function(){
        return view('admin.settings');
    });
    Route::post('admin/profile-settings',[
        'middleware' => ['auth', 'roles'],
        'uses' => 'Admin\AdminDashboard@postProfile',
        'roles' => ['administrator','manager','root']
    ]);

    Route::resource('admin/pages', 'Admin\AdminPages', [
        'middleware' => ['auth', 'roles'],
        'roles' => ['administrator','manager','root']
    ]);

    Route::post('admin/pages/update',[
        'middleware' => ['auth', 'roles'],
        'uses' => 'Admin\AdminPages@update',
        'roles' => ['administrator','manager','root']
    ]);

//},'roles'=> ['administrator', 'manager']);




