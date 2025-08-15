<?php

namespace App\Filament\Resources\Processes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProcessForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('org_id')
                    ->numeric()
                    ->default(null),
                Select::make('creator_id')
                    ->relationship('creator', 'name')
                    ->default(null),
                TextInput::make('description')
                    ->default(null),
                Select::make('project_id')
                    ->relationship('project', 'name')
                    ->default(null),
                Select::make('metric_id')
                    ->relationship('metric', 'id')
                    ->default(null),
                TextInput::make('length')
                    ->numeric()
                    ->default(null),
            ]);
    }
}
