<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'sport_id',
        'teams',
        'description'
    ];

    public function play($played = true)
    {
        $this->update(compact('played'));
    }

    public function sport()
    {
        return $this->belongsTo(Sport::class);
    }

}
