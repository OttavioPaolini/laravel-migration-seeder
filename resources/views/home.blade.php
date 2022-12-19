@extends('layout.app')

@section('title', 'Train')

@section('content')
    <div class="container">
        <h1>Treno in partenza oggi</h1>

        <ul>
            <li>
                {{ $train }}
            </li>
        </ul>
    </div>
@endsection
