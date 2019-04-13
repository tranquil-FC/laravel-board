@extends('master')
@section('content')
    @if(Auth::check())
        {{route('home')}}
    @endif
    <body>
    <div class="content">
        <div class="content">
            <div class="title m-b-md">
                Login
                @include('shared.navbar')
            </div>
        </div>
    <form method="POST" action="{{route('login')}}">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" name="username" value="{{old('name')}}" placeholder="username">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="password">
        </div>

        <button type="submit" class="button">login</button>
    </form>
    </div>

    </body>
@stop
