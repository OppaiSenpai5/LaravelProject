<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Character extends Model
{
    use HasFactory;
    use AsSource;

    protected $guarded = ['id'];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    public function va()
    {
        return $this->belongsTo(Va::class);
    }
}
