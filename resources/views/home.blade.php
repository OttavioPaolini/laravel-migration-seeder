@extends('layout.app')

@section('title', 'Train')

@section('content')
    <div class="container">
        <h1>Treno in partenza oggi</h1>

        <ul>
            @foreach ($trains as $train)
                <li>
                    {{ $train->orario_di_partenza }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
