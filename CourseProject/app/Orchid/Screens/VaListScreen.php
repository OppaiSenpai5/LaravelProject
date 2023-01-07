<?php

namespace App\Orchid\Screens;

use App\Models\Va;
use App\Orchid\Layouts\VaListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

class VaListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'vas' => Va::paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Voice actors';
    }

    public function description(): ?string
    {
        return "All voice actors";
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
                ->route('platform.va.edit')
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
            VaListLayout::class
        ];
    }
}
