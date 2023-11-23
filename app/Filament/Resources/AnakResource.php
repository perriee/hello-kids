<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnakResource\Pages;
use App\Filament\Resources\AnakResource\RelationManagers;
use App\Models\Anak;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnakResource extends Resource
{
    protected static ?string $model = Anak::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('Ibu')
                    ->placeholder('Pilih Ibu')
                    ->preload()
                    ->searchable()
                    ->native(false)
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->placeholder('Masukkan Nama')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('umur')
                    ->placeholder('Masukkan Umur')
                    ->required(),
                Forms\Components\Select::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->placeholder('Pilih Jenis Kelamin')
                    ->options([
                        'L' => 'Laki - laki',
                        'P' => 'Perempuan',
                    ])
                    ->native(false)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('NAMA IBU')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('NAMA ANAK')
                    ->searchable(),
                Tables\Columns\TextColumn::make('umur')
                    ->label('UMUR/TAHUN'),
                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->label('JENIS KELAMIN')
                    ->searchable(),
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
            'index' => Pages\ListAnaks::route('/'),
            'create' => Pages\CreateAnak::route('/create'),
            'edit' => Pages\EditAnak::route('/{record}/edit'),
        ];
    }
}
