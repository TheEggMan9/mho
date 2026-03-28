<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentaireResource\Pages;
use App\Models\Commentaire;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;

class CommentaireResource extends Resource
{
    protected static ?string $model = Commentaire::class;
    protected static ?string $navigationLabel = 'Modération des commentaires';
    protected static ?string $pluralModelLabel = 'Modération des commentaires';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.pseudo')
                    ->label('Auteur')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('fiche.nomFiche')
                    ->label('Fiche')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('contenu')
                    ->label('Commentaire')
                    ->limit(80)
                    ->tooltip(fn ($record) => $record->contenu),

                TextColumn::make('created_at')
                    ->label('Publié le')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('fiche')
                    ->relationship('fiche', 'nomFiche')
                    ->label('Filtrer par fiche'),
            ])
            ->actions([
                DeleteAction::make()->label('Supprimer'),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()->label('Supprimer la sélection'),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCommentaires::route('/'),
        ];
    }

    public static function canAccess(): bool
    {
        return (bool) auth()->user()->is_admin;
    }

    public static function canCreate(): bool
    {
        return false;
    }
}