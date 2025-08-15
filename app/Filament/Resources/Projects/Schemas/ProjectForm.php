<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                DateTimePicker::make('start_date'),
                DateTimePicker::make('end_date'),
                DateTimePicker::make('closed_date'),
                Select::make('creator_id')
                    ->relationship('creator', 'name')
                    ->default(null),
                TextInput::make('org_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('status')
                    ->required(),
            ]);
    }
}
