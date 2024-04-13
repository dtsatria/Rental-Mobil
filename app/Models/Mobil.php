<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $fillable = [
        'merk', 
        'tipemobil_id',
        'plat_nomor',
        'tarif'];


        public function tipemobil()
    {
        return $this->belongsTo(TipeMobil::class);
    }
}
