<?php

namespace App\Filament\Pages;

use Filament\Pages\SimplePage;
use Illuminate\View\View;
use App\Models\ContentPage as ContentPageModel;

class ContentPage extends SimplePage
{
    public ?ContentPageModel $record = null;

    protected string $view = 'filament.pages.content-page';
	protected static ?string $slug = 'content/{slug}';
	protected static bool $shouldRegisterNavigation = false;

/*     public function mount(string $slug): void
    {
        $this->record = ContentPageModel::where('slug', $slug)->where('active', true)->firstOrFail();

        // maybe later add seo
        // view()->share('metaTitle', $this->record->title);
    } */

    public function show(string $slug): View
    {
        $page = ContentPageModel::where('slug', $slug)->where('active', true)->firstOrFail();

        return view('filament.pages.content-page', compact('page'));
    }

    public function getTitle(): string
    {
        return $this->record->title;
    }
}
