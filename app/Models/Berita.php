<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Berita extends Model
{
    use HasFactory;

    public function getSinospsisAttribute()
    {
        return Str::limit(strip_tags($this->isi), '80', '');
    }
}
