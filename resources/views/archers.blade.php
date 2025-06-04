@extends('layouts.app')

@php
    $title = 'Archery Team Score - ' . __('Archers');
@endphp
@section('title', $title)

@section('content')

    <h2 class="pb-5 text-xl text-lime-800">{{ __('Archers') }}</h2>

    <div class="pt-2 pb-2 text-right">
        <a href="{{ route('archers.create') }}">{{ __('New Archer') }}</a>
    </div>

    @if ($archers)

        <table class="min-w-full divide-y divide-gray-200">

            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('Name') }}
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('License') }}
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('Division') }}
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        {{ __('Status') }}
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    </th>
                    <th scope="col"
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    </th>
                </tr>
            </thead>

            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($archers as $archer)
                    <tr>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            {{ $archer->name }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            {{ $archer->license }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            {{ $archer->division }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-900">
                            {{ $archer->status }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-xl font-medium">
                            <a href="{{ route('archers.show', $archer) }}" class="text-lime-800 hover:text-lime-500">
                                <i class="far fa-eye"></i>
                            </a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-xl font-medium">
                            <a href="{{ route('archers.show', $archer) }}" class="text-lime-800 hover:text-lime-500">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            {{-- <a href="{{ route('archers.edit', $archer) }}" class="text-indigo-500 hover:text-indigo-700">
                                <i class="fas fa-pencil-alt"></i>
                            </a> --}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-xl font-medium">
                            <button type="submit"
                                onclick="return confirm('{{ __('Please, confirm you want to delete archer :archer', ['archer' => $archer->name]) }}')"
                                class="text-lime-800 hover:text-lime-500">
                                <li class="fas fa-trash-alt"></i>
                            </button>
                            {{-- <form method="POST" action="{{ route('archers.destroy', $archer) }}">
                                @csrf @method('delete')
                                <button type="submit"
                                    onclick="return confirm('{{ __('Please, confirm you want to delete archer :archer', ['archer' => $archer->name]) }}')"
                                    class="text-lime-800 hover:text-lime-500">
                                    <li class="fas fa-trash-alt"></i>
                                </button>
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>

    @endif

@endsection
