<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comune extends Model
{
    use HasFactory;
    protected $table = "tbl_comuni";

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
}
