<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anggota extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $fillable = ['nama_anggota', 'email', 'no_tlp'];
    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level', 'id');
    }
}
