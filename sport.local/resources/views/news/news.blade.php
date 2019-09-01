@extends('layout')
@section('title','news')
<div class="style">
    <div class="container-fluid">
        <div class="header">
            <p class="has-text-centered">Sports News</p>
        </div>
    </div>
</div>
@section('content')
    {{--<form method="post" action="/news">
        @csrf
        <div class="box">
            <label for="" class="label">Title</label>
            <div class="control">
                <input type="text" class="input" name="title" placeholder="News title">
            </div>
            <label for="" class="label">Description</label>
            <div class="control">
                <textarea class="input" name="description" placeholder="about News"></textarea>
            </div>
             <div class="field" style="padding-top: 5px">
                    <div class="control">
                        <button type="submit">Add</button>
                    </div>
              </div>
        </div>
    </form>--}}
    <news-component></news-component>
@endsection
