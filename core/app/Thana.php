<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    //
    public function district()
    {
    	return $this->hasOne('App\district', 'id');
    }
}
