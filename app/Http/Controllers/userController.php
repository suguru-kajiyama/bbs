<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class userController extends Controller
{
    public function create(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        try{
            user::insert([
                'name' => $name,
                'email' => $email,
                'password' => password_hash($password,PASSWORD_DEFAULT)
            ]);
            return redirect('/'); 
        }catch(\Exception $e){
            $msg="登録に失敗";
            return view('/signup')->with('msg',$msg);
        }
    }public function login(Request $request){
        //users tableからmail,passwordの一致するものを探す
        //true contentsへ　false errorをtopへ
        $email = $request->input('email');
        $password = $request->input('password');
        $user = user::where('email',$email)->first();
        if($user == null){
            throw Exception();
        }
        if(password_verify($password ,$user['password']) ){
            session(['user_id' => $user['user_id']]);
            return redirect('/contents');
        }else{
            echo '<p>found</p>';
        }
    
    }
}
