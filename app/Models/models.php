<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class models extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_modele',
        'type_modele',
        'image',
    ];
}
