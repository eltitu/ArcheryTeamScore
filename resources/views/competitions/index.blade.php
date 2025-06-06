@extends('layouts.app')

@php
    $title = 'Archery Team Score - ' . __('Competitions');
@endphp
@section('title', $title)

@section('content')
    <h2 class="pb-5 text-xl text-lime-800">{{ __('Competitions') }}</h2>

    <div class="pt-2 pb-2 text-right">
        <a href="{{ route('competitions.create') }}">
            <button type="button"
                class="border border-lime-800 bg-lime-800 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-lime-500 focus:outline-none focus:shadow-outline">
                {{ __('New Competition') }}
            </button>
        </a>
    </div>

    @if ($competitions)

        <table class="min-w-full divide-y divide-gray-200">

            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('Name') }}
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('Date') }}
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('Session') }}
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($competitions as $competition)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            {{ $competition->name }}
                        </td>

                        <td class="px-6 py-4 text-sm text-gray-900">
                            {{ date('d-m-Y', strtotime($competition->date)) }}
                        </td>

                        <td class="px-6 py-4 text-sm text-gray-900">
                            {{ $competition->session }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-xl font-medium">
                            <a href="{{ route('competitions.show', $competition) }}" class="text-lime-800 hover:text-lime-500">
                                <i class="far fa-eye"></i>
                            </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-xl font-medium">
                            <a href="{{ route('competitions.edit', $competition) }}" class="text-lime-800 hover:text-lime-500">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-xl font-medium">
                            <form method="POST" action="{{ route('competitions.destroy', $competition) }}">
                                @csrf @method('delete')
                                <button type="submit"
                                    onclick="return confirm('{{ __('Please, confirm you want to delete competition :competition', ['competition' => $competition->name]) }}')"
                                    class="text-lime-800 hover:text-lime-500">
                                    <li class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @endif
@endsection
