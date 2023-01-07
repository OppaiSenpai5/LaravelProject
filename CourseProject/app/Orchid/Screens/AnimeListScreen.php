<?php

namespace App\Orchid\Screens;

use App\Models\Anime;
use App\Orchid\Layouts\AnimeListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class AnimeListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'animes' => Anime::filters()->defaultSort('id')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Anime';
    }

    public function description(): ?string
    {
        return "All animes";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create new')
                ->icon('pencil')
                ->route('platform.anime.edit')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            AnimeListLayout::class
        ];
    }
}
