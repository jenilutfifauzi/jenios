<?php

namespace App\Filament\Resources\SubmissionSystemResource\Pages;

use App\Filament\Resources\SubmissionSystemResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSubmissionSystems extends ManageRecords
{
    protected static string $resource = SubmissionSystemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
