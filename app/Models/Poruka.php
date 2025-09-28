<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poruka extends Model
{
    use HasFactory;

    protected $fillable = [
        'posiljalac_id',
        'naslov',
        'sadrzaj',
        'procitana',
    ];

    public function posiljalac()
    {
        return $this->belongsTo(User::class, 'posiljalac_id');
    }
}
