<?php

namespace App\Filament\Admin\Resources\ContentPages\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ContentPageInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title')
                    ->label(trans('admin/content-pages.table.title')),
                TextEntry::make('slug')
                    ->label(trans('admin/content-pages.table.slug')),
                TextEntry::make('content')
                    ->label(trans('admin/content-pages.table.content'))
                    ->placeholder('-')
                    ->columnSpanFull(),
                IconEntry::make('active')
                    ->label(trans('admin/content-pages.table.active'))
                    ->boolean(),
                IconEntry::make('footerLink')
                    ->label(trans('admin/content-pages.table.footerLink'))
                    ->boolean(),
                TextEntry::make('created_at')
                    ->label(trans('admin/content-pages.table.created_at'))
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label(trans('admin/content-pages.table.updated_at'))
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
