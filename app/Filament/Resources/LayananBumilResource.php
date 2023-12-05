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

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationGroup = 'Layanan';

    protected static ?string $navigationLabel = 'Ibu Hamil';

    protected static ?string $navigationIcon = 'heroicon-s-user';

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
                    ->label('Usia Kandungan (bulan)')
                    ->placeholder('Masukkan Usia Kandungan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('berat_badan')
                    ->label('Berat Badan (kg)')
                    ->placeholder('Masukkan Berat Badan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tensi')
                    ->label('Tensi (mmHg)')
                    ->placeholder('Masukkan Tensi')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('lingkar_lengan')
                    ->label('Lingkar Lengan (cm)')
                    ->placeholder('Masukkan Lingkar Lengan')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('keluhan')
                    ->placeholder('Masukkan Keluhan')
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
                    ->label('Nama Ibu')
                    ->sortable(),
                Tables\Columns\TextColumn::make('usia_kandungan')
                    ->label('Usia Kandungan (bulan)')
                    ->alignCenter()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berat_badan')
                    ->label('Berat Badan (kg)')
                    ->alignCenter()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tensi')
                    ->label('Tensi (mmHg)')
                    ->alignCenter()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lingkar_lengan')
                    ->label('Lingkar Lengan (cm)')
                    ->alignCenter()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Layanan')
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
            ])
            ->emptyStateHeading('Belum ada data')
            ->emptyStateDescription('')
            ->emptyStateActions([
                Tables\Actions\Action::make('create')
                    ->label('Tambah Jadwal')
                    ->url(route('filament.admin.resources.layanan-bumils.create'))
                    ->icon('heroicon-m-plus')
                    ->button(),
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
