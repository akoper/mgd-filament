<?php

namespace App\Filament\Resources\Organizations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrganizationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('phone')
                    ->tel()
                    ->default(null),
                TextInput::make('street')
                    ->default(null),
                TextInput::make('city')
                    ->default(null),
                TextInput::make('state')
                    ->default(null),
                TextInput::make('zip_code')
                    ->default(null),
                TextInput::make('mission_statement')
                    ->default(null),
                TextInput::make('admin_user_id')
                    ->numeric()
                    ->default(null),
            ]);
    }
}
