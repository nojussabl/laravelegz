@extends('layouts.app')
@section('content')
    <h1 class="text-2xl">Welcome to ChatApp</h1>
    <div class="mt-4">
        <a href="{{ route('login') }}" class="bg-blue-600 p-2 rounded">Login</a>
        <a href="{{ route('register') }}" class="bg-blue-600 p-2 rounded ml-2">Register</a>
    </div>
@endsection