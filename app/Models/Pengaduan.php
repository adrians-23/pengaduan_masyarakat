<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';

    protected $primaryKey = 'id_pengaduan';

    protected $fillable = [
        'id_pengaduan',
        'nik_id',
        'isi_laporan',
        'foto',
        'status',
    ];

    protected $dates = 'tgl_pengaduan';

    public function user()
    {
        return $this->belongsTo(Masyarakat::class, 'nik', 'fk_nik');
    }
}
