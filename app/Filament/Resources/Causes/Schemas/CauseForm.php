<?php

namespace App\Filament\Resources\Causes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CauseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
