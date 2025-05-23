<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    use HasFactory;
    protected $table = 'tbl_allegati_richieste';
    protected $fillable = [
        "id_comune",
        "id_relazione",
        "tipo_richiesta",
        "nome",
        "path",
    ];
}
