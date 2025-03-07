<?php

namespace App\Filament\Admin\Resources\SubscriptionGroupResource\Pages;

use App\Filament\Admin\Resources\SubscriptionGroupResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubscriptionGroup extends EditRecord
{
    protected static string $resource = SubscriptionGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
