<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Character extends Model
{
    use HasFactory;
    use AsSource;
    use Filterable;

    protected $guarded = ['id'];

    protected $allowedSorts = [
        'name',
        'created_at',
        'updated_at'
    ];

    protected $allowedFilters = [
        'name'
    ];

    public function anime()
    {
        return $this->belongsTo(Anime::class);
    }

    public function va()
    {
        return $this->belongsTo(Va::class);
    }
}
