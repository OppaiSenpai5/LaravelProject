<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Va extends Model
{
    use HasFactory;
    use AsSource;

    protected $guarded = ['id'];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
