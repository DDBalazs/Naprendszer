@extends('layout')
@section('content')

    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">Keresés eredménye</h1>
        <ul>
            @foreach ($result as $row)
                <li>{{$row->nev}}</li>
            @endforeach
        </ul>
    </main>
@endsection
