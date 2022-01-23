<?php

namespace App\Filament\Resources\WasteResource\Pages;

use App\Filament\Resources\WasteResource;
use Filament\Resources\Pages\Page;

class ViewWaste extends Page
{
    protected static string $resource = WasteResource::class;

    protected static string $view = 'filament.resources.waste-resource.pages.view-waste';
}
