<?php

namespace App\Orchid\Screens;

use App\Models\Character;
use App\Orchid\Layouts\CharacterListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class CharacterListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'characters' => Character::paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Characters';
    }

    public function description(): ?string
    {
        return "All characters";
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
                ->route('platform.character.edit')
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
            CharacterListLayout::class
        ];
    }
}
