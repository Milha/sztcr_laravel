<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Radnik extends Model
{
    use HasFactory;

    public $timestamps = false; // <--- Isključuje timestamps

    protected $fillable = [
        'ime',
        'prezime',
        'pozicija',
        'plata',
        
    ];

    protected $casts = [
        'plata' => 'decimal:2',
    ];
}