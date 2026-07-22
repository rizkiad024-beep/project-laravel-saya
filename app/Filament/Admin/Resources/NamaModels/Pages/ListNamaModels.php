<?php

namespace App\Filament\Admin\Resources\NamaModels\Pages;

use App\Filament\Admin\Resources\NamaModels\NamaModelResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNamaModels extends ListRecords
{
    protected static string $resource = NamaModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
