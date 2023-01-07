<?php

namespace App\Orchid\Screens;

use App\Models\Va;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class VaEditScreen extends Screen
{
    public $va;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Va $va): iterable
    {
        return [
            'va' => $va
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->va->exists ? 'Edit voice actor' : 'Creating a new voice actor';
    }

    public function description(): ?string
    {
        return "Voice actors";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Create voice actor')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->va->exists),

            Button::make('Update')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->va->exists),

            Button::make('Remove')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->va->exists),
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
                Input::make('va.name')
                    ->required()
                    ->title('Name')
                    ->placeholder('Voice actor\'s full name')
                    ->type('text'),

                Quill::make('va.about')
                    ->required()
                    ->title('About')
                    ->placeholder('Information about the voice actor'),

                Cropper::make('va.image')
                    ->required()
                    ->title('Image')
                    ->width(225)
                    ->height(350)
                    ->path('public')
                    ->targetUrl(),
            ])
        ];
    }

    public function createOrUpdate(Va $va, Request $request)
    {
        $va->fill($request->get('va'))->save();

        Alert::info('You have successfully created a voice actor.');

        return redirect()->route('platform.va.list');
    }

    public function remove(Va $va)
    {
        $va->delete();

        Alert::info('You have successfully deleted the voice actor.');

        return redirect()->route('platform.va.list');
    }
}
