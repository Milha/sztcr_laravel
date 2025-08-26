<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proizvod extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'nazivProizvoda',
        'opis',
        'cena',
        'kolicina',
        'magacin_id',
    ];

    public function magacin()
    {
        return $this->belongsTo(Magacin::class);
    }
}
