<?php

namespace App\Filament\Resources;

use App\Filament\Resources\YearsAcademicResource\Pages;
use App\Filament\Resources\YearsAcademicResource\RelationManagers;
use App\Models\YearsAcademic;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class YearsAcademicResource extends Resource
{
    protected static ?string $model = YearsAcademic::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('tahun')
                ->required()
                ->unique()
                ->label('tahun'),
               Select::make('semester')
               ->options([
                'ganjil' => 'ganjil',
                'genap' => 'genap'
               ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('tahun'),
                TextColumn::make('semester')
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
            'index' => Pages\ListYearsAcademics::route('/'),
            'create' => Pages\CreateYearsAcademic::route('/create'),
            'edit' => Pages\EditYearsAcademic::route('/{record}/edit'),
        ];
    }
}
