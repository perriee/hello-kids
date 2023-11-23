<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LayananBumilResource\Pages;
use App\Filament\Resources\LayananBumilResource\RelationManagers;
use App\Models\LayananBumil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LayananBumilResource extends Resource
{
    protected static ?string $model = LayananBumil::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name', function ($query) {
                        $query->where('is_pregnant', 1);
                    })
                    ->label('Ibu')
                    ->placeholder('Pilih Ibu')
                    ->preload()
                    ->searchable()
                    ->native(false)
                    ->required(),
                Forms\Components\TextInput::make('usia_kandungan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('berat_badan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tensi')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('lingkar_lengan')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('keluhan')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('NAMA IBU')
                    ->sortable(),
                Tables\Columns\TextColumn::make('usia_kandungan')
                    ->label('USIA KANDUNGAN')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berat_badan')
                    ->label('BERAT BADAN')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tensi')
                    ->label('TENSI')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lingkar_lengan')
                    ->label('LINGKAR LENGAN')
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
            'index' => Pages\ListLayananBumils::route('/'),
            'create' => Pages\CreateLayananBumil::route('/create'),
            'edit' => Pages\EditLayananBumil::route('/{record}/edit'),
        ];
    }
}
