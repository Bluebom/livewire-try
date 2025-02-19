<?php

namespace App\Providers;

use Filament\Support\Colors\Color;
use Filament\Support\Facades\FilamentColor;
use Filament\Support\Facades\FilamentIcon;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\ServiceProvider;

class FilamentProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        FilamentColor::register([
            'danger' => Color::Red,
            'gray' => Color::Zinc,
            'info' => Color::Blue,
            'primary' => Color::Rose,
            'success' => Color::Green,
            'warning' => Color::Amber,
        ]);

        FilamentIcon::register([
            'tables::header-cell.sort-asc-button' => view('icons.asc-sort'),
            'tables::header-cell.sort-button' => view('icons.un-sort'),
            'tables::header-cell.sort-desc-button' => view('icons.desc-sort'),
        ]);

        TextColumn::configureUsing(function (TextColumn $column): void {
            $column->extraHeaderAttributes(['class' => 'bg-white']);
        });
    }
}
