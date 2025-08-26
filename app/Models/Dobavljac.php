<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dobavljac extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'naziv',
        'kontakt',
    ];

    // Relacija sa ponudama dobavljača
    public function ponude()
    {
        return $this->hasMany(PonudaDobavljaca::class);
    }

}
