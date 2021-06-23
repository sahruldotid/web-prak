<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'consultant_id',
        'amount',
        'consultation_date',
        'consultation_end',
    ];

    public function consultant()
    {
        return $this->belongsTo(User::class, 'consultant_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
