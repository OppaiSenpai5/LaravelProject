<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Va extends Model
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

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
