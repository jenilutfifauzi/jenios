<?php

namespace App\Filament\App\Widgets;

use Filament\Widgets\Widget;

class CreateSubmissionWidget extends Widget
{
    protected static string $view = 'filament.app.widgets.create-submission-widget';

    protected static ?string $title = 'Buat Pengajuan';

    public function getSubmissionUrl(): string
    {
        return route('filament.resources.submissions.index');
    }
}
