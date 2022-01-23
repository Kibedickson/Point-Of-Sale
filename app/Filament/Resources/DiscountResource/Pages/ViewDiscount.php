<?php

namespace App\Filament\Resources\DiscountResource\Pages;

use App\Filament\Resources\DiscountResource;
use Filament\Resources\Pages\Page;

class ViewDiscount extends Page
{
    protected static string $resource = DiscountResource::class;

    protected static string $view = 'filament.resources.discount-resource.pages.view-discount';
}
