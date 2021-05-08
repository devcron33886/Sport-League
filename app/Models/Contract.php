<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use HasFactory,SoftDeletes;

    public $table='contracts';

    protected $appends=['files'];

    protected $dates=[
        'created_at','updated_at','deleted_at',
    ];

    protected $fillable =[
        'team_id',
        'player_id',
        'title',
        'description',
        'start_date',
        'ending_date',
    ];
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
