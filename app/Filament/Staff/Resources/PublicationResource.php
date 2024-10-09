<?php

namespace App\Filament\Staff\Resources;

use App\Filament\Staff\Resources\PublicationResource\Pages;
use App\Filament\Staff\Resources\PublicationResource\RelationManagers;
use App\Models\Publication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PublicationResource extends Resource
{
    protected static ?string $model = Publication::class;

    protected static ?string $navigationGroup= 'Blog Management';
//    protected static ?int $navigationSort =3;

    protected static ?string $navigationLabel = 'Publications';
    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $modelLabel= 'publications';

    public static function getEloquentQuery(): Builder
    {
        // Get the current user
        $user = Auth::user();

        // Start building the query
        $query = parent::getEloquentQuery();

        // If the user is not an admin, show only their posts
        if (!$user->is_admin) {
            $query ->where('user_id', $user->id);
        }

        return $query;
    }

    public static function canView($record): bool
    {
        return auth()->user()->can('view', $record);
    }

    public static function canEdit($record): bool
    {
        return auth()->user()->can('update', $record);
    }

    public static function canDelete($record): bool
    {
        return auth()->user()->can('destroy', $record);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('')
                    ->placeholder('Title of the publication...')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->label('')
                    ->placeholder('slug of the publication...')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('url')
                    ->label('')
                    ->placeholder('url of the publication... eg https://www.thesite.com/')
                    ->required()
                    ->maxLength(255),

                Forms\Components\Textarea::make('description')
                    ->label('')
                    ->placeholder('Short description of the publication...')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image(),
                Forms\Components\Section::make('SEO (For better ranking of this blog post in search engines)')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title'),
                        Forms\Components\TextInput::make('meta_description')
                    ])->columns(2),

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),

                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')

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
            'index' => Pages\ListPublications::route('/'),
            'create' => Pages\CreatePublication::route('/create'),
            'edit' => Pages\EditPublication::route('/{record}/edit'),
        ];
    }
}
