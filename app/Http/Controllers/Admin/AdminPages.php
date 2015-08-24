<?php

namespace App\Http\Controllers\Admin;

use Input;
use App\AdminPage;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\Base_Controller as Base_Controller;

class AdminPages extends Base_Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $AdminPages  = AdminPage::all();
        return view('admin.pages.indexPages',['adminPages' => $AdminPages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $pageProp  = AdminPage::findorFail($id);
        return response()->json($pageProp);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {

//        $this->validate($request, [
//            'pageDesc' => 'required',
//        ]);
//
//        $adminPage = AdminPage::find($id);
//        $adminPage->description = $request->input('pageDesc');

//
//        $request->session()->flash('flashSuccess', 'Page description successfully update!');

        var_dump($_POST);
//        return response()->json($_POST);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
