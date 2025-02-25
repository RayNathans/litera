<?php

namespace App\Filament\Resources\OrganisasiCabangResource\Pages;

use App\Filament\Resources\OrganisasiCabangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrganisasiCabang extends EditRecord
{
    protected static string $resource = OrganisasiCabangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
