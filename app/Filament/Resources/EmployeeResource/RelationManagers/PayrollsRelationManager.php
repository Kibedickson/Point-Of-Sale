<?php

namespace App\Filament\Resources\EmployeeResource\RelationManagers;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;

class PayrollsRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'payrolls';

    protected static ?string $recordTitleAttribute = 'employee_id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('paid_at')
                    ->label('Month')
                    ->date('M Y'),
                Tables\Columns\TextColumn::make('net_amount')
                    ->label('Net Amount')
                ->money('kes'),
            ])
            ->headerActions([])
            ->actions([])
            ->filters([]);
    }
}
