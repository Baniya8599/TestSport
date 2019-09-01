@extends('layout')
@section('title','Sport')

@section('content')
    <div class="container">
        @if(session()->has('auth'))
            <div>{{ session()->get('auth') }}</div>
        @endif
        <div>
            <form method="post" action="/sports/login" enctype="multipart/form-data">
                @csrf
                <div class="field">

                    <div class="control">
                        @if($errors->has('name'))
                            {{trans($errors->first('name'))}}
                        @endif
                        <label for="" class="label">
                            username
                        </label>
                        <input class="input" type="text" name="name">
                        @if($errors->has('password'))
                            {{trans($errors->first('password'))}}
                        @endif
                        <label for="" class="label">
                            password
                        </label>
                        <input class="input" type="password" name="password">
                        <button class="button" type="submit">login</button>
                    </div>

                </div>

            </form>
        </div>
    </div>
@endsection

