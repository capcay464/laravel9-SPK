<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $table = 'kriteria';
    protected $guarded = [];

    public function crips()
    {
        return $this->hasMany(Crips::class,'kriteria_id');
    }
}
