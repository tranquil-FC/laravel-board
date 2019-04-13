<div class="navbar">
    <a class="index" href="{{route('index')}}">index</a>
    @if(Auth::check())
        <a class="profile" href="{{route('home')}}">{{Auth::user()->username}}</a>
        <a class="logout" href="{{route('logout')}}">logout</a>
    @else
        <a class="login" href="{{route('login')}}">login</a>
        <a class="register" href="{{route('register')}}">register</a>
    @endif
</div>
