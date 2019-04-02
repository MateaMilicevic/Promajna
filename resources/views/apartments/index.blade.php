@extends('layout')


@section('content')

<h1>Apartments</h1>



<div>

    <ol>
        @foreach ($apartments as $apartment)



        <li> <a href="/apartments/{{ $apartment->id}}">{{ $apartment->name }} </a></li>


        @endforeach
    </ol>
</div>


@endsection
