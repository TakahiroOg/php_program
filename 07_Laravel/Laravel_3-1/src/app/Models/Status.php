<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
