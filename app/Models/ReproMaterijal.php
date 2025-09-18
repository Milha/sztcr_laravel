<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReproMaterijal extends Model
{
    use HasFactory;

    protected $table = 'repro_materijals';

    protected $fillable = [
        'naziv',
        'jedinica_mere',
        'cena',
        'kolicina',
        'magacin_id',
    ];

    public function magacin()
    {
        return $this->belongsTo(Magacin::class);
    }
}
