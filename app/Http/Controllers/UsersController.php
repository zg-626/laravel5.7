<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UsersController extends Controller
{
    //
	public function create()
	{
		return view('users.create');
	}
	//编辑页
	public function show(User $user)
	{
		return view('users.show', compact('user'));
	}
	//验证用户表单数据
	public function store(Request $request)
	{
		$this->validate($request,[
			'name'=>'required|max:50',
			'email'=>'required|email|unique:users|max:255',//unique唯一性验证
			'password'=>'required|confirmed|min:6'//保证两次输入的密码一致,这时候则可以使用 confirmed
		]);

		$user=User::create([
			'name'=>$request->name,
			'email'=>$request->email,
			'password'=>bcrypt($request->password),
		]);
		
		Auth::login($user);

		session()->flash('success','注册成功');

		return redirect()->route('users.show', [$user]);
	}
}
