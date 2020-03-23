<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\title;

class titleController extends Controller
{
    public function index(){
        $titles = $this->getAllTitles();
        return view('contents',['titles'=>$titles]);
        
    }public function getAllTitles(){
        return title::all(); 
    }public function create(Request $requet){
        var_dump($request);
    }public function createTitle(Request $request){
        $title_name = $request->input('title');
        $user_id = $request->session('user_id');
        title::insert([
            'name' => $title_name,
            'user_id' => $user_id
        ]);
        return redirect('/contents');
    }   
}
