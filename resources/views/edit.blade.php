@extends('layout')
@section('content')

    <main class="container pb-2">
        <h1 class="text-center display-6 py-3">Hold módosítás</h1>
        <div class="card mx-auto" style="width: 350px">
            <div class="card-body">
                <form action="/edit/{{$reesult->holdak_id}}" method="POST">
                @csrf
                <div class="py-2">
                    <label for="nev" class="form-label">Név:</label>
                    <input type="text" name="nev" id="nev" class="form-control" value="{{$result->nev}}">
                </div>
                <div class="py-2">
                    <label for="felfedezes" class="form-label">Felfedezés:</label>
                    <input type="text" name="felfedezes" id="felfedezes" class="form-control" value="{{$result->felfedezes}}">
                </div>
                <div class="d-flex justify-content-center">
                    <button></button>
                </div>
                </form>
            </div>
        </div>
    </main>
@endsection
