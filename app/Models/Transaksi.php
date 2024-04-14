<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'user_id', 
        'mobil_id',
        'start_date',
        'end_date',
        'status'];

        public function user()
        {
            return $this->belongsTo(User::class);
        }
    
        public function car()
        {
            return $this->belongsTo(Mobil::class);
        }
}
