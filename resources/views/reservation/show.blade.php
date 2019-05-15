@extends('layout')


@section('content')

<div class="container">

    <div>
    <h2>Detalji rezervacija apartmana {{$apartment->name}}</h2>
        <a href="/calendar/{{ $apartment->id}}" class="btn btn-info">Natrag</a>
    </div>
    <div class="panel panel-default">
            <div class="panel-heading">
                <div class="border-bottom border-dark">
                    <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Naslov</th>
                                <th scope="col">Datum dolaska</th>
                                <th scope="col">Datum odlaska</th>
                                <th scope="col">Kontakt</th>
                                <th scope="col">Broj osoba</th>
                                <th scope="col">Ime apartmana</th>
                                <th scope="col">Vrijeme unosa rezervacije</th>
                                <th scope="col">Uredi</th>
                                <th scope="col">Obriši</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($reservations as $item)
                            <tr>
                            <td style="background-color: {{$item->color}}"></td>
                            <td>{{$item->title}}</td>
                            <td>{{$item->starts_at}}</td>
                            <td>{{$item->ends_at}}</td>
                            <td>{{$item->contact}}</td>
                            <td>{{$item->number_of_people}}</td>
                            <td>{{$apartment->name}}</td>
                            <td>{{$item->created_at}}</td>
                            <td><a href="/apartments/{{$item->id}}/reservations/edit" class="btn btn-warning btn-sm">Uredi</a></td>
                            <td><form method="POST" action="/reservations/{{$item->id}}">
                                @method('DELETE')
                                @csrf

                                <button type="submit" name="delete" class="button btn-danger btn-sm">Obriši</button>
                            </form></td>
                            </tr>

                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
    </div>
</div>


@endsection
