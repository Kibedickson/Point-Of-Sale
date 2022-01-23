<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EmployeeResource\Pages;
use App\Filament\Resources\EmployeeResource\RelationManagers;
use App\Models\Employee;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Livewire\Component;

class EmployeeResource extends Resource
{
    protected static ?string $model = Employee::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('payroll_number')
                    ->required()
                    ->maxLength(255)
                    ->hidden(fn(Component $livewire): bool => $livewire instanceof Pages\EditEmployee || $livewire instanceof Pages\CreateEmployee),
                Forms\Components\TextInput::make('phone')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\TextInput::make('id_number')
                    ->integer()
                    ->required(),
                Forms\Components\TextInput::make('designation')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('joined_at')
                    ->required(),
                Forms\Components\TextInput::make('kra_pin')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nhif_no')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nssf_no')
                    ->nullable()
                    ->maxLength(255),
                Forms\Components\Select::make('payment_type')
                    ->options([
                        'salary' => 'Salary',
                        'daily' => 'Daily',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('salary')
                    ->label('Amount')
                    ->integer()
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('payroll_number'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('designation'),
                Tables\Columns\TextColumn::make('joined_at')->date(),
            ])
            ->pushActions([
                Tables\Actions\LinkAction::make('delete')
                    ->action(fn(Employee $record) => $record->delete())
                    ->requiresConfirmation()
                    ->color('danger'),
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\PayrollsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEmployees::route('/'),
            'create' => Pages\CreateEmployee::route('/create'),
            'view' => Pages\ViewEmployee::route('/{record}'),
            'edit' => Pages\EditEmployee::route('/{record}/edit'),
        ];
    }
}
