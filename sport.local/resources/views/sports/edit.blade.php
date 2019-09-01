@extends('layout')
@section('title','Edit')
<div class="style">
    <div class="container-fluid">
        <div class="header">
            <p class="has-text-centered">Edit the category</p>
        </div>
    </div>
</div>
@section('content')
    {{--<h1 class="title">Edit the category</h1>--}}
 <form method="POST" action="/sports/{{ $sport->id }}" style="margin-bottom:6px" class="box">
     {{ method_field('PATCH') }}
     {{csrf_field()}}
     <div class="field">
       <div class="label" for="Add_category">
           category
       </div>
         <div class="control">
             <input type="text" class="input" name="Add_category" placeholder="category title" value="{{ $sport['category'] }}">
         </div>
     </div>
     <div class="field">
         <div class="label" for="About_category">
             category_description
         </div>
         <div class="control">
             <textarea name="About_category" placeholder="category description">{{ $sport->category_description }}</textarea>
         </div>
     </div>
     <div class="field">
         <div class="control">
             <button type="submit" class="button is link">update</button>
         </div>
     </div>
 </form>
    <form method="POST" action="/sports/{{ $sport->id}} }}">
        {{method_field('DELETE')}}
        {{csrf_field()}}
        <div class="field">
            <div class="control">
                <div class="control">
                    <button type="submit" class="button">delete</button>
                </div>
            </div>
        </div>
    </form>
@endsection

