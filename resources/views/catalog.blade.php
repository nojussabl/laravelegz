@extends('layouts.app')
@section('content')
    <h1 class="text-2xl">Your Servers</h1>
    <form method="GET" class="my-4">
        <input type="text" name="search" placeholder="Search servers..." class="rounded p-2 text-black">
        <button type="submit" class="bg-blue-600 p-2 rounded">Search</button>
    </form>
    <a href="{{ route('catalog.pdf') }}" class="bg-blue-600 p-2 rounded">Download PDF</a>
    <ul class="mt-4">
        @foreach($servers as $server)
            <li><a href="{{ route('server.show', $server->id) }}" class="underline">{{ $server->name }}</a></li>
        @endforeach
    </ul>
@endsection