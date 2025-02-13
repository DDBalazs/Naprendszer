@extends('layout')
@section('content')
    <main class="container pb-2">
        <p class='fs-5 text-center'>
            @foreach ($menu as $row)
            <a class="btn btn-dark my-4" href="/bolygok/{{$row->bolygok_id}}">{{$row ->nev}}</a>

            @endforeach
        </p>
        <h1 class="text-center display-6 py-3">{{$data->nev}}</h1>
        <div class="row">
            <div class="col-md">
                <img src="{{asset('img/'.$data->bolygok_id.'.png')}}" alt="{{$data->bolygok_id}}.png" class="img-fluid">
            </div>
            <div class="col-md">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Átlagos keringési távolság</th>
                        <td>{{number_format($data->tavolsag,0,',',' ') }} Km</td>
                    </tr>
                    <tr>
                        <th>Átlagos keringési sebesség</th>
                        <td>{{number_format($data->sebesseg,0,',',' ') }} Km/h</td>
                    </tr>
                    <tr>
                        <th>Egyenlítő sugara</th>
                        <td>{{number_format($data->egyenlito,0,',',' ') }} Km</td>
                    </tr>
                    <tr>
                        <th>Keringési idő</th>
                        <td>{{number_format($data->keriges,0,',',' ') }} Nap</td>
                    </tr>
                    <tr>
                        <th>Légkör összetétele</th>
                        <td>{{$data->atmoszfera}}</td>
                    </tr>
                    <tr>
                        <th>Holdak száma</th>
                        <td>@if ($db>0) {{$db}} db
                            @else Nincs holdja
                        @endif</td>
                    </tr>
                </table>
            </div>

        </div>

    </main>

@endsection
