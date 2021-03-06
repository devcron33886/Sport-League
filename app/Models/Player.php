<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Player extends Model
{
    use HasFactory,SoftDeletes;

    public $table='players';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable=[
        'team_id',
        'name',
        'mobile',
        'address',
        'nationality',
        'age',
        'sex'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

}
