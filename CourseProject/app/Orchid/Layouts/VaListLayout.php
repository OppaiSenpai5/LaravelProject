<?php

namespace App\Orchid\Layouts;

use App\Models\Va;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class VaListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    public $target = 'vas';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', 'Name')
                ->sort()
                ->filter(Input::make())
                ->render(function (Va $va) {
                    return Link::make($va->name)
                        ->route('platform.va.edit', $va);
                }),

            TD::make('created_at', 'Created')
                ->sort(),
            TD::make('updated_at', 'Last edit')
                ->sort(),
        ];
    }
}
