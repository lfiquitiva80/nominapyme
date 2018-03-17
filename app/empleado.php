<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    protected $table = 'empleado';
    protected $guarded = ['id'];


     public function User()
    {
        return $this->hasMany('App\User','users_id');
    }


}
