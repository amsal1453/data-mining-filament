<?php

namespace App\Filament\Resources\YearsAcademicResource\Pages;

use App\Filament\Resources\YearsAcademicResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYearsAcademic extends EditRecord
{
    protected static string $resource = YearsAcademicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
