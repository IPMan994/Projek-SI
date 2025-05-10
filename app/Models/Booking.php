<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'concert_id',
        'ticket_id',
        'quantity',
        'total_price',
    ];

    public function concert()
    {
        return $this->belongsTo(Concert::class);
    }

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
