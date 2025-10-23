<?php

namespace App\Filament\Admin\Resources\ContentPages\Pages;

use App\Filament\Admin\Resources\ContentPages\ContentPageResource;
use App\Models\ContentPage;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ListContentPages extends ListRecords
{
    protected static string $resource = ContentPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->hidden(fn () => ContentPage::count() <= 0),
        ];
    }
}
