<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\Section;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationGroup = 'User Management';

    protected static ?string $navigationLabel = 'Ibu';

    protected static ?string $navigationIcon = 'heroicon-s-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->placeholder('Masukkan Email')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->placeholder('Masukkan Password')
                    ->required()
                    ->maxLength(255)
                    ->visibleOn('create'),
                Forms\Components\TextInput::make('nik')
                    ->label('NIK')
                    ->placeholder('Masukkan NIK')
                    ->required()
                    ->numeric()
                    ->maxLength(16),
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->placeholder('Masukkan Nama')
                    ->required()
                    ->maxLength(100),
                Forms\Components\TextInput::make('no_hp')
                    ->label('No Hp')
                    ->placeholder('Masukkan Nomor HP')
                    ->required()
                    ->numeric()
                    ->maxLength(15),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->placeholder('Masukkan Alamat')
                    ->maxLength(100),
                Forms\Components\Toggle::make('is_pregnant')
                    ->label('Apakah sedang hamil?')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nik')
                    ->label('NIK')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_hp')
                    ->label('No HP')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_pregnant')
                    ->label('Sedang Hamil')
                    ->alignCenter()
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Filter::make('is_pregnant')
                    ->label('Sedang Hamil')
                    ->toggle()
                    ->query(fn (Builder $query): Builder => $query->where('is_pregnant', 1))
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
                    ->url(route('filament.admin.resources.users.create'))
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
            'view' => Pages\ViewUser::route('/{record}'),
        ];
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make()
                    ->schema([
                        Infolists\Components\TextEntry::make('email'),
                        Infolists\Components\TextEntry::make('nik')
                            ->label('NIK'),
                        Infolists\Components\TextEntry::make('name')
                            ->label('Nama'),
                        Infolists\Components\TextEntry::make('alamat'),
                        Infolists\Components\IconEntry::make('is_pregnant')
                            ->label('Hamil')
                            ->boolean(),
                        Infolists\Components\TextEntry::make('no_hp')
                    ])->columns(2)
            ]);
    }
}
