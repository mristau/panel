<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;
use Filament\Pages\PageRoute;
use App\Models\ContentPage as ContentPageModel;

class ContentPage extends Page
{
    public ?ContentPageModel $record = null;

    protected string $view = 'filament.pages.content-page';
	protected static ?string $slug = 'content/{slug}';
	protected static bool $shouldRegisterNavigation = false;

    public function mount(string $slug): void
    {
        $this->record = ContentPageModel::where('slug', $slug)->where('active', true)->firstOrFail();

        // maybe later add seo
        // view()->share('metaTitle', $this->record->title);
    }

    public function getTitle(): string
    {
        return $this->record->title;
    }
}
