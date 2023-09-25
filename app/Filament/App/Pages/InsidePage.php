<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;

class InsidePage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static bool $shouldRegisterNavigation = false;

    protected static string $view = 'filament.app.pages.inside-page';
}
