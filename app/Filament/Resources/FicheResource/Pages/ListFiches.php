<?php

namespace App\Filament\Resources\FicheResource\Pages;

use App\Filament\Resources\FicheResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions\CreateAction;

class ListFiches extends ListRecords
{
    protected static string $resource = FicheResource::class;

    protected function getHeaderActions(): array
    {
        return [CreateAction::make()->label('Nouvelle fiche')];
    }
}