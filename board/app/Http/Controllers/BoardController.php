<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class BoardController extends Controller
{

    public function index()
    {
        //展示所有人的留言
        $messages = DB::table('messages')->orderByDesc('id')->paginate(10);
        return view('index',['messages' => $messages]);
    }


    public function register()
    {
        //注册用户
        return view('register');
    }


    public function write()
    {
        //写新留言
        return view('write');
    }

    public function mstore(Request $request)
    {
        if(!Auth::check())
            return redirect('login');
        $message = $request->input('message');
        $username = Auth::user()->username;
        if(DB::insert("insert into messages(`username`,`message`,`time`) values(?, ?, ?)", [$username, $message, Carbon::now()]))
        {
            return redirect('index');
        }

    }
    public function login()
    {
        //登录页面
        if(Auth::check())
            return view('home');
        else
            return view('login');
    }

    public function login_P(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $result = Auth::attempt(['username' => $username, 'password' => $password]);
        if($result)
        {
            return redirect('/home');
        }


    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|between:3,12|unique:users',
            'password' => 'required|confirmed|string|min:6|',
            'password_confirmation'=>'required|string|min:6'
        ],[
            'username.required' => "Username cannot be empty.",
            'username.between' => "The length of username should be between 3-12.",
            'password.required' => "Password cannot be empty.",
            'password.min' => "The length of password should be longer than 6.",
            'password.confirmed' => "Passwords are different."
        ]);
        if($validator->fails())
        {
            return back()->withErrors($validator);
        }
        else
        {
            $username = $request->input('username');
            $password = $request->input('password');
            DB::insert("insert into users(`username`,`password`) values(?, ?)", [$username, Hash::make($password)]);
            return redirect('/login');
        }


    }
    public function delete(Request $request)
    {
        $id = $request->input('id');
        $username = DB::select("select `username` from `messages` where id = ? limit 1",[$id]);
        if($username[0]->username == Auth::user()->username)
            DB::delete("delete from `messages` where id = ?",[$id]);
        return redirect()->back();

    }

    public function logout()
    {
        if (Auth::check())
        {
            Auth::logout();
            return redirect('index');
        }
        else
        {
            return redirect('login');
        }
    }
}
