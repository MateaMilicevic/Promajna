@extends('layout')

@section('content')

       <div class="container">
            @if (\Session::has('success'))
                  <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                  </div><br />
                 @endif
               <div class="panel panel-default">
                     <div class="panel-heading">
                         <div class="border-bottom border-dark">
                                <h1 class="title text-uppercase"> APARTMAN {{$apartment->name}} </h1>
                         </div>

                         <div>
                            <a class="btn btn-success" href="/apartments/{{$apartment->id}}/reservations/create/" >Dodaj</a>
                            <a class="btn btn-info" href="/apartments/{{$apartment->id}}/reservations" >Detalji</a>
                            <a class="btn btn-info" href="/apartments" >Natrag</a>
                        </div>

                     </div>
                     <div class="panel-body" >
                        {!! $calendar->calendar() !!}
                    </div>
                </div>
            </div>

            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
            {!! $calendar->script() !!}

            <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/lang-all.js"></script>
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
