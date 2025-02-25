<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_buku')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('buku_aktif')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('buku_deskripsi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('edisi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('isbn')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Select::make('author_id')
                    ->relationship('author', 'nama_depan')
                    ->searchable()
                    ->preload()
                    ->required(),
                    Forms\Components\Select::make('publisher_id')
                    ->relationship('publisher', 'nama_penerbit')
                    ->searchable()
                    ->preload()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_buku'),
                Tables\Columns\TextColumn::make('buku_aktif'),
                Tables\Columns\TextColumn::make('buku_deskripsi'),
                Tables\Columns\TextColumn::make('edisi'),
                Tables\Columns\TextColumn::make('isbn'),
                Tables\Columns\TextColumn::make('tahun'),
                Tables\Columns\TextColumn::make('author.nama_depan'),            
                Tables\Columns\TextColumn::make('publisher.nama_penerbit'),            
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
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }
}
