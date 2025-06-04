@extends('layouts.app')

@php
    $title = 'Archery Team Score - ' . __('Competitions')
@endphp
@section('title', $title)

@section('content')
    <h2>{{ __('Competitions') }}</h2>
@endsection
