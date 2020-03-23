<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    protected $fillable = [
        'cantina',
        'produttore',
        'annata',
        'vitigno',
        'descrizione',
        'prezzo'
    ];
}
