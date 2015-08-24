<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminDashboard extends Base_Controller
{
    /**
     * Index view of Dashboard
     *
     * @param NULL
     * @return view
     *
     */

    public function getIndex()
    {
        return view('admin.dashboard');
    }

    /**
     * Handle an incoming request of profile settings.
     *
     *
     * @param Request
     * @return Response
     */
    public function postProfile(Request $request){
        //validation
        $validateMessages = [
            'password.required' => 'Please enter a new or current password',
        ];
        $this->validate($request, [
            'fullName' => 'required',
            'username' => 'required|min:6',
            'email' => 'required|email',
            'password' => 'required|alpha_num|confirmed|min:6',
            'password_confirmation' => 'same:password',
        ],$validateMessages);

        //Update profile
        User::find(auth()->user()->id)->update(array(
            'name'      => $request->input('fullName'),
            'user_name' => $request->input('username'),
            'email'     => $request->input('email'),
            'password'  => $request->input('password')
        ));

        //Success message
        $request->session()->flash('flashSuccess', 'Profile update successfully!');

        return redirect()->back()->withInput();


    }


}