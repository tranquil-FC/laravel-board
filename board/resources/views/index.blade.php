@extends('master')
@section('content')
    <body>
    <div class="content">
        <div class="title m-b-md">
            Message Board
            @include('shared.navbar')
            <div class="pull-right paginate">
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
                @endforeach
                {{$messages->links()}}
            </div>
        </div>
    </div>
    </body>
@stop
