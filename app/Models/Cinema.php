<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;

    protected $table = 'cinemas';

    protected $fillable = [
        'name',
        'location',
    ];

    public static function inRandomOrder(): \Illuminate\Database\Eloquent\Builder
    {
        return self::query()->inRandomOrder();
    }

    public function showtime(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Showtime::class);
    }
}
