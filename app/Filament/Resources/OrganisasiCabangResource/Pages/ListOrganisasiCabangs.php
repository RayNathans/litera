<?php

namespace App\Filament\Resources\OrganisasiCabangResource\Pages;

use App\Filament\Resources\OrganisasiCabangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrganisasiCabangs extends ListRecords
{
    protected static string $resource = OrganisasiCabangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
