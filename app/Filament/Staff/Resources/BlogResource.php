<?php

namespace App\Filament\Staff\Resources;

use App\Filament\Staff\Resources\BlogResource\Pages;
use App\Filament\Staff\Resources\BlogResource\RelationManagers;
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
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = "Blog posts";
    protected static ?string $navigationGroup= 'Posts Management';
    protected static ?int $navigationSort =0;


    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('category_id', 1); // "1" is the ID for "Blog category"
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Blog Title')
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
                        Forms\Components\Select::make('author_id')
                            ->relationship('author', 'name')
                            ->searchable()
                            ->required()
                            ->placeholder('Select author...')
                            ->preload(),
                        Forms\Components\TextInput::make('category_id')
                            ->default(1)
                            ->hidden()// Automatically set to the authenticated user's ID
                        ,

                        Forms\Components\TextInput::make('slug')
                            ->disabled()
                            ->maxLength(255)
                            ->unique(Post::class, 'slug', ignoreRecord: true),

                        Forms\Components\Textarea::make('description')
                            ->placeholder('Briefly explain what the blog post is about...')
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('image')
                            ->image()
                            ->columnSpanFull(),
                        Forms\Components\MarkdownEditor::make('body')
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),


                Forms\Components\Section::make('SEO (For better ranking of this posts in search engines)')
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
                    ->label('Blog Title')
                    ->searchable(isIndividual: true, isGlobal: false),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(isIndividual: true,isGlobal: false)
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Posted by')
                    ->searchable(isIndividual: true,isGlobal: false),
                Tables\Columns\TextColumn::make('category.name')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('author.name')
                    ->label('Written by')
                    ->searchable(isIndividual: true,isGlobal: false)
                    ->sortable(),

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
            ->defaultSort('updated_at', 'desc')
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
//            'create' => Pages\CreateBlog::route('/create'),
//            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
