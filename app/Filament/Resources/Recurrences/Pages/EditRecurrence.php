<?php

namespace App\Filament\Resources\Recurrences\Pages;

use App\Filament\Resources\Recurrences\RecurrenceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRecurrence extends EditRecord
{
    protected static string $resource = RecurrenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
