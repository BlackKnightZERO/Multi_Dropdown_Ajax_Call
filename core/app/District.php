<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    
    public function division()
    {
        return $this->belongsTo('App\Divison', 'id');
    }
    public function thana()
    {
        return $this->hasMany('App\Thana', 'parent_id');
    }
}
