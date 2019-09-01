@extends('layout')
@section('title','show')
@section('content')
    <h1 class="title">{{ $sport->category }}</h1>
    <div class="content">{{ $sport->category_description }}</div>
    {{--<a href="/sports/{{ $sport->$id }}/edit">edit category</a>--}}
    <form method="GET" action="/sports/{{$sport->id}}/edit" style="margin-top: 6px">
        <div class="field">
            <div class="control">
                <button type="submit" class="button is link">edit category</button>
            </div>
        </div>
    </form>
    @if ($sport->matches->count())
        <div style="padding-top: 11px">
            @foreach($sport->matches as $match)
                <div class="box">
                    <form method="post" action="/matches/{{$match->id}}">
                        @method('PATCH')
                        @csrf
                        <label for="played" class="checkbox  {{$match->played ? 'is-played' : ''}}">
                            <input type="checkbox" name="played"
                                   onchange="this.form.submit()" {{$match->played ? 'played' : ''}}>
                            {{$match->teams}}
                            <br>{{$match->description}}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif
    <form class="box" method="POST" action="/sports/{{$sport->id}}/matches" style="margin-top: 10px">
        @csrf
        {{--<input type="hidden" name="sport_id" value="{{ $sport->id }}">--}}
        <div class="field">
            <label for="teams" class="label">Match Between</label>
            <div class="control">
                <input type="text" class="input" name="teams" placeholder="teams" required>
            </div>
        </div>
        <div>
            <label for="description" class="label">Match Schedule</label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="description" required>
            </div>
        </div>
        <div class="field" style="margin-top: 10px">
            <div class="control">
                <button type="submit" class="button is-link">Add match</button>
            </div>
        </div> @if($errors->any())
            <div class="notification is-danger">
                @foreach(($errors->all()) as $error)
                    <ul>{{ $error }}</ul>
                @endforeach
            </div>
        @endif
    </form>
    {{--<show-component></show-component>--}}
@endsection

