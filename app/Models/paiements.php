<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiements extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant_payer',
        'avance',
        'reste',
        'date_paiement',
       

    ];
}
