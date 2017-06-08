<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
     protected $fillable = ['school_id', 'expense_name', 'amount', 'expense_date', 'comments', 'photo'];

     public function schools() {
       return $this->belongsTo('transcounty\School', 'school_id');
     }
}
