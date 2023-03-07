<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//モデルのuse宣言
use App\Post;
use App\User;
class PostController extends Controller
{
    public function add()
    {
        return view('post');
    }
    //投稿を新規作成する
    public function create(Request $request)
    {
        //Validationを行う
        $this->validate($request, Post::$rules);
        $post = new Post;
        $form = $request->all();
        unset($form['_token']);
        
        //データベースに保存
        $post->fill($form);
        $post->save();

        //postにリダイレクトする
        return redirect('/post');
    }
    //投稿一覧を表示する
    public function index()
    {
        //モデルを使用して、ユーザー情報・つぶやき情報を取得する
        $user = User::all();
        $post = Post::orderBy('created_at', 'desc')->get();

        //viewにデータを渡す
        return view('post',['posts' => $post, 'users' => $user]);
    }

    //投稿を削除する
    public function delete(Request $request)
    {
        //受け取ったモデルのインスタンスに対してdeleteメソッドを実行
        $post = Post::find($request->id);
        $post->delete();

        //postにリダイレクトする
        return redirect('/post');
    }  
}
