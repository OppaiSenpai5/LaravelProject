<?php

namespace App\Orchid\Screens;

use App\Models\Anime;
use App\Models\Character;
use App\Models\Va;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class CharacterEditScreen extends Screen
{
    public $character;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Character $character): iterable
    {
        return [
            'character' => $character
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->character->exists ? 'Edit character' : 'Creating a new character';
    }

    public function description(): ?string
    {
        return "Anime characters";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create character')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->character->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->character->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->character->exists),
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
            Layout::rows([
                Input::make('character.name')
                    ->required()
                    ->title('Name')
                    ->placeholder('Character\'s full name')
                    ->type('text'),

                Relation::make('character.va_id')
                    ->required()
                    ->title('Voice actor')
                    ->fromModel(Va::class, 'name'),

                Relation::make('character.anime_id')
                    ->required()
                    ->title('Anime')
                    ->fromModel(Anime::class, 'title'),

                Quill::make('character.about')
                    ->required()
                    ->title('About')
                    ->placeholder('Information about the character'),

                Cropper::make('character.image')
                    ->required()
                    ->title('Image')
                    ->width(225)
                    ->height(350)
                    ->path('public')
                    ->targetUrl(),
            ])
        ];

    }

    public function createOrUpdate(Character $character, Request $request)
    {
        $character->fill($request->get('character'))->save();

        Alert::info('You have successfully created a character.');

        return redirect()->route('platform.character.list');
    }

    public function remove(Character $character)
    {
        $character->delete();

        Alert::info('You have successfully deleted the character.');

        return redirect()->route('platform.character.list');
    }
}
