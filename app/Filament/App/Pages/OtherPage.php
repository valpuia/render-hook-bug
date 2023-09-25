<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class OtherPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.app.pages.other-page';
}
