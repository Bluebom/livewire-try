<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Investor extends Model
{
    use HasFactory, SoftDeletes, Searchable;

    public function toSearchableArray(): array
    {
        return ['id' => (string) $this->id] + $this->toArray();
    }
}
