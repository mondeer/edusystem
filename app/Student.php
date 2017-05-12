<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['school_id', 'first_name', 'middle_name', 'last_name',
    'national_id', 'gender', 'dob', 'reg_no', 'course', 'email', 'mobile', 'address',
    'next_of_kin', 'next_of_kin_contact', 'guardian'];

    public function schools() {
      return $this->belongsTo('transcounty\School', 'school_id');
    }
}
