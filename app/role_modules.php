<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role_modules extends Model
{
    public $table='role_modules';
    	 protected $fillable = [
        'role_id', 'module_id',
    ];
    public function roles()
    {
    	return $this->belongsTo('App\roles','id','role_id');
    }
    public function modules()
    {
    	return $this->hasMany('App\modules','id','module_id');
    }

}
