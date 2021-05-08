<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory,SoftDeletes;

    public $table='teams';

    protected $dates=[
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable=['name',];

    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
