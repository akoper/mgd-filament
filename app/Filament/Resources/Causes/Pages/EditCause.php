<?php

namespace App\Filament\Resources\Causes\Pages;

use App\Filament\Resources\Causes\CauseResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCause extends EditRecord
{
    protected static string $resource = CauseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
