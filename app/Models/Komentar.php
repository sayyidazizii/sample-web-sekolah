<?php

namespace App\Models;
use App\Models\Berita;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    public function berita()
    {
        return $this->belongsTo(Berita::class,'berita_id');
    }
}
