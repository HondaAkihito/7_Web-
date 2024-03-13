<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
    protected $fillable = ['title', 'date', 'amount', 'budget_id'];

    public function budget() {
        return $this->belongsTo('App\Budget', 'budget_id', 'id');
    }
}