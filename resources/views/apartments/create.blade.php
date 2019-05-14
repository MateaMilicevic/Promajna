@extends('layout')

@section('content')

<form method="POST" action="/apartments">

    @csrf
   <div> <h1 >Dodajte novi apartman</h1> </div>
<div>

    <label for="name">Apartman: </label>
    <input type="text" class="text" name="name">

</div>

<button type="submit"> Potvrdite </button>
<a class="btn btn-info" href="/apartments" >Natrag</a>

</form>

@endsection
