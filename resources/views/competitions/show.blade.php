@extends('layouts.app')

@section('content')

    <h2  class="pb-5 text-xl text-lime-800">{{ __('Competition') }}: {{ $competition->name }}</h2>
    
    <div class="flex">
        <div class="w-1/6">
            {{ __('Name') }}:
        </div>
        <div class="w-5/6">
            {{ $competition->name }}
        </div>
    </div>

    <div class="flex">
        <div class="w-1/6">
            {{ __('Date') }}:
        </div>
        <div class="w-5/6">
            {{ date('d-m-Y', strtotime($competition->date)) }}
        </div>
    </div>

    <div class="flex">
        <div class="w-1/6">
            {{ __('Session') }}:
        </div>
        <div class="w-5/6">
            {{ $competition->session }}
        </div>
    </div>

    <div class="flex">
        <div class="w-1/6">
            {{ __('Status') }}:
        </div>
        <div class="w-5/6">
            @if ($competition->status == 0)
                {{ __('Inactive') }}
            @elseif ($competition->status == 1)
                {{ __('Active') }}
            @endif
        </div>
    </div>

    <div class="pt-10">
        <a href="{{ route('competitions.index') }}">
            <button
                class="border border-lime-800 bg-lime-800 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-lime-500 focus:outline-none focus:shadow-outline">
                {{ __('Ok') }}
            </button>
        </a>
    </div>
@endsection
