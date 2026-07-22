<?php

namespace App\Filament\Admin\Resources\NamaModels;

use App\Filament\Admin\Resources\NamaModels\Pages\CreateNamaModel;
use App\Filament\Admin\Resources\NamaModels\Pages\EditNamaModel;
use App\Filament\Admin\Resources\NamaModels\Pages\ListNamaModels;
use App\Filament\Admin\Resources\NamaModels\Schemas\NamaModelForm;
use App\Filament\Admin\Resources\NamaModels\Tables\NamaModelsTable;
use App\Models\NamaModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class NamaModelResource extends Resource
{
    protected static ?string $model = NamaModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'user';

    public static function form(Schema $schema): Schema
    {
        return NamaModelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NamaModelsTable::configure($table);
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
            'index' => ListNamaModels::route('/'),
            'create' => CreateNamaModel::route('/create'),
            'edit' => EditNamaModel::route('/{record}/edit'),
        ];
    }
}
