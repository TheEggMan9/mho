<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FicheResource\Pages;
use App\Models\Fiche;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Illuminate\Support\Str;

class FicheResource extends Resource
{
    protected static ?string $model = Fiche::class;
    protected static ?string $navigationLabel = 'Fiches';
    protected static ?string $pluralModelLabel = 'Fiches';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([

            TextInput::make('nomFiche')
                ->label('Nom de la fiche')
                ->required()
                ->live()
                ->afterStateUpdated(fn ($state, callable $set) =>
                    $set('slug', Str::slug($state))
                ),

            TextInput::make('slug')
                ->label('Slug (URL)')
                ->required()
                ->unique(ignoreRecord: true),

            FileUpload::make('image')
                ->label('Image')
                ->image()
                ->disk('public')
                ->directory('img/heros')
                ->nullable(),

            Select::make('espece_id')
                ->label('Espèce')
                ->relationship('espece', 'nomEspece')
                ->nullable(),

            Select::make('organisation_id')
                ->label('Organisation principale')
                ->relationship('organisation', 'nomOrganisation')
                ->nullable(),

            TextInput::make('nom_complet')
                ->label('Nom complet')
                ->nullable(),

            Textarea::make('profession')
                ->label('Profession(s)')
                ->nullable(),

            Textarea::make('famille')
                ->label('Famille')
                ->nullable(),

            Textarea::make('pouvoirs')
                ->label('Pouvoir(s)/Arme(s)/Équipement(s)')
                ->rows(3)
                ->nullable(),

            Textarea::make('caracteristiques')
                ->label('Caractéristique(s)')
                ->nullable(),

            Textarea::make('affiliations')
                ->label('Affiliation(s)')
                ->nullable(),

            Textarea::make('ennemis')
                ->label('Ennemi(s) récurrent(s)')
                ->nullable(),

            Textarea::make('histoire')
                ->label('Histoire')
                ->rows(6)
                ->nullable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->disk('public'),

                TextColumn::make('nomFiche')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('espece.nomEspece')
                    ->label('Espèce')
                    ->sortable(),

                TextColumn::make('organisation.nomOrganisation')
                    ->label('Organisation')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Créée le')
                    ->dateTime('d/m/Y')
                    ->sortable(),
            ])
            ->actions([
                EditAction::make()->label('Modifier'),
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
            'index'  => Pages\ListFiches::route('/'),
            'create' => Pages\CreateFiche::route('/create'),
            'edit'   => Pages\EditFiche::route('/{record}/edit'),
        ];
    }

    public static function canAccess(): bool
    {
        return (bool) auth()->user()->is_admin;
    }
}