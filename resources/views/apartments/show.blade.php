@extends('layout')

@section('content')

    <div class="box">

        <h1 class="title">{{$apartment->name}}</h1>

    </div>

      {{-- Forma za unos datuma rezervacije --}}
      
     <div class="bootstrap-iso">
        <div class="container-fluid">
         <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">

            <h2 class="title">Unesite zeljene datume:</h2>

           <!-- Form code begins -->
          <form method="post" action="/apartments/{{ $apartment->id}}/reservations" >
            @csrf
             <div class="form-group"> <!-- Date input -->
               <label class="control-label" for="starts_at">Datum dolaska</label>
               <input class="form-control" id="date" name="starts_at" placeholder="MM/DD/YYY" type="text"/>
             </div>
               <div class="form-group">
               <label class="control-label" for="starts_at">Datum odlaska</label>
               <input class="form-control" id="date1" name="ends_at" placeholder="MM/DD/YYY" type="text"/>
             </div>
             <div class="form-group"> <!-- Submit button -->
               <button class="btn btn-primary " name="submit" type="submit">Potvrdi</button>
             </div>
            </form>
            <!-- Form code ends -->

           </div>
         </div>
        </div>
       </div>


       {{-- JS funkcija za unos datuma --}}
       
       <script>
        $(document).ready(function(){
          var date_input=$('input[name="starts_at"]', ); //our date input has the name "date"
          var date_input2=$('input[name="ends_at"]', );

          var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
          var options={
            format: 'yyyy-m-d',
            container: container,
            todayHighlight: true,
            autoclose: true,
          };
          date_input.datepicker(options);
          date_input2.datepicker(options);
        })
    </script>


@endsection
