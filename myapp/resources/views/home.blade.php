@extends('app')
@section('content')
@if(Auth::check())

  <p>Welcome<b>{{ Auth::user()->name }}</b></p>
@endif
@auth
<a class="btn btn-primary" href="{{route('password')}}">Chane password</a>
<a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
@endauth
@guest
<a class="btn btn-primary" href="{{route('login')}}">Login</a>
<a class="btn btn-info" href="{{route('register')}}">Register</a>
@endguest
@endsection