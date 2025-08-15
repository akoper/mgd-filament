<?php

namespace App\Filament\Resources\Recurrences\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RecurrencesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('org_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('project_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('temp_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('user_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('task_id')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('type')
                    ->searchable(),
                TextColumn::make('recur_period')
                    ->searchable(),
                TextColumn::make('end_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('Sunday')
                    ->searchable(),
                TextColumn::make('Monday')
                    ->searchable(),
                TextColumn::make('Tuesday')
                    ->searchable(),
                TextColumn::make('Wednesday')
                    ->searchable(),
                TextColumn::make('Thursday')
                    ->searchable(),
                TextColumn::make('Friday')
                    ->searchable(),
                TextColumn::make('Saturday')
                    ->searchable(),
                TextColumn::make('monthly_days')
                    ->searchable(),
                TextColumn::make('yearly_day')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('yearly_month')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
            ]);
    }
}
