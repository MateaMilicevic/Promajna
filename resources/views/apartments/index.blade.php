@extends('layout')


@section('content')

<h1>Apartments</h1>



<div>

    <ol>
        @foreach ($apartments as $apartment)



        <li> <a href="/calendar/{{ $apartment->id}}">{{ $apartment->name }} </a></li>


        @endforeach
        <a class="btn btn-info" href="/apartments/create" >Novi apartman</a>
    </ol>
</div>


@endsection
