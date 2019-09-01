@extends('layout')
@section('title','Sport')
<div class="style">
    <div class="container-fluid">
        <div class="header">
            <p class="has-text-centered">Add Sports Category</p>
        </div>
    </div>
</div>
@section('content')
   {{-- <form method="POST" action="/sports" style="margin-top:9px ">
        {{csrf_field()}}
        <div class="div" style="margin-bottom: 9px">
            <input type="text" name="category" {{$errors->has('title') ? 'is-danger': ''}} placeholder="category title" value="{{old('category')}}">
        </div>

        <div class="div" style="margin-bottom: 8px">
                <textarea name="category_description" placeholder="category description" value="{{old('category_description')}}"></textarea>
        </div>

        <div class="div">
            <button type="submit">new_category</button>
        </div>
        @if($errors->any())
            <div class="notification is-danger">
                @foreach(($errors->all()) as $error)
                    <ul>{{ $error }}</ul>
                @endforeach
            </div>
        @endif
    </form>--}}
    <div style="padding-top: 5px">
        <category-component></category-component>
    </div>
    <form action="/sports" style="margin-top:9px ">
        {{csrf_field()}}
        <div>
            <a href="http://sport.local/sports">
                <button type="submit">show_category</button>
            </a>
        </div>
    </form>
    
@endsection
