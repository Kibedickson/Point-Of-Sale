<?php

namespace App\Filament\Resources\QuotationResource\Pages;

use App\Filament\Resources\QuotationResource;
use Filament\Resources\Pages\Page;

class ViewQuotation extends Page
{
    protected static string $resource = QuotationResource::class;

    protected static string $view = 'filament.resources.quotation-resource.pages.view-quotation';
}
