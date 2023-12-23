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
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;

class LayananAnakResource extends Resource
{
    protected static ?string $model = LayananAnak::class;

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationGroup = 'Layanan';

    protected static ?string $navigationLabel = 'Anak';

    protected static ?string $navigationIcon = 'heroicon-s-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('anak_id')
                    ->relationship('anak', 'name')
                    ->label('Nama Anak')
                    ->placeholder('Pilih Anak')
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->required(),
                Forms\Components\TextInput::make('lingkar_kepala')
                    ->label('Lingkar Kepala (cm)')
                    ->placeholder('Masukkan Lingkar Kepala')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tinggi_badan')
                    ->label('Tinggi Badan (cm)')
                    ->placeholder('Masukkan Tinggi Badan')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('berat_badan')
                    ->label('Berat Badan (kg)')
                    ->placeholder('Masukkan Berat Badan')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('anak.name')
                    ->label('Nama Anak')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lingkar_kepala')
                    ->label('Lingkar Kepala (cm)')
                    ->alignCenter()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tinggi_badan')
                    ->label('Tinggi Badan (cm)')
                    ->alignCenter()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berat_badan')
                    ->label('Berat Badan (kg)')
                    ->alignCenter()
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tangal Layanan')
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
            ->headerActions([
                ExportAction::make(),
            ])
            ->emptyStateHeading('Belum ada data')
            ->emptyStateDescription('')
            ->emptyStateActions([
                Tables\Actions\Action::make('create')
                    ->label('Tambah Layanan Anak')
                    ->url(route('filament.admin.resources.layanan-anaks.create'))
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
            'index' => Pages\ListLayananAnaks::route('/'),
            'create' => Pages\CreateLayananAnak::route('/create'),
            'edit' => Pages\EditLayananAnak::route('/{record}/edit'),
        ];
    }
}
