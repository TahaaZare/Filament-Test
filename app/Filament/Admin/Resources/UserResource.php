<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UserResource\Pages;
use App\Filament\Admin\Resources\UserResource\RelationManagers;
use App\Helpers\PersianNumbers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Rawilk\FilamentPasswordInput\Password;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::count();
        return PersianNumbers::convert($count);
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'info';
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->orderBy('created_at', 'desc');
    }

    public static function getPluralModelLabel(): string
    {
        return "کاربران";
    }

    public static function getPluralLabel(): ?string
    {
        return "کاربران";
    }

    public static function getModelLabel(): string
    {
        return "کاربر";
    }

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('username')
                            ->label("نام کاربری")
                            ->unique(ignoreRecord: true)
                            ->required(),

                        Forms\Components\TextInput::make('full_name')
                            ->label("نام کامل")
                            ->required(),

                        Forms\Components\TextInput::make('mobile')
                            ->label("شماره تماس")
                            ->numeric()
                            ->length(11)
                            ->columnSpanFull()
                            ->unique(ignoreRecord: true)
                            ->required(),

                        Password::make('password')
                            ->label("رمز عبور")
                            ->minLength(4)
                            ->revealable()
                            ->autocomplete(false)
                            ->columnSpanFull()
                            ->regeneratePassword(notify: false)
                            ->copyable(color: 'success'),

                        Forms\Components\Grid::make(1)
                            ->schema([
                                Forms\Components\Toggle::make('is_active')
                                    ->label("وضعیت کاربر")
                                    ->onIcon('heroicon-m-hand-thumb-up')
                                    ->offIcon('heroicon-m-hand-thumb-down'),
                            ]),
                    ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('username')
                    ->label("نام کاربری")
                    ->searchable(),

                Tables\Columns\TextColumn::make('full_name')
                    ->label("نام کامل")
                    ->searchable(),

                Tables\Columns\TextColumn::make('mobile')
                    ->label("شماره تماس")
                    ->default('------')
                    ->toggleable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('email')
                    ->label("ایمیل")
                    ->default('------')
                    ->toggleable()
                    ->searchable(),

                Tables\Columns\IconColumn::make('is_active')
                    ->wrapHeader()
                    ->toggleable()
                    ->label("وضعیت")
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
