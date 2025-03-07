<?php

namespace App\Filament\Admin\Resources\ProductSubscriptionResource\Pages;

use App\Filament\Admin\Resources\ProductSubscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductSubscriptions extends ListRecords
{
    protected static string $resource = ProductSubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
