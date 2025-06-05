@extends('layouts.app')

@section('content')
    <h2 class="pb-5 text-xl text-lime-800">{{ __('Deleted archer') }}</h2>

    <p>
        {{ __('Archer') }} {{ $name }} {{ __('deleted') }}
    </p>

    <div class="pt-10">
        <a href="{{ route('archers.index') }}">
            <button
                class="border border-lime-800 bg-lime-800 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-lime-500 focus:outline-none focus:shadow-outline">
                {{ __('Ok') }}
            </button>
        </a>
    </div>
@endsection
