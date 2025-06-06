@extends('layouts.app')

@section('content')

    <h2  class="pb-5 text-xl text-lime-800">{{ __('Archer') }}: {{ $archer->name }}</h2>
    
    <div class="flex">
        <div class="w-1/6">
            {{ __('Name') }}:
        </div>
        <div class="w-5/6">
            {{ $archer->name }}
        </div>
    </div>

    <div class="flex">
        <div class="w-1/6">
            {{ __('Surname') }}:
        </div>
        <div class="w-5/6">
            {{ $archer->surname }}
        </div>
    </div>

    <div class="flex">
        <div class="w-1/6">
            {{ __('License') }}:
        </div>
        <div class="w-5/6">
            {{ $archer->license }}
        </div>
    </div>

    <div class="flex">
        <div class="w-1/6">
            {{ __('Division') }}:
        </div>
        <div class="w-5/6">
            {{ $archer->division->name }}
        </div>
    </div>

    <div class="flex">
        <div class="w-1/6">
            {{ __('Status') }}:
        </div>
        <div class="w-5/6">
            @if ($archer->status == 0)
                {{ __('Inactive') }}
            @elseif ($archer->status == 1)
                {{ __('Active') }}
            @endif
        </div>
    </div>

    <div class="pt-10">
        <a href="{{ route('archers.index') }}">
            <button
                class="border border-lime-800 bg-lime-800 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-lime-500 focus:outline-none focus:shadow-outline">
                {{ __('Ok') }}
            </button>
        </a>
    </div>
@endsection
