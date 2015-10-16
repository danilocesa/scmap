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
    $feed = new SimplePie();
    $feed->set_feed_url("http://www.scmap.org/home/feed/rss");
    $feed->enable_cache(false);
//    $feed->set_cache_location(storage_path().'/cache');
//    $feed->set_cache_duration(60*60*12);
    $feed->set_output_encoding('utf-8');
    $feed->init();
    return view('pages.home')->with('feed',$feed);
});

//About
Route::get('about', function()
{
    $aboutDesc = DB::select('select * from pages where category = "about" and parent = "1" ');
    return view('pages.about.about')->with('desc',$aboutDesc);
});

//About board
Route::get('about-board', function()
{
    return View::make('pages.about.about-board');
});

//About history
Route::get('about-history', function()
{
    return View::make('pages.about.about-history');
});

//Contact
Route::get('contact-us', function()
{
    return View::make('pages.about.contact-us');
});


//News
Route::get('news', function()
{
    return View::make('pages.news.news');;
});


//Members
Route::get('members', function()
{
    $memberDesc = DB::select('select * from pages where category = "members" and parent = "1" ');
    return View::make('pages.members.members')->with('desc',$memberDesc);
});

//Members Benefits
Route::get('member-benefits', function()
{
    //$memberDesc = DB::select('select * from pages where category = "members" and parent = "1" ');
    return View::make('pages.members.member-benefits');
});

//Member Requirements
Route::get('member-requirements', function()
{
    return View::make('pages.members.member-requirements');
});

//Member Download
Route::get('member-download', function()
{
    return View::make('pages.members.member-download');
});

//Member List
Route::get('member-list', function()
{
    return View::make('pages.members.member-list');
});

//Events
Route::get('events', function()
{
    $eventsDesc = DB::select('select * from pages where category = "events" and parent = "1" ');
    return View::make('pages.events.events')->with('desc',$eventsDesc);
});

//Events Conference
Route::get('events-conference', function()
{
    return View::make('pages.events.events-conference');
});

//Events Lic
Route::get('events-lic', function()
{
    return View::make('pages.events.events-lic');
});

//Events Vismin
Route::get('events-vismin', function()
{
    return View::make('pages.events.events-vismin');
});

//Events SSCE
Route::get('events-ssce', function()
{
    return View::make('pages.events.events-ssce');
});

//Events Ceoforum
Route::get('events-ceoforum', function()
{
    return View::make('pages.events.events-ceoforum');
});

//Events GMM
Route::get('events-gmm', function()
{
    return View::make('pages.events.events-gmm');
});

//Events Fellowship
Route::get('events-fellowship', function()
{
    return View::make('pages.events.events-fellowship');
});

//Advocacies
Route::get('advocacies', function()
{
    return View::make('pages.advocacies');
});

//Academe
Route::get('academe', function()
{
    return View::make('pages.academe');
});

//Advocacies
Route::get('research', function()
{
    return View::make('pages.research');
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

    Route::resource('admin/about', 'Admin\AboutPages', [
        'middleware' => ['auth', 'roles'],
        'roles' => ['administrator','manager','root']
    ]);

    Route::post('admin/pages/update',[
        'middleware' => ['auth', 'roles'],
        'uses' => 'Admin\AdminPages@update',
        'roles' => ['administrator','manager','root']
    ]);

//},'roles'=> ['administrator', 'manager']);




