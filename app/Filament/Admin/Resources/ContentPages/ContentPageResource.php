<?php

namespace App\Filament\Admin\Resources\ContentPages;

use App\Filament\Admin\Resources\ContentPages\Pages\CreateContentPage;
use App\Filament\Admin\Resources\ContentPages\Pages\EditContentPage;
use App\Filament\Admin\Resources\ContentPages\Pages\ListContentPages;
use App\Filament\Admin\Resources\ContentPages\Pages\ViewContentPage;
use App\Filament\Admin\Resources\ContentPages\Schemas\ContentPageForm;
use App\Filament\Admin\Resources\ContentPages\Schemas\ContentPageInfolist;
use App\Filament\Admin\Resources\ContentPages\Tables\ContentPagesTable;
use App\Models\ContentPage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContentPageResource extends Resource
{
    protected static ?string $model = ContentPage::class;

    protected static string|BackedEnum|null $navigationIcon = 'tabler-file-description';

    protected static ?string $recordTitleAttribute = 'title';

    public static function getNavigationLabel(): string
    {
        return trans('admin/content-pages.nav_title');
    }

    public static function getModelLabel(): string
    {
        return trans('admin/content-pages.model_label');
    }

    public static function getPluralModelLabel(): string
    {
        return trans('admin/content-pages.model_label_plural');
    }

    public static function getNavigationGroup(): ?string
    {
        return trans('admin/dashboard.advanced');
    }

    public static function form(Schema $schema): Schema
    {
        return ContentPageForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ContentPageInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContentPagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContentPages::route('/'),
            'create' => CreateContentPage::route('/create'),
            'edit' => EditContentPage::route('/{record}/edit'),
        ];
    }
}
