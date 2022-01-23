<?php

namespace App\Filament\Resources\SupplierResource\Pages;

use App\Filament\Resources\SupplierResource;
use Filament\Resources\Pages\Page;

class ViewSupplier extends Page
{
    protected static string $resource = SupplierResource::class;

    protected static string $view = 'filament.resources.supplier-resource.pages.view-supplier';
}
