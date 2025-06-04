@extends('layouts.app')

@php
    $title = 'Archery Team Score - ' . __('New Competition')
@endphp
@section('title', $title)

@section('content')
    <h2>{{ __('New Competition') }}</h2>
@endsection
