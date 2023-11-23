<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImunResource\Pages;
use App\Filament\Resources\ImunResource\RelationManagers;
use App\Models\Imun;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImunResource extends Resource
{
    protected static ?string $model = Imun::class;

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
                Forms\Components\Select::make('jenis_imun_id')
                    ->relationship('jenis_imun', 'nama_imun')
                    ->label('Jenis Imun')
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->required(),
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
                Tables\Columns\TextColumn::make('jenis_imun.nama_imun')
                    ->label('JENIS IMUN')
                    ->searchable()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('TANGGAL IMUN')
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
            'index' => Pages\ListImuns::route('/'),
            'create' => Pages\CreateImun::route('/create'),
            'edit' => Pages\EditImun::route('/{record}/edit'),
        ];
    }
}
