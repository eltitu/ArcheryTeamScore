@extends('layouts.app')

@section('content')
    <form action="{{ route('competitions.update', $competition) }}" method="POST">

        @csrf
        @method('PUT')

        <h2 class="pb-5 text-xl text-lime-800">{{ __('Competition') }}: {{ $competition->name }}</h2>

        <div class="flex">
            <div class="w-1/6">
                <label for="name">{{ __('Name') }}:</label>
            </div>
            <div class="w-5/6">
                <input type="text" name="name" id="name" value="{{ $competition->name }}"
                    class="border p-1 m-1 w-75 border-lime-800 rounded-sm" />
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="date">{{ __('Date') }}:</label>
            </div>
            <div class="w-5/6">
                <input type="date" name="date" id="date"
                    value="{{ $competition->date }}"
                    class="border p-1 m-1 w-75 border-lime-800 rounded-sm" />
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="session">{{ __('Session') }}:</label>
            </div>
            <div class="w-5/6">
                <input type="text" name="session" id="session" value="{{ $competition->session }}"
                    class="border p-1 m-1 w-75 border-lime-800 rounded-sm" />
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="status">{{ __('Status') }}:</label>
            </div>
            <div class="w-5/6">
                @php
                    $selected_status0 = $competition->status == 0 ? 'selected' : '';
                    $selected_status1 = $competition->status == 1 ? 'selected' : '';
                @endphp
                <select name="status" id="status" class="border p-1 m-1 w-75 border-lime-800 rounded-sm">
                    <option value="0" {{ $selected_status0 }}>{{ __('Inactive') }}</option>
                    <option value="1" {{ $selected_status1 }}>{{ __('Active') }}</option>
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
            <button type="submit"
                class="border border-lime-800 bg-lime-800 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-lime-500 focus:outline-none focus:shadow-outline">
                {{ __('Ok') }}
            </button>
        </div>
    </form>
@endsection
