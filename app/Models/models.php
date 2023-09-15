<?php

namespace App\Models;
use App\Models\Coutures;
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

    function coutures(){
        return $this->hasOne(coutures::class);
       }
}
