<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Budget;
use App\Spending;
use App\User;
use Illuminate\Support\Facades\Auth;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 最新の1件
        // $budget = new Budget;
        // $budgets = $budget->orderBy('created_at', 'DESC')->orderBy('id', 'DESC')->limit(1)->get();
        
        
        //最新の最初の1行のみ
        $id = Auth::id(); 
        $budgets = Budget::where('user_id', '=' , $id)->orderBy('created_at', 'DESC')->orderBy('id', 'DESC')->limit(1)->get();

        return $budgets;
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
