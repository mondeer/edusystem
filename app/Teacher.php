<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [ 'school_id', 'first_name', 'last_name', 'email', 'national_id', 'gender', 'dob', 'phone', 'address', 'photo'];

    public function schools() {
      return $this->belongsTo('transcounty\School', 'school_id');
    }
}
