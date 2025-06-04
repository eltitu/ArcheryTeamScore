@extends('layouts.app')

@section('title', 'Archery Team Score')

@section('content')
    <p><a href="{{ route('competitions.create') }}">{{ __('New Competition') }}</a></p>
    <p><a href="{{ route('competitions.index') }}">{{ __('Competitions') }}</a></p>
    <p><a href="{{ route('archers.index') }}">{{ __('Archers') }}</a></p>
@endsection
