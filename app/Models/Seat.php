<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
        'cinema_id',
        'row_num',
        'seat_num',
        'available',
    ];

    public function cinema():BelongsTo
    {
        return $this->belongsTo(Cinema::class);
    }
}
