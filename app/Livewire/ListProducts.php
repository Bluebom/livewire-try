<?php

namespace App\Livewire;

use App\Models\Product;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Support\Enums\Alignment;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ListProducts extends Component implements HasTable, HasForms
{
    use InteractsWithTable, InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->heading('Products')
            ->query(Product::query())
            ->columns([
                TextColumn::make('name')->extraHeaderAttributes(['class' => 'bg-white'])->sortable()->searchable()
                    ->alignment(Alignment::Between),
                TextColumn::make('price')->searchable(),
            ])
            ->filters([
                TrashedFilter::make()
            ])
            ->striped()
            ->paginationPageOptions([5])
            ->extremePaginationLinks(false)
            ->persistSortInSession()
            ->persistSearchInSession()
            ->persistColumnSearchesInSession();
    }

    public function render()
    {
        return view('livewire.list-products');
    }
}
