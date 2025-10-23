<?php

namespace App\Filament\Admin\Resources\ContentPages\Pages;

use App\Filament\Admin\Resources\ContentPages\ContentPageResource;
use Filament\Resources\Pages\CreateRecord;

class CreateContentPage extends CreateRecord
{
    protected static string $resource = ContentPageResource::class;
}
