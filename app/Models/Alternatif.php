<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;
    protected $table = 'alternatif';
    protected $guarded = [];

    public function penilaian()
    {
        return $this->hasMany(Penilaian::class, 'alternatif_id');
    }
}
