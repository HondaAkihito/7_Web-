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
        // $budgets = Budget::where('user_id', '=' , $id)->orderBy('created_at', 'DESC')->orderBy('id', 'DESC')->limit(1)->get();
        // return $budgets;
        
        // ⭐️予算の表示 + 予算-支出合計=残り予算の表示
        // ①ログインユーザーの予算テーブルの一番古いamountカラムの値を取得
        $budgets = Auth::user()->budget()->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->first()->value('amount');
        // ②ログインユーザーの支出テーブamountカラムの合計値を取得
        $spendings = Auth::user()->spending()->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->limit(1)->sum('amount');
        // ③(② - ①)の計算を$resultへ
        $result = $budgets - $spendings;
        // ④$resultを入れるログインユーザーの予算テーブルを取得
        $budget = Auth::user()->budget()->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->first();
        // ⑤④で取得したテーブルに、③の$resultを入れる、そして更新
        $budget->rest_amount = $result;
        Auth::user()->budget()->save($budget);
        // ⑥再度ログインユーザーの一番古い予算テーブルを取得してvueへreturn
        $budget = Auth::user()->budget()->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->limit(1)->get();
        return $budget;

        // // ⭐️OK/1day
        // // ①現在の日の最初を取得
        // $now = Carbon::parse(now())->startOfDay();
        // // ②ログインユーザーの予算テーブルのto_dateカラムの値を取得
        // $to_date = Auth::user()->budget()->orderBy('created_at', 'ASC')->orderBy('id', 'ASC')->first()->value('to_date');
        // $to_date = Carbon::parse($to)->endOfDay();
        // // ③②-①の結果を$resultへ代入
        // $result = $to_date - $now;
        // // ④残り金額 / $resultで1日に使える金額を取得
        // // ⑤新規カラムに④を代入
        // // ⑥ログインユーザーのテーブルを取得してvueへreturn

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
        //
    }
}
