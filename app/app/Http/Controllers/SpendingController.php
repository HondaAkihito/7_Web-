<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Budget;
use App\Spending;

class SpendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Spending::all();
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
        $spending = new Spending;
        $spending->title = $request->title;
        $spending->amount = $request->amount;
        $spending->date = $request->date;
        
        $budget = new Budget;
        $user_id = 1;
        $budget_id = 1; //一番小さいidを取得(ユーザー制御でユーザーが持っている予算IDの中で一番小さいやつ、にする)
        $spending->user_id = $user_id;
        $spending->budget_id = $budget_id;

        $spending->save();
        return $spending;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $spending = new Spending;
        $spending = $spending->find($id);
        return $spending;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $spending = new Spending;
        // $result = $spending->find($id);
        // return $result;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        // $id->update($request->all());
        // return $id;

        $spending = new Spending;
        $record = $spending->find($id);

        $record->amount = $request->amount;
        $record->date = $request->date;
        $record->title = $request->title;
        
        $record->save();

        return $record;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $spending = new Spending;
        $record = $spending->find($id);
        $record->delete();
        return $record;
    }
}
