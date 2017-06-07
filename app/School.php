<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = ['registration', 'name', 'location', 'reg_date'];

    public function assets() {
      return->$this->hasMany('');
    }
}
