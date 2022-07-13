<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class RegisterController extends Controller
{
    public function register(){
        $title ="Trang đăng kí";
        return view('register.register',compact('title'));
    }
    
   public function postRegister(Request $request){
   User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'username' => $request['username'],
        'level'=>0,
        'password' => bcrypt($request['password']),
    ]);
    return redirect()->route('home');
   }
   public function login(){
    $title ="Trang đăng nhập";
    return view('register.login',compact('title'));
}
    public function postLogin(Request $request)
    {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            $user = Auth::user()->level;
            if ($user == 0) {
                
                return  redirect()->route('home');
            }else{
                return redirect()->route('admin.index');
            }
            return $user;
        } else {
            $alert = 'Đăng nhập thất bại';
            return redirect()->route('login')->with('alert',$alert);
        }
    }
}
