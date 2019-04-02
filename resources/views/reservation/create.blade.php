@extends('layout')


@section('content')




<h1 class="title">{{$apartment->name}}</h1>

<div class="bootstrap-iso">
    <div class="container-fluid">
     <div class="row">
      <div class="col-md-6 col-sm-6 col-xs-12">

       <!-- Form code begins -->
      <form method="post" action="/apartments/{{ $apartment->id}}/reservations" >
         <div class="form-group"> <!-- Date input -->
           <label class="control-label" for="starts_at">Datum dolaska</label>
           <input class="form-control" id="date" name="start_at" placeholder="MM/DD/YYY" type="text"/>
           <label class="control-label" for="starts_at">Datum odlaska</label>
           <input class="form-control" id="date" name="ends_at" placeholder="MM/DD/YYY" type="text"/>
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

   <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
@endsection
