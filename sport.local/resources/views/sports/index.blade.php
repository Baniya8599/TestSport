@extends('layout')
@section('title','Sport')

<div class="style">
    <div class="container-fluid">
        <div class="header">
            <p class="has-text-centered">All About Sports</p>
        </div>
    </div>
</div>
@section('content')
    @foreach($sports as $sport)
        <ul>
            <div class="li">
                <b>
                    <a href="/sports/{{$sport->id}}/show">
                        {{ $sport->category }}
                    </a>
                </b>
            </div>
        </ul>
            {{--<form method="GET" action="sports/{{$sport->id}}/edit">
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is link">edit category</button>
                    </div>
                </div>
            </form>--}}
    @endforeach()
    <form method="GET" action="sports/category">
        <div class="field">
            <div class="control">
                <button type="submit" class="button is link">add category</button>
            </div>
        </div>
    </form>
@endsection

