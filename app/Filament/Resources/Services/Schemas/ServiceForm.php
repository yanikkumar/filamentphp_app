<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->required(),
                TextInput::make('slug'),
                TextInput::make('icon_class'),
                TextInput::make('short_desc')->label('Short Description')
                    ->required(),
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Select::make('status')
                    ->required()
                    ->options([
                        1 => 'Active',
                        0 => 'In-active'
                    ])
                    ->default(1),
            ]);
    }
}
