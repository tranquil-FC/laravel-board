@extends('master')

@section('content')

    <body>
    <div class="content">
        <div class="title m-b-md">
            Profile

            @include('shared.navbar')
        </div>
        <a class="write" style="font-size: 30px;" href="{{route('write')}}">write messages</a>
    </div>
    <div class="messages">
        @foreach ($messages as $message)
            <div class="username">
                {{$message->username}}
            </div>
            <div class="message">
                {{$message->message}}
            </div>
            <div class="time">
                {{$message->time}}
            </div>
                <form method="POST" action="{{route('delete')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input class="id" name="id" value="{{$message->id}}">
                        <button type="submit" class="button">delete</button>
                    </div>

                </form>
        @endforeach
    </div>
    </body>
@stop
