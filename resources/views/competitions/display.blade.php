@extends('layouts.app')

@section('content')
    <h2 class="pb-5 text-xl text-lime-800">{{ $competition->name }}</h2>

    <div class="pt-10">

        <div class="w-full">
            @foreach ($competition->games as $match)
                <div class="border border-lime-800 bg-lime-800 rounded-md px-4 my-2 py-2">
                    <div id="match-{{ $match->id }}-head" onclick="toggle({{ $match->id }})"
                        class="w-full border border-lime-800 bg-lime-800 text-white rounded-md transition duration-500 ease select-none hover:bg-lime-500 focus:outline-none focus:shadow-outline">
                        <p>{{ $match->opponent }}</p>
                    </div>
                    <div id="match-{{ $match->id }}-body" class="hidden">
                        <div class="bg-white grid grid-cols-18">
                            <div></div>
                            <div class="text-center">1</div>
                            <div></div>
                            <div class="text-center">2</div>
                            <div></div>
                            <div class="text-center">3</div>
                            <div></div>
                            <div class="text-center">4</div>
                            <div></div>
                            <div class="text-center">5</div>
                            <div></div>
                            <div class="text-center">6</div>
                            <div></div>
                            <div class="text-center">{{ __('End Total') }}</div>
                            <div class="text-center">{{ __('Opponent Points') }}</div>
                            <div class="text-center">{{ __('Set Points') }}</div>
                            <div class="text-center">{{ __('Total Points') }}</div>
                            <div class="text-center">{{ __('Total Set Points') }}</div>

                            @for ($i = 1; $i < 6; $i++)
                                <div>{{ __('End') }} {{ $i }}</div>
                                <div class="text-center">
                                    <input type="text" size="2" name="a{{ $i }}-1"
                                        id="a{{ $i }}-1"
                                        class="border p-1 m-1 w-12 border-lime-800 rounded-sm text-center"
                                        onchange="endTotal({{ $i }})" />
                                </div>
                                <div>
                                    <select name="archer-{{ $i }}-1" id="archer-{{ $i }}-1"
                                        class="border p-1 m-1 w-15 border-lime-800 rounded-sm">
                                        @foreach ($match->archers() as $archer)
                                            <option value="{{ $archer->id }}">{{ $archer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="text-center">
                                    <input type="text" size="2" name="a{{ $i }}-2"
                                        id="a{{ $i }}-2"
                                        class="border p-1 m-1 w-12 border-lime-800 rounded-sm text-center"
                                        onchange="endTotal({{ $i }})" />
                                </div>
                                <div>
                                    <select name="archer-{{ $i }}-2" id="archer-{{ $i }}-2"
                                        class="border p-1 m-1 w-15 border-lime-800 rounded-sm">>
                                        <option value="1">Arquero 1</option>
                                        <option value="2">Arquero 2</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <input type="text" size="2" name="a{{ $i }}-3"
                                        id="a{{ $i }}-3"
                                        class="border p-1 m-1 w-12 border-lime-800 rounded-sm text-center"
                                        onchange="endTotal({{ $i }})" />
                                </div>
                                <div>
                                    <select name="archer-{{ $i }}-3" id="archer-{{ $i }}-3"
                                        class="border p-1 m-1 w-15 border-lime-800 rounded-sm">>
                                        <option value="1">Arquero 1</option>
                                        <option value="2">Arquero 2</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <input type="text" size="2" name="a{{ $i }}-4"
                                        id="a{{ $i }}-4"
                                        class="border p-1 m-1 w-12 border-lime-800 rounded-sm text-center"
                                        onchange="endTotal({{ $i }})" />
                                </div>
                                <div>
                                    <select name="archer-{{ $i }}-4" id="archer-{{ $i }}-4"
                                        class="border p-1 m-1 w-15 border-lime-800 rounded-sm">>
                                        <option value="1">Arquero 1</option>
                                        <option value="2">Arquero 2</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <input type="text" size="2" name="a{{ $i }}-5"
                                        id="a{{ $i }}-5"
                                        class="border p-1 m-1 w-12 border-lime-800 rounded-sm text-center"
                                        onchange="endTotal({{ $i }})" />
                                </div>
                                <div>
                                    <select name="archer-{{ $i }}-5" id="archer-{{ $i }}-5"
                                        class="border p-1 m-1 w-15 border-lime-800 rounded-sm">>
                                        <option value="1">Arquero 1</option>
                                        <option value="2">Arquero 2</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <input type="text" size="2" name="a{{ $i }}-6"
                                        id="a{{ $i }}-6"
                                        class="border p-1 m-1 w-12 border-lime-800 rounded-sm text-center"
                                        onchange="endTotal({{ $i }})" />
                                </div>
                                <div>
                                    <select name="archer-{{ $i }}-6" id="archer-{{ $i }}-6"
                                        class="border p-1 m-1 w-15 border-lime-800 rounded-sm">>
                                        <option value="1">Arquero 1</option>
                                        <option value="2">Arquero 2</option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <input type="text" disabled id="total-end-{{ $i }}"
                                        name="total-end-{{ $i }}"
                                        class="border p-1 m-1 w-12 border-lime-800 rounded-sm text-center" />
                                </div>
                                <div class="text-center">
                                    <input type="text" id="opponent-{{ $i }}"
                                        name="opponent-{{ $i }}"
                                        class="border p-1 m-1 w-12 border-lime-800 rounded-sm text-center"
                                        onchange="setPoints({{ $i }})" />
                                </div>
                                <div class="text-center">
                                    <input type="text" disabled id="set-points-{{ $i }}"
                                        name="set-points-{{ $i }}"
                                        class="border p-1 m-1 w-12 border-lime-800 rounded-sm text-center" />
                                </div>
                                @if ($i == 1)
                                    <div class="text-center">
                                        <input type="text" disabled id="total-points"
                                            class="border p-1 m-1 w-12 border-lime-800 rounded-sm text-center" />
                                    </div>
                                    <div class="text-center">
                                        <input type="text" disabled id="total-set-points"
                                            class="border p-1 m-1 w-12 border-lime-800 rounded-sm text-center" />
                                    </div>
                                @else
                                    <div></div>
                                    <div></div>
                                @endif
                            @endfor
                        </div>
                        {{-- TODO: relación muchos a muchos entre games y archers --}}
                        {{-- TODO: Añadir estado a cada enfrentamiento (finalizado o abierto). Si está abierto,
                            permitir añadir puntuaciones. Si está cerrado, mostrar los puntos desde BD. Mostrar 
                            el enfrentamiento con distinto color según su estado --}}
                        {{-- TODO: Botones aceptar y cancelar: ¿qué hace cada uno? Serán diferentes si el enfrentamiento
                            está finalizado o no --}}
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
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pt-10">
            <a href="{{ route('matches.create', $competition) }}">
                <button type="button"
                    class="border border-lime-800 bg-lime-800 text-white rounded-md px-4 py-2 transition duration-500 ease select-none hover:bg-lime-500 focus:outline-none focus:shadow-outline">
                    {{ __('New Match') }}
                </button>
            </a>
        </div>
    </div>
@endsection

<script>
    var totalPoints = 0;
    var totalSetPoints = 0;

    function toggle(id) {
        var element = document.querySelector('#match-' + id + '-body');
        element.classList.toggle('hidden');
    }

    function endTotal(end) {
        var total = 0;
        for (i = 1; i < 7; i++) {
            partial = document.querySelector('#a' + end + '-' + i).value;
            total += (partial == '') ? 0 : parseInt(partial);
        }
        document.querySelector('#total-end-' + end).value = total;
    }

    function setPoints(end) {
        var points = document.querySelector('#total-end-' + end).value;
        var opponentPoints = document.querySelector('#opponent-' + end).value;
        var sp = 2;
        if (opponentPoints > points) {
            sp = 0;
        } else if (opponentPoints == points) {
            sp = 1;
        }
        totalSetPoints += sp;
        totalPoints += parseInt(document.querySelector('#total-end-' + end).value);
        document.querySelector('#set-points-' + end).value = sp;
        document.querySelector('#total-set-points').value = totalSetPoints;
        document.querySelector('#total-points').value = totalPoints;
    }
</script>
