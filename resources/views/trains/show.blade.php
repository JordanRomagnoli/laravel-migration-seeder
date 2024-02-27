@extends('layouts.app')

@section('page-title', 'Tutti i treni')

@section('main-content')

    <div class="container">
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-3">
                    <div class="card p-3 mb-3 ">
                        <ul class=" list-unstyled ">
                            <li>
                                <span>Da</span>
                                <h2>{{ $train['stazione_partenza'] }}</h2>
                                <span>A</span>
                                <h3>{{ $train['stazione_arrivo'] }}</h3>
                                <span>in partenza il giorno</span>
                                <div>
                                    {{$train['orario_partenza']}}
                                </div>
                                <span>arrivo stimato</span>
                                <div>
                                    {{$train['orario_arrivo']}}
                                </div>
                                <div class="">
                                    <div>
                                        <span>Codice treno : </span><span>{{ $train['codice_treno'] }}</span>
                                    </div>
                                    <span>Numero carrozze : {{ $train['numero_carrozze'] }}</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
            <div class="col-10">

            </div>
        </div>
    </div>

@endsection
