@extends('layouts.app')

@section('title', 'Archery Team Score')

@section('content')
        <p class="text-xl my-4">
            <a href="{{ route('competitions.create') }}">{{ __('New Competition') }}</a>
        </p>
        <p class="text-xl my-4">
            <a href="{{ route('competitions.index') }}">{{ __('Competitions') }}</a>
        </p>
        <p class="text-xl my-4">
            <a href="{{ route('archers.index') }}">{{ __('Archers') }}</a>
        </p>
@endsection
