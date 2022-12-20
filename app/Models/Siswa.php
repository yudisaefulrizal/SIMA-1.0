<?php

namespace App\Models;

use App\Models\Absen;
use App\Models\belongsToMany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Siswa extends Model
{
    use HasFactory;
    // protected $table = 'siswas';
    // protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $with = ['kelas'];
    // public function absens() 
    // {
    //     return $this->belongsToMany(Absen::class, 'absen_siswas', 'siswa_id', 'absen_id');
    // }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
}
