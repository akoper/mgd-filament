<?php

namespace App\Filament\Resources\Tasks\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TaskForm
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
                DateTimePicker::make('created_date'),
                DateTimePicker::make('start_date'),
                DateTimePicker::make('end_date'),
                DateTimePicker::make('closed_date'),
                TextInput::make('recipient_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('creator_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('project_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('org_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('metric_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('status')
                    ->default(null),
                TextInput::make('public')
                    ->default(null),
                TextInput::make('street')
                    ->default(null),
                TextInput::make('location_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('city_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('state_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('country_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('latitude')
                    ->numeric()
                    ->default(null),
                TextInput::make('longitude')
                    ->numeric()
                    ->default(null),
                TextInput::make('cause_id')
                    ->numeric()
                    ->default(null),
            ]);
    }
}
