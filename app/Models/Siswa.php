<?php

namespace App\Models;

use App\Models\Absen;
use App\Models\belongsToMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function absens() 
    {
        return $this->belongsToMany(Absen::class, 'absen_siswas', 'siswa_id', 'absen_id');
    }
}
