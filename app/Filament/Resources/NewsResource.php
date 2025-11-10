<?php

namespace App\Filament\Resources;

use App\Models\News;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\NewsResource\Pages;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Content Management';

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')->required(),
            TextInput::make('slug')->unique()->required(),
            FileUpload::make('thumbnail')
            ->image()
            ->directory('thumbnails') 
            ->disk('public') 
            ->visibility('public')
            ->preserveFilenames() 
             ->required(),

            RichEditor::make('content')->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('title')->sortable()->searchable(),
            TextColumn::make('created_at')->dateTime(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
