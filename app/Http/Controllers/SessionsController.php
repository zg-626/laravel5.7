<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    //
    public function create()
    {
    	return view('sessions.create');
    }

    //验证登录
    public function store(Request $request)
    {
    	$data=$this->validate($request,[
    		'email'=>'required|email|max:255',
    		'password'=>'required'

    	]);

    	if(Auth::attempt($data)){
    		session()->flash('success','欢迎回来');
    		return redirect()->route('users.show',[Auth::user()]);
    	}else{
    		session()->flash('danger','邮箱和密码不对');
    		return redirect()->back()->withInput();
    	}
    }

    //退出登录
	public function destroy()
	{
		# code...
		Auth::logout();
		session::flash('success','成功退出');
	}
}
