<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Budget;
use App\Spending;
use App\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //最新の最初の1行のみ
        // $id = Auth::id(); 
        // $budgets = Budget::where('user_id', '=' , $id)->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->first()->value('amount');
        // return $budgets;
        
        // ⭐️予算の表示 + 予算-支出合計=残り予算の表示
        // ①ログインユーザーの予算テーブルの一番古いamountカラムの値を取得
        // $types = Auth::user()->type()->where('category', $type)->get();
        $budgets = Auth::user()->budget()->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->value('amount');
        // ②ログインユーザーの支出テーブamountカラムの合計値を取得
        $spendings = Auth::user()->spending()->sum('amount');
        // ③(② - ①)の計算を$resultへ
        $result = $budgets - $spendings;
        // ④$resultを入れるログインユーザーの予算テーブルを取得
        $budget = Auth::user()->budget()->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->first();
        // ⑤④で取得したテーブルに、③の$resultを入れる、そして更新
        $budget->rest_amount = $result;
        Auth::user()->budget()->save($budget);

        // ⭐️OK/1day
        // ①ログインユーザーの予算テーブルのto_dateカラムの値を取得
        $to_date = Auth::user()->budget()->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->value('to_date');
        // ②本日の日にちを取得 = Carbon::today() 
        // ③(①-②)を実行 = diffInDaysで差分を取得
        // ④これだと0日の時に/0になってしまうため、最後に+1
        // 例）現在18日・期限22日の場合、差分は4日になるが、18.19.20.21.22で日割り計算したいために+1する
        $date_diff = Carbon::today()->diffInDays(Carbon::parse($to_date)) + 1;
        // ⑤予算テーブルの「残り予算」カラムの値を取得
        $rest_amount = Auth::user()->budget()->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->value('rest_amount');
        // ⑥(⑤/④)
        $result = $rest_amount / $date_diff;
        // ⑦更新先の予算テーブルを取得
        $budget = Auth::user()->budget()->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->first();
        // ⑧代入 更新
        $budget->day_amount = $result;
        Auth::user()->budget()->save($budget);

        // ⭐️vueへ送るテーブル取得
        $budget = Auth::user()->budget()->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->limit(1)->get();
        return $budget;
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
        $budget = new Budget;
        $budget->title = $request->title;
        $budget->amount = $request->amount;
        $budget->from_date = $request->from_date;
        $budget->to_date = $request->to_date;

        Auth::user()->budget()->save($budget);
        return $budget;
        // = return Budget::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    // オール削除関数
    public function all_destroy()
    {
        Auth::user()->budget()->delete();
        Auth::user()->spending()->delete();
        return;
    }
}
