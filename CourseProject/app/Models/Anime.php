<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Attachment;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Anime extends Model
{
    use HasFactory;
    use AsSource;
    use Attachable;
    use Filterable;

    protected $guarded = ['id'];

    protected $allowedSorts = [
        'title',
        'episodes',
        'duration',
        'score',
        'created_at',
        'updated_at'
    ];

    protected $allowedFilters = [
        'title'
    ];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
