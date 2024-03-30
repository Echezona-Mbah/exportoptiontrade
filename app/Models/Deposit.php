<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'plan',
        'email',
        'amount',
        'description',
        'method',
        'ref',
        'day_counter',
        'tet',
        'status',

    ];

    protected $table ='deposits';

    protected $primaryKey ='id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
