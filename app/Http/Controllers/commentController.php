<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
class commentController extends Controller
{
    public function index($id){
         $comments = $this->getAllComments($id);
         return view('comment',['comments'=>$comments]);
    }
    /**
     * title_idのデータを取得する
     */
    public function getAllComments($id){
        $comments = comment::get()->where('title_id',$id);
        return $comments;
    }
    /**
     * データベースへコメントを登録する
     * @param int user_id
     * @param int category_id
     * @param string comment
     * @return bool
     * 
     * @return 
     */
    public function createComment(Request $request){

    }
}
