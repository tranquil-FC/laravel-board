@extends('master')

@section('content')
    <body>
    <div class="content">
        <div class="content">
            <div class="title m-b-md">
                Write down notes
                @include('shared.navbar')
                <form method="POST" action="{{route('mstore')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <textarea name="message" rows="15" cols="60"></textarea>

                    </div>

                    <button type="submit" class="button">submit</button>
                </form>
            </div>
        </div>
    </div>
    </body>
@stop
