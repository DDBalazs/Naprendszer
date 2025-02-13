@extends('layout')
@section('content')
    <main class="container pb-2">
        <p class='fs-5 text-center'>
            @foreach ($menu as $row)
            <a class="btn btn-dark my-4" href="/holdak/{{$row->bolygok_id}}">{{$row ->nev}}</a>
            @endforeach
        </p>
        <h1 class="text-center display-6 py-3">{{$h1->nev}}</h1>
        <table class="table table-bordered table-striped">
            <tr>
                <th>#</th>
                <th>Név</th>
                <th>Felfedezés</th>
                <th></th>
            </tr>
            @foreach ($result as $row)
                <tr>
                    <td>{{$sorszam++}}</td>
                    <td>{{$row->nev}}</td>
                    <td>{{$row->felfedezes}}</td>
                    <td><a class="btn btn-dark" href="/edit/{{$row->bolygok_id}}">Módosítás</a></td>
                </tr>
            @endforeach
        </table>

    </main>
@endsection
