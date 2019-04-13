@extends('master')
@section('content')
    <body>
        <div class="content">
            <div class="content">
                <div class="title m-b-md">
                Register
                    @include('shared.navbar')
                </div>
            </div>

        <form method="POST" action="{{route('store')}}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="username" value="{{old('name')}}" placeholder="username">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="password">
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="confirm_password">
            </div>
            <button type="submit" class="button">register</button>
        </form>
        </div>
    </body>
    @if (count($errors) > 0)
        <div class="errors">
            <ul>
                {{$errors->first()}}
            </ul>
        </div>
    @endif
@stop
