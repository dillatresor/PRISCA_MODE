<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenoms',
        'telephone',
        'sexe',
    ];
      function Coutures(){
        return $this->belongsTo(couture::class,'clients_id');
      }
}
