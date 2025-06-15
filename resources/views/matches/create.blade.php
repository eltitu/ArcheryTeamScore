@extends('layouts.app')

{{-- @php
    $title = 'Archery Team Score - ' . __('New Competition')
@endphp
@section('title', $title) --}}

@section('content')
    <h2 class="pb-5 text-xl text-lime-800">{{ __('New Match') }}</h2>
    <h3 class="pb-5 text-l text-lime-800">{{ $competition->name }}</h3>

    <form action="{{ route('matches.store', $competition) }}" method="POST">
        @csrf

        <div class="flex">
            <div class="w-1/6">
                <label for="opponent">{{ __('Opponent') }}:</label>
            </div>
            <div class="w-5/6">
                <input type="text" name="opponent" id="opponent" class="border p-1 m-1 w-75 border-lime-800 rounded-sm" />
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="archer1">{{ __('Archer') }} 1:</label>
            </div>
            <div class="w-5/6">
                <select name="archer1" id="archer1" class="border p-1 m-1 w-75 border-lime-800 rounded-sm">
                    <option value="0" selected>{{ __('Select an archer') }}</option>
                    @foreach ($archers as $archer)
                        <option value="{{ $archer->id }}">{{ $archer->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="archer2">{{ __('Archer') }} 2:</label>
            </div>
            <div class="w-5/6">
                <select name="archer2" id="archer2" class="border p-1 m-1 w-75 border-lime-800 rounded-sm">
                    <option value="0" selected>{{ __('Select an archer') }}</option>
                    @foreach ($archers as $archer)
                        <option value="{{ $archer->id }}">{{ $archer->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="archer3">{{ __('Archer') }} 3:</label>
            </div>
            <div class="w-5/6">
                <select name="archer3" id="archer3" class="border p-1 m-1 w-75 border-lime-800 rounded-sm">
                    <option value="0" selected>{{ __('Select an archer') }}</option>
                    @foreach ($archers as $archer)
                        <option value="{{ $archer->id }}">{{ $archer->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <input type="hidden" name="competition_id" id="competition_id" value="{{ $competition->id }}" />

        <div class="pt-10">
            <a href="{{ route('competitions.display', $competition) }}">
                <button type="button"
                    class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-red-700 focus:outline-none focus:shadow-outline">
                    {{ __('Cancel') }}
                </button>
            </a>
            <a href="{{ route('matches.store', $competition) }}">
                <button type="submit"
                    class="border border-lime-800 bg-lime-800 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-lime-500 focus:outline-none focus:shadow-outline">
                    {{ __('Ok') }}
                </button>
            </a>
        </div>
    </form>
@endsection
