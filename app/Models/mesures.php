<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Clients;
use App\Models\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mesures extends Model
{
    use HasFactory;
    protected $guarded = [


    ];
    use HasFactory;

    function Client(){
        return $this->belongsTo(Clients::class, 'clients_id');
       }

       function models(){
        return $this->belongsTo(Models::class, 'models_id');
       }


}


