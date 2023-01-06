<?php

namespace App\Orchid\Layouts;

use App\Models\Anime;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Component;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class AnimeListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'animes';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('title', 'Title')
                ->render(function (Anime $anime) {
                    return Link::make($anime->title)
                        ->route('platform.anime.edit', $anime);
                }),

            TD::make('episodes', 'Episodes'),
            TD::make('duration', 'Duration'),
            TD::make('score', 'Score'),
            TD::make('aired', 'Aired'),
            Td::make('image', 'Image'),

            TD::make('created_at', 'Created'),
            TD::make('updated_at', 'Last edit'),
        ];
    }
}
