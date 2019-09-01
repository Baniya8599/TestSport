<?php

namespace App\Http\Controllers;

use App\Match;
use App\Sport;
use Illuminate\Http\Request;

class SportMatchController extends Controller
{
    public function store(Sport $sports)
    {
        $attributes = request()->validate([
            'teams' => 'required',
            'description' => 'required'
        ]);
        $sports->addMatch($attributes);
      /*  Match::create([
            'sport_id' => $sports->id,
            'teams' => request('teams'),
            'description' => request('description')
        ]);*/
        return back();
    }

    public function update(Match $match)
    {
        /*if (\request()->has('played')){
            $match->play();
        }
        else{
        $match->notplayed(); //make notplayed method in match model//
        }*/

//        \request()->has('played') ? $match->play() : $match->notplayed();
        $match->play(\request()->has('played'));
        /*$match->update([
            'played' => request()->has('played')
        ]);*/
        return back();
    }
}
