<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['registration', 'name', 'location', 'reg_date'];

    public function assets() {
      return $this->hasMany('transcounty\Asset');
    }

    public function expenses() {
      return $this->hasMany('transcounty\Expense');
    }

    public function teachers() {
      return $this->hasMany('transcounty\Teacher');
    }

    public function students() {
      return $this->hasMany('transcounty\Student');
    }
}
