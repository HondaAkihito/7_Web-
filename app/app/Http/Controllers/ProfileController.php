<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Budget;
use App\Spending;
use App\User;
use Carbon\Carbon;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            // ユーザーはログイン済み
            // $profile = Auth::user();
            // $profile = Auth::guard('api')->user()->get();
            // $profile = Auth::guard('api')->user()->get();
            // $profile = Auth::guard('api')->user()->get();
            // →これらはユーザー情報を取得できなかった

            $id = Auth::id(); 
            $profile = User::where('id', $id)->get();
            return $profile;
        }
    }
    
    public function file_up()
    {
        $file_name = request()->file->getClientOriginalName();
    
        request()->file->storeAs('public/',$file_name);
    
        // $user = User::find(1);
        $id = Auth::id(); 
        $user = User::find($id);

    
        $user->update(['file_path' => '/storage/'.$file_name]);
    
        return $user;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $user = new User;

        // // name属性が'thumbnail'のinputタグをファイル形式に、画像をpublic/avatarに保存
        // $image_path = $request->file('file')->store('public/avatar/');

        // // 上記処理にて保存した画像に名前を付け、userテーブルのthumbnailカラムに、格納
        // $user->file_name = basename($image_path);

        // return $user->save(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Auth::user()->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // // ディレクトリ名
        // $dir = 'img';

        // // アップロードされたファイル名を取得
        // $file_name = $request->file('file');

        // // 取得したファイル名で保存
        // // storage/app/public/任意のディレクトリ名/
        // $request->file('file')->storeAs('public/' . $dir, $file_name);

        // $image = User::where('id', $id);
        // // $任意の変数名 = テーブルを操作するモデル名();
        // // storage/app/public/任意のディレクトリ名/
        // $image->file_name = $file_name;
        // $image->file_path = 'storage/app/public/' . $dir . '/' . $file_name;
        // return $image->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
