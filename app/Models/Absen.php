<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    
        public function siswas()
        {
            return $this->belongsToMany(Siswa::class, 'absen_siswas', 'absen_id', 'siswa_id');
        }
   
}
