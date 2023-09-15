<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Clients;
use App\Models\Models;
use App\Models\User;
use App\Models\paiements;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class coutures extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'date_depot',
        'date_recuperation',
        'models_id',
        'clients_id',
    ];


    function Clients(){
        return $this->belongsTo(Clients::class, 'clients_id');
       }

       function Models(){
        return $this->belongsTo(Models::class, 'Models_id');
       }

       function User(){
        return $this->belongsTo(User::class, 'users_id');
       }


   function paiements(){
    return $this->hasOne(Paiement::class);
   }
}
