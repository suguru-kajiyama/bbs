<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use DB;
class commentController extends Controller
{
    public function index($id){
         $comments = $this->getAllComments($id);
         $title = DB::table('titles') -> select('name') ->where('id',$id) ->first();
         return view('comment',['comments'=>$comments])->with('title',$title->name)->with('title_id',$id) ;
    }
    /**
     * title_idのデータを取得する
     * 2020.3.22現在は特に分ける意味なし
     * 将来commentをjson形式で取得したくなったときようにメソッド化した
     */
    public function getAllComments($id){
        $comments = comment::get()->where('title_id',$id);
        return $comments;
    }
    /**
     * データベースへコメントを登録する
     * @param int id (title_id)
     * @param int user_id
     * @param string comment
     * @return bool
     * @return 
     */
    public function create($id,Request $request){
        $title_id = $id;
        $user_id = $request -> session('user_id');
        $text = $request -> input('text');
        $msg = "";
        try{ 
           Db::table('comments') -> insert([
            'user_id' => 1,
            'title_id' => $id,
            'comment_text' => $text
        ]);
        }catch(Exception $e){
            $msg = "failed";
        }finally{
            return redirect("/contents/".$id)->with('msg',$msg);
        }    
    }
}
