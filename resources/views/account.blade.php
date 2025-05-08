@extends('layouts.app')
@section('content')
    <h1 class="text-2xl">Account Settings</h1>
    @if(session('status'))
        <p class="text-green-400">{{ session('status') }}</p>
    @endif
    <form method="POST" action="{{ route('account.update') }}" class="mt-4">
        @csrf
        <div>
            <label for="name">Username</label>
            <input type="text" name="name" id="name" value="{{ auth()->user()->name }}" class="rounded p-2 text-black">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="password">New Password (optional)</label>
            <input type="password" name="password" id="password" class="rounded p-2 text-black">
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="rounded p-2 text-black">
        </div>
        <button type="submit" class="bg-blue-600 p-2 rounded mt-2">Update</button>
    </form>
@endsection