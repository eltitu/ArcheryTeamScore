@extends('layouts.app')

@section('content')
    <form action="{{ route('archers.update', $archer->id) }}" method="POST">

        @csrf
        @method('PUT')

        <h2  class="pb-5 text-xl text-lime-800">{{ __('Archer') }}: {{ $archer->name }}</h2>

        <div class="flex">
            <div class="w-1/6">
                <label for="name">{{ __('Name') }}:</label>
            </div>
            <div class="w-5/6">
                <input type="text" name="name" id="name" value="{{ $archer->name }}"
                    class="border p-1 m-1 w-75 border-lime-800 rounded-sm" />
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="surname">{{ __('Surname') }}:</label>
            </div>
            <div class="w-5/6">
                <input type="text" name="surname" id="surname" value="{{ $archer->surname }}"
                    class="border p-1 m-1 w-75 border-lime-800 rounded-sm" />
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="license">{{ __('License') }}:</label>
            </div>
            <div class="w-5/6">
                <input type="text" name="license" id="license" value="{{ $archer->license }}"
                    class="border p-1 m-1 w-75 border-lime-800 rounded-sm" />
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="division">{{ __('Division') }}:</label>
            </div>
            <div class="w-5/6">
                @if ($divisions)
                    <select name="division" id="division" class="border p-1 m-1 w-75 border-lime-800 rounded-sm">
                        @foreach ($divisions as $division)
                            @php
                                $selected_division = $division->id == $archer->division->id ? 'selected' : '';
                            @endphp
                            <option value="{{ $division->id }}" {{ $selected_division }}>{{ $division->name }}</option>
                        @endforeach
                    </select>
                @endif
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="status">{{ __('Status') }}:</label>
            </div>
            <div class="w-5/6">
                @php
                    $selected_status0 = $archer->status == 0 ? 'selected' : '';
                    $selected_status1 = $archer->status == 1 ? 'selected' : '';
                @endphp
                <select name="status" id="status" class="border p-1 m-1 w-75 border-lime-800 rounded-sm">
                    <option value="0" {{ $selected_status0 }}>{{ __('Inactive') }}</option>
                    <option value="1" {{ $selected_status1 }}>{{ __('Active') }}</option>
                </select>
            </div>
        </div>

        <div class="pt-10">
            <a href="{{ route('archers.index') }}">
                <button type="button"
                    class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-red-700 focus:outline-none focus:shadow-outline">
                    {{ __('Cancel') }}
                </button>
            </a>
            {{-- <a href="{{ route('archers.update', $archer->id) }}"> --}}
                <button type="submit"
                    class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-green-700 focus:outline-none focus:shadow-outline">
                    {{ __('Ok') }}
                </button>
            {{-- </a> --}}
        </div>
    </form>
@endsection
