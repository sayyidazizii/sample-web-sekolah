<?php

namespace App\Models;

use App\Models\Komentar;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    public function getSinospsisAttribute()
    {
        return Str::limit(strip_tags($this->isi), '80', '');
    }
    public function komen()
    {
        return $this->hasOne(Komentar::class);
    }
}
