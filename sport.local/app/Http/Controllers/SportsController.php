<?php

namespace App\Http\Controllers;

use App\Sport;

class SportsController extends Controller
{
    public function index()
    {
        $sports = Sport::all();
        return view('sports.index', ['sports' => $sports]);
    }

    public function category()
    {
        return view('sports.category');
    }

    public function show(Sport $sport)
    {
//        $sport = Sport::all($id);
        return view('/sports.show', compact('sport'));
        /*$sport = Sport::find($id);
        return $sport;*/
//        $sport = Sport::where('sport_id', $id)->first();

    }

    public function store()
    {
       $attributes= request()->validate([
            'category'=> ['required','min:4'],
            'category_description'=> ['required','min:4']
        ]);
        Sport::create($attributes);
        return response(['msg' => 'success']);
        /*  Sport::create([
              'category' => request('category'),
              'category_description' => request('category_description')
              ]);*/
        /* $sport = new Sport();
         $sport->category = request('Add_category');
         $sport->category_description = request('About_category');
         $sport->save();*/

//        return request()->all();
        /*    request()->validate([
                'category'=>['required', 'min:3'],
                'category_description'=>['required', 'min:3']
            ]);
            Sport::category(request(['category','category_description']));*/

    }

    public function edit(Sport $sport)
    {
        return view('sports.edit', compact('sport'));
//        $sport = Sport::find($id);

    }

    public function update(Sport $sport)
    {
        $sport->update(request(['category','category_description']));
          return redirect('/sports');
       /* $sport->category = request('Add_category');
        $sport->category_description = request('About_category');
        $sport->save();*/
//        $sport = Sport::find($id);
    }

    public function destroy(Sport $sport)
    {
        $sport->delete();
        return redirect('/sports');
//        Sport::find($id)->delete();

    }
}
