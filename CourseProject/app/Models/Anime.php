<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Attachment;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class Anime extends Model
{
    use HasFactory;
    use AsSource;
    use Attachable;

    protected $guarded = ['id'];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
