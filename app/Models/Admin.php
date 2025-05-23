<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'tbl_admin';

    protected $fillable = ['email', 'password', 'comune_id'];

    protected $hidden = ['password'];

    public function comune()
    {
        return $this->belongsTo(Comune::class);
    }
}
