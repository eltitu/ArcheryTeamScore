@extends('layouts.app')

@section('content')
    <form action="{{ route('archers.store') }}" method="POST">
        @csrf
        <h2 class="pb-5 text-xl text-lime-800">{{ __('New Archer') }}</h2>

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
                <label for="surname">{{ __('Surname') }}:</label>
            </div>
            <div class="w-5/6">
                <input type="text" name="surname" id="surname"
                    class="border p-1 m-1 w-75 border-lime-800 rounded-sm" />
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="license">{{ __('License') }}:</label>
            </div>
            <div class="w-5/6">
                <input type="text" id="license" name="license"
                    class="border p-1 m-1 w-75 border-lime-800 rounded-sm" />
            </div>
        </div>

        <div class="flex">
            <div class="w-1/6">
                <label for="division">{{ __('Division') }}:</label>
            </div>
            <div class="w-5/6">
                <select name="division" id="division" class="border p-1 m-1 w-75 border-lime-800 rounded-sm">
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}">{{ $division->name }}</option>
                    @endforeach
                </select>
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
            <a href="{{ route('archers.index') }}">
                <button type="button"
                    class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-red-700 focus:outline-none focus:shadow-outline">
                    {{ __('Cancel') }}
                </button>
            </a>
            <a href="{{ route('archers.store') }}">
                <button type="submit"
                    class="border border-lime-800 bg-lime-800 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-lime-500 focus:outline-none focus:shadow-outline">
                    {{ __('Ok') }}
                </button>
            </a>
        </div>
    </form>
@endsection
