<?php

namespace App\Filament\App\Resources\SubmissionResource\Pages;

use App\Filament\App\Resources\SubmissionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSubmissions extends ManageRecords
{
    protected static string $resource = SubmissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
