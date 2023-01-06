<?php

namespace App\Orchid\Screens;

use App\Models\Anime;
use App\Models\User;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class AnimeEditScreen extends Screen
{
    public $anime;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Anime $anime): iterable
    {
        return [
            'anime' => $anime
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->anime->exists ? 'Edit anime' : 'Creating a new anime';
    }

    public function description(): ?string
    {
        return "Animes";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create anime')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->anime->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->anime->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->anime->exists),
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
                Input::make('anime.title')
                    ->required()
                    ->title('Title')
                    ->placeholder('Full title in English')
                    ->type('text'),

                TextArea::make('anime.description')
                    ->required()
                    ->title('Description')
                    ->rows(10)
                    ->maxlength(2000)
                    ->placeholder('A synopsis for the anime'),

                Input::make('anime.episodes')
                    ->required()
                    ->title('Episodes')
                    ->placeholder('Number of episodes')
                    ->type('number')
                    ->min(1),

                Input::make('anime.duration')
                    ->required()
                    ->title('Duration')
                    ->placeholder('Average duration of an episode')
                    ->type('number')
                    ->min(1),

                Input::make('anime.score')
                    ->required()
                    ->title('Score')
                    ->placeholder('The anime\'s MAL score')
                    ->type('number')
                    ->step(0.01)
                    ->min(1)
                    ->max(10),

                Input::make('anime.aired')
                    ->required()
                    ->title('Aired')
                    ->placeholder('The period during which episodes aired')
                    ->type('text'),

                Cropper::make('anime.image')
                    ->required()
                    ->title('Image')
                    ->width(500)
                    ->height(750)
                    ->path('public')
                    ->targetUrl(),

//                Relation::make('post.author')
//                    ->title('Author')
//                    ->fromModel(User::class, 'name'),

//                Quill::make('anime.body')
//                    ->title('Main text'),

            ])
        ];
    }

    public function createOrUpdate(Anime $anime, Request $request)
    {
        $anime->fill($request->get('anime'))->save();

        Alert::info('You have successfully created an anime.');

        return redirect()->route('platform.anime.list');
    }

    public function remove(Anime $anime)
    {
        $anime->delete();

        Alert::info('You have successfully deleted the anime.');

        return redirect()->route('platform.anime.list');
    }
}
