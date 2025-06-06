@extends('layouts.app')

@php
    $title = 'Archery Team Score - ' . __('New Competition')
@endphp
@section('title', $title)

@section('content')
    <h2 class="pb-5 text-xl text-lime-800">{{ __('New Competition') }}</h2>

    <form action="{{ route('competitions.store') }}" method="POST">
        @csrf

        <div class="flex">
            <div class="w-1/6">
                <label for="name">{{ __('Name') }}:</label>
            </div>
            <div class="w-5/6">
                <input type="text" name="name" id="name"
                    class="border p-1 m-1 w-75 border-lime-800 rounded-sm" />
            </div>
        </div>
        
        <div class="flex">
            <div class="w-1/6">
                <label for="date">{{ __('Date') }}:</label>
            </div>
            <div class="w-5/6">
                <input type="date" name="date" id="date"
                    class="border p-1 m-1 w-75 border-lime-800 rounded-sm" />
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="session">{{ __('Session') }}:</label>
            </div>
            <div class="w-5/6">
                <input type="text" id="session" name="session"
                    class="border p-1 m-1 w-75 border-lime-800 rounded-sm" />
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                {{ __('Status') }}:
            </div>
            <div class="w-5/6">
                <select name="status" id="status" class="border p-1 m-1 w-75 border-lime-800 rounded-sm">
                    <option value="0">{{ __('Inactive') }}</option>
                    <option value="1" selected>{{ __('Active') }}</option>
                </select>
            </div>
        </div>

        <div class="pt-10">
            <a href="{{ route('competitions.index') }}">
                <button type="button"
                    class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-red-700 focus:outline-none focus:shadow-outline">
                    {{ __('Cancel') }}
                </button>
            </a>
            <a href="{{ route('competitions.store') }}">
                <button type="submit"
                    class="border border-lime-800 bg-lime-800 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-lime-500 focus:outline-none focus:shadow-outline">
                    {{ __('Ok') }}
                </button>
            </a>
        </div>
    </form>
@endsection
