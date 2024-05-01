@extends('layout')
@section('content')

    <div class="index">
        {{-- @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}
        </div>
    @endif --}}
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

        <h2>Logged in</h2>
        <a href="{{ url('logout') }}">logout</a>
    </div>
@endsection