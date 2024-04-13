<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeMobil extends Model
{
    use HasFactory;
    protected $table = 'tipemobil';
    protected $fillable = ['tipe'];

    public function mobil()
    {
        return $this->hasMany(Mobil::class);
    }
}
