<?php

namespace App\Orchid\Layouts;

use App\Models\Character;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class CharacterListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    public $target = 'characters';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name')
                ->render(function (Character $character) {
                    return Link::make($character->name)
                        ->route('platform.character.edit', $character);
                }),

            TD::make('va_id', 'Voice actor'),
            TD::make('anime_id', 'Anime'),

            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}
