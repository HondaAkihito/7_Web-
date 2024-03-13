<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = ['title', 'amount', 'from_date', 'to_date'];
}
