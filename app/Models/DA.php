<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DA extends Model
{
    use HasFactory;
    protected $table='da';
    protected $fillable=[
        
        
           'reference',
           'designation',
        'quantite',
            'acheteur',
          'etat',
         'cccout',
         'cnecono',
         'emetteur',
         'date',
         'delai',
    ];
}
