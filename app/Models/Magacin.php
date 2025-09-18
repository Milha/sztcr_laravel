<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magacin extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nazivMagacina',
        'lokacija',
    ];

    public function proizvodi()
    {
        return $this->hasMany(Proizvod::class);
    }

    public function reproMaterijali()
    {
        return $this->hasMany(ReproMaterijal::class);
    }
}
