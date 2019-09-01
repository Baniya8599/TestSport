<?php

namespace App\Http\Controllers;


use App\News;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        return view('/news/news');
    }

    public function show($id)
    {
        $news = News::find($id);
        return $news;
    }

    public function showall()
    {
        $news = News::all();
        return response(json_encode($news));
        //php array object is convert to json object
    }

    public function store()
    {
        $attribute = \request()->validate([
            'sport_id' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);

      /*  $data = \request()->all();
        $validate = validator()->make($data, [
            'sport_id' => 'required',
            'title' => 'required',
            'description' => 'required'
        ]);
        if ($validate->fails()) {
            return back()
                ->withErrors($validate->errors())
                ->withInput();
        }*/



        News::create($attribute);
        return back();
    }

    public function add()
    {
        $attribute = \request()->validate([
            'title' => 'required',
            'description' => 'required',
            'sport_id' => 'required'
        ]);
//        dd($attribute);
        News::create($attribute);


        return response(['success' => 'ss']);

    }
    /* public function count()
     {
        session::put('key','cart');
     }*/
}
