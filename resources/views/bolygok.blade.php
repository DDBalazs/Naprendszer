@extends('layout')
@section('content')

    <main class="container pb-2">
        <p class="fs-5 text-center mt-4">
            @foreach ($menu as $row)
                <a class="btn btn-dark" href="/bolygok/{{$row->bolygok_id}}">{{$row->nev}}</a>
            @endforeach
        </p>
        <h1 class="text-center display-6 py-3">{{$data->nev}}</h1>
        <div class="row">
            <div class="col-6">
                <img src="{{asset('img/.png')}}" alt="{{$data->bolygok_id}}.png">
            </div>
            <div class="col-6">
                <table>

                </table>
            </div>
        </div>

      </main>

@endsection
