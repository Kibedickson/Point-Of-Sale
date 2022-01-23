<?php

namespace App\Filament\Resources\StockResource\Pages;

use App\Filament\Resources\StockResource;
use Filament\Resources\Pages\Page;

class ViewStock extends Page
{
    protected static string $resource = StockResource::class;

    protected static string $view = 'filament.resources.stock-resource.pages.view-stock';
}
