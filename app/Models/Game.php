<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    use HasFactory,SoftDeletes;

    public $table='games';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable=[
        'start_time',
        'result1',
        'result2',
        'team1_id',
        'team2_id',
    ];

    public function team1()
    {
        return $this->belongsTo(Team::class);

    }
    public function team2()
    {
        return $this->belongsTo(Team::class);
    }
}
