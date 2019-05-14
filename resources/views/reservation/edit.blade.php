<!-- createevent.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  <title>Unos nove rezervacije apartmana {{$apartment->name}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>
      <form method="post" action="/reservations/{{$reservation->id}}">
        @method('PATCH')
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
              <div>
                  <h1 class="mx-auto text-uppercase" style="width: 130px;">{{$apartment->name}}</h1>
                <h3>Unesite podatke o rezervaciji:</h3>
              </div>
              <br>
            <label for="Title">Naslov:</label>
            <input type="text" class="form-control" name="title" value="{{$reservation->title}}" >
          </div>
        </div>
        <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <label for="Title">Kontakt:</label>
                  <input type="text" class="form-control" name="contact" value="{{$reservation->contact}}" >
                </div>
              </div>
              <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                      <label for="Title">Broj osoba:</label>
                      <input type="text" class="form-control" name="number_of_people" value="{{$reservation->number_of_people}}" >
                    </div>
                  </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong> Datum dolaska : </strong>
            <input class="date form-control"  type="text" id="startdate" name="starts_at" value="{{$reservation->starts_at}}" >
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <strong> Datum odlaska : </strong>
            <input class="date form-control"  type="text" id="enddate" name="ends_at" value="{{$reservation->ends_at}}" >
         </div>
        </div>
        <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                  <strong> Izaberi boju : </strong>
                  <input class="date form-control"  type="color" id="color" name="color" value="{{$reservation->color}}" >
               </div>
              </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Dodaj rezervaciju</button>
            <a class="btn btn-primary"href="/calendar/{{ $apartment->id}}">Natrag</a>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">
        $('#startdate').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
         });
         $('#enddate').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
         });
    </script>
  </body>
</html>
