@extends('layouts.app')

@section('styles')
<style media="screen">
.fc-widget-content {
    background-color: green !important;
}

.fc-axis {
    background-color: white;
}

.fc-bgevent {
    opacity: 0.5;
    /* border:10px solid; */
    /* margin:5px; */
}

.fc-day-number{
  color:white;

}
</style>
@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col col-md-5">
<h2>Auto nr 1</h2>
    <img src="http://i.wp.pl/a/f/jpeg/30395/romet_4e_1_640.jpeg" class="img-fluid mb-3" alt="">
  </div>

  </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-2">
            <div class="panel panel-default">
                {{-- <div class="panel-heading">Auto 1</div> --}}

                <div class="panel-body">
                    {!! $calendar->calendar() !!}
                </div>
            </div>


        </div>
    </div>
    <div class="row" style="margin:10px">
      <div class="col-md-2">
        <p><i class="fas fa-square" style="color:red"></i> - zajęty termin</p>
        <p><i class="fas fa-square" style="color:green"></i> - wolny termin</p>
      </div>
      <div class="col-md-2">
        @guest <p> <a href="{{route('login')}}">Zaloguj się</a> by dodać rezerwację  </p>
        @else
      <a href="{{route('event.create')}}">  <button type="button" class="btn btn-primary" style="margin-left:50px">Dodaj rezerwację</button></a>
    @endguest
      </div>
    </div>

</div>

<div class="container">
<iframe src="https://www.google.com/maps/d/embed?mid=1-_S06eNDQOOVv_bGRukENfR9QDu5EAs7" width="640" height="480"></iframe>
</div>
@endsection

@section('scripts')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script> --}}
{!! $calendar->script() !!}

<script>
<script>
window.onload = function() {
  var div = document.getElementById("mapa");
var opcje = {
  zoom: 16,
  center: {lat: 51.504949,lng: -0.019501}
};
var naszaMapa = new google.maps.Map(div, opcje);
}

var opcjePunktu = {
   position: {lat: 51.504949,lng: -0.019501},
   map: naszaMapa,
   title: "Torchwood Tower",
};
var marker = new google.maps.Marker(opcjePunktu);

var infoWindow = new google.maps.InfoWindow({
   content: "<h3>InfoWindow</h3> <div>Jak widać możemy tu wstawiać dowolny HTML</div>"
});

google.maps.event.addListener(marker, 'click', function() {
    infoWindow.open(naszaMapa,marker);
});

var bounds = new google.maps.LatLngBounds();

var position = new google.maps.LatLng(51.504949, -0.019501);
bounds.extend(position);

naszaMapa.fitBounds(bounds);

</script>
</script>
@endsection
