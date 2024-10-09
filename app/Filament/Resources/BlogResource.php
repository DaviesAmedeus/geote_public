<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationGroup= 'Blog Management';
//    protected static ?int $navigationSort =3;

    protected static ?string $navigationLabel = 'Blog';
    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $modelLabel= 'Blog posts';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Project Title')
                            ->required()
                            ->maxLength(255)
                            ->dehydrated()
                            ->live()
                            ->afterStateUpdated(function(string $operation, $state,
                                                         Forms\Set $set){
//                                if($operation !== 'create'){
//                                    return;
//                                }
                                $set('slug', Str::slug($state));
                            })
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('category_id')
                            ->default(1)
                            ->hidden(),// Automatically set to the authenticated user's ID

                       Forms\Components\Select::make('author_id')
                           ->relationship('author', 'name')
                           ->placeholder('Select Author')
                           ->searchable()
                           ->preload()
                           ->label(''),
                        Forms\Components\TextInput::make('slug')
                            ->label('')
                            ->disabled()
                            ->maxLength(255)
                            ->unique(Blog::class, 'slug', ignoreRecord: true),
                        Forms\Components\FileUpload::make('image')
                            ->label('')
                            ->image()
                            ->columnSpanFull(),
                        Forms\Components\MarkdownEditor::make('body')
                            ->label('')
                            ->placeholder('Write here...')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),


                Forms\Components\Section::make('SEO (For better ranking of this blog post in search engines)')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title'),
                        Forms\Components\TextInput::make('meta_description')
                    ])->columns(2)
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->label('Project Title')
                    ->searchable(isIndividual: true, isGlobal: false),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(isIndividual: true,isGlobal: false)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Posted by')
                    ->searchable(isIndividual: true,isGlobal: false),
                Tables\Columns\TextColumn::make('author.name')
                    ->label('Written by')
                    ->searchable(isIndividual: true,isGlobal: false),
                Tables\Columns\TextColumn::make('category.name')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('status')
                    ->toggleable(isToggledHiddenByDefault: true),
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
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
