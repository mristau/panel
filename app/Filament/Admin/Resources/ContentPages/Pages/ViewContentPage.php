<?php

namespace App\Filament\Admin\Resources\ContentPages\Pages;

use App\Filament\Admin\Resources\ContentPages\ContentPageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContentPage extends ViewRecord
{
    protected static string $resource = ContentPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
