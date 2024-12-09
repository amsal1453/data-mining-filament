<?php

namespace App\Filament\Resources\YearsAcademicResource\Pages;

use App\Filament\Resources\YearsAcademicResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListYearsAcademics extends ListRecords
{
    protected static string $resource = YearsAcademicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
