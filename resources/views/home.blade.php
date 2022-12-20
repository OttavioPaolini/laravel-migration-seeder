@extends('layout.app')

@section('title', 'Train')

@section('content')
    <div class="container">
        <h1>lista treni</h1>

        <ul>
            @foreach ($trains as $train)
                <li>
                    Azienda:{{ $train->azienda }}
                </li>
                <li>
                    In partenza da :{{ $train->stazione_di_partenza }}
                </li>
                <li>
                    In arrivo da :{{ $train->stazione_di_arrivo }}
                </li>
                <br>
            @endforeach
        </ul>
    </div>
@endsection
