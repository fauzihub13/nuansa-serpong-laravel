<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RoomResource\Pages;
use App\Filament\Resources\RoomResource\RelationManagers;
use App\Models\Room;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RoomResource extends Resource
{
    protected static ?string $model = Room::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Grid::make(2)
                ->schema([

                    Section::make([
                        TextInput::make('name')
                            ->required(),
                        TextInput::make('price')
                            ->required()
                            ->integer()
                            ->minValue(1),
                        Textarea::make('policy')
                            ->required(),
                        Textarea::make('room_features')
                            ->required(),
                        TextInput::make('max_occupancy')
                            ->required()
                            ->integer()
                            ->minValue(1),
                        TextInput::make('bed_configuration')
                            ->required(),
                        TextInput::make('room_size')
                            ->required()
                            ->integer(),
                        TextInput::make('bathrooms')
                            ->required()
                            ->integer(),
                        TextInput::make('room_view')
                            ->required()
                            ->minValue(1),
                        Textarea::make('amenities')
                            ->required(),
                        Toggle::make('cancellation')
                            ->required()
                            ->onColor('success')
                            ->inline(false),
                        Toggle::make('pay_later')
                            ->required()
                            ->onColor('success')
                            ->inline(false),
                        Toggle::make('smoking_policy')
                            ->required()
                            ->onColor('success')
                            ->inline(false),
                    ])->columns(2),

                    Section::make([
                        FileUpload::make('image')
                            ->label('Room Images')
                            ->multiple()
                            ->directory('room')
                            ->disk('public')
                            ->reorderable()
                            ->image(),
                    ]),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                ImageColumn::make('image')->disk('public')->circular()->stacked()   ,
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('price')->searchable()->sortable(),
                TextColumn::make('room_size')->searchable()->sortable(),
                TextColumn::make('bed_configuration')->searchable()->sortable(),

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
            'index' => Pages\ListRooms::route('/'),
            'create' => Pages\CreateRoom::route('/create'),
            'edit' => Pages\EditRoom::route('/{record}/edit'),
        ];
    }

}
