<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{
    protected $fillable =[
        'id',
        'category',
        'category_description'
    ];


    public function  matches()
    {
        return $this->hasMany(match::class);
    }
    public function addMatch($match)
    {
        $this->matches()->create($match);
//        $this->matches()->create(compact(['teams', 'description']));
       /* return match::create([
            'sport_id' => $this->id,
            'teams' => $match['teams'],
            'description' => $match['description']
        ]);*/
    }
}

