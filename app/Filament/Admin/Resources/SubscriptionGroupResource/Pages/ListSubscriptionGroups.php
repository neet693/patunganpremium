<?php

namespace App\Filament\Admin\Resources\SubscriptionGroupResource\Pages;

use App\Filament\Admin\Resources\SubscriptionGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubscriptionGroups extends ListRecords
{
    protected static string $resource = SubscriptionGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
