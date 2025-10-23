<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\ContentPage as ContentPageModel;
use Illuminate\Database\Eloquent\Collection;

class ContentPageWidget extends Widget
{
    protected string $view = 'filament.widgets.content-page-widget';
    protected string $urlPart = '/content/';

    public function getFooterLinks(): ?Collection
    {
        $records = ContentPageModel::where('active', true)->where('footerLink', true)->get();

        return $records;
    }
}
