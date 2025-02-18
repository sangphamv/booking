<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Movie extends Model
{
    use HasFactory;

    protected $table = 'movies';

    protected $fillable = [
        'title',
        'category',
        'duration',
        'release_date',
        'description',
        'trailer',
        'image',
        'price',
    ];
    public static function inRandomOrder(): \Illuminate\Database\Eloquent\Builder
    {
        return self::query()->inRandomOrder();
    }

    public function showtimes(): HasMany
    {
        return $this->hasMany(Showtime::class);
    }
}
