<?php

namespace App\Models;
use App\Models\Coutures;
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

    function coutures(){
        return $this->hasOne(coutures::class);
       }
      }

