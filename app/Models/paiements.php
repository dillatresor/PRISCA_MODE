<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\coutures;

class paiements extends Model
{
    use HasFactory;

    protected $fillable = [
        'montant_payer',
        'avance',
        'reste',
        'date_paiement',
        'coutures_id',

    ];

    function coutures(){
        return $this->belongsTo(Coutures::class, 'coutures_id');
       }
}
