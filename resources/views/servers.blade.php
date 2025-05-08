@extends('layouts.app')
@section('content')
    <h1 class="text-2xl">Available Servers</h1>
    <ul class="mt-4">
        @foreach($servers as $server)
            <li>
                {{ $server->name }}
                @if($addedServers->contains($server->id))
                    <span class="text-green-400">[Added]</span>
                @else
                    <form action="{{ route('servers.add', $server->id) }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="bg-blue-600 p-1 rounded">Add</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
    {{ $servers->links() }}
@endsection