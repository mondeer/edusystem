<?php

namespace transcounty;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    protected $fillable = ['school_id', 'asset_name', 'asset_type', 'price', 'manufacturer', 'state', 'status'];

    public function schools() {
      return $this->belongsTo('transcounty\School', 'school_id');
    }
}
