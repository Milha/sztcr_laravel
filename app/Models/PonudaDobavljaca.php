<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PonudaDobavljaca extends Model
{
    public $timestamps = false; // <--- Isključuje timestamps

    use HasFactory;

    protected $table = 'ponuda_dobavljacas';

    protected $fillable = [
        'brojPonude',
        'nazivProizvoda',
        'kolicina',
        'cena',
        'dobavljac_id',
    ];

    public function dobavljac()
    {
        return $this->belongsTo(Dobavljac::class);
    }
}
