<?php

namespace App\Filament\Resources\Recurrences\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RecurrenceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('org_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('project_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('temp_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('user_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('task_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('type')
                    ->default(null),
                TextInput::make('recur_period')
                    ->default(null),
                DatePicker::make('end_date'),
                TextInput::make('Sunday')
                    ->default(null),
                TextInput::make('Monday')
                    ->default(null),
                TextInput::make('Tuesday')
                    ->default(null),
                TextInput::make('Wednesday')
                    ->default(null),
                TextInput::make('Thursday')
                    ->default(null),
                TextInput::make('Friday')
                    ->default(null),
                TextInput::make('Saturday')
                    ->default(null),
                TextInput::make('monthly_days')
                    ->default(null),
                TextInput::make('yearly_day')
                    ->numeric()
                    ->default(null),
                TextInput::make('yearly_month')
                    ->default(null),
            ]);
    }
}
