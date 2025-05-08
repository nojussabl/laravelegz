@extends('layouts.app')
@section('content')
    <h1 class="text-2xl">{{ $server->name }}</h1>
    <div class="mt-4">
        @foreach($messages as $message)
            <p>{{ $message->user->name }} ({{ $message->created_at->format('H:i') }}): {{ $message->message }}</p>
        @endforeach
    </div>
    <form method="POST" action="{{ route('server.store', $server->id) }}" class="mt-4">
        @csrf
        <input type="text" name="message" placeholder="Type a message..." class="rounded p-2 text-black">
        <button type="submit" class="bg-blue-600 p-2 rounded">Send</button>
        @error('message') <span class="text-red-500">{{ $message }}</span> @enderror
    </form>
@endsection