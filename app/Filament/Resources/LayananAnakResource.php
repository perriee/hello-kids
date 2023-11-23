<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LayananAnakResource\Pages;
use App\Filament\Resources\LayananAnakResource\RelationManagers;
use App\Models\LayananAnak;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LayananAnakResource extends Resource
{
    protected static ?string $model = LayananAnak::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('anak_id')
                    ->relationship('anak', 'name')
                    ->label('Nama Anak')
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->required(),
                Forms\Components\TextInput::make('lingkar_kepala')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tinggi_badan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('berat_badan')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('anak.name')
                    ->label('NAMA ANAK')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lingkar_kepala')
                    ->label('LINGKAR KEPALA')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tinggi_badan')
                    ->label('TINGGI BADAN')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berat_badan')
                    ->label('BERAT BADAN')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('TANGGAL LAYANAN')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLayananAnaks::route('/'),
            'create' => Pages\CreateLayananAnak::route('/create'),
            'edit' => Pages\EditLayananAnak::route('/{record}/edit'),
        ];
    }
}
