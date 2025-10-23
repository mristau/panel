<?php

namespace App\Filament\Admin\Resources\ContentPages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Set;
use App\Models\ContentPage;

class ContentPageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label(trans('admin/content-pages.table.title'))
                    ->live(onBlur: true)
                    ->required()
                    ->afterStateUpdated(fn (?string $state, Set $set) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->label(trans('admin/content-pages.table.slug'))
                    ->readOnly()
                    ->required(),
                MarkdownEditor::make('content')
                    ->label(trans('admin/content-pages.table.content'))
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('active')
                    ->label(trans('admin/content-pages.table.active')),
                Toggle::make('footerLink')
                    ->label(trans('admin/content-pages.table.footerLink')),
            ]);
    }
}
