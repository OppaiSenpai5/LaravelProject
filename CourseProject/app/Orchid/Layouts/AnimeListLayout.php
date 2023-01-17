<?php

namespace App\Orchid\Layouts;

use App\Models\Anime;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
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
    public $target = 'animes';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('title', 'Title')
                ->sort()
                ->filter(Input::make())
                ->render(function (Anime $anime) {
                    return Link::make($anime->title)
                        ->route('platform.anime.edit', $anime);
                }),

            TD::make('episodes', 'Episodes')
                ->sort(),
            TD::make('duration', 'Duration')
                ->sort(),
            TD::make('score', 'Score')
                ->sort(),
            TD::make('aired', 'Aired'),

            TD::make('created_at', 'Created')
                ->sort(),
            TD::make('updated_at', 'Last edit')
                ->sort(),
        ];
    }
}
