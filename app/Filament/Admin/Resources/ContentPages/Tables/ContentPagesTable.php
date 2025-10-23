<?php

namespace App\Filament\Admin\Resources\ContentPages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContentPagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(trans('admin/content-pages.table.title'))
                    ->searchable(),
                IconColumn::make('active')
                    ->label(trans('admin/content-pages.table.active'))
                    ->boolean(),
                IconColumn::make('footerLink')
                    ->label(trans('admin/content-pages.table.footerLink'))
                    ->boolean(),
                TextColumn::make('created_at')
                    ->label(trans('admin/content-pages.table.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label(trans('admin/content-pages.table.updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateIcon('tabler-file-description')
            ->emptyStateDescription('')
            ->emptyStateHeading(trans('admin/content-pages.empty'))
            ->emptyStateActions([
                CreateAction::make(),
            ]);
    }
}
