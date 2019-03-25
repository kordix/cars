@extends('layouts.app')

@section('content')
<div class="container">
<h3>Dodaj rezerwację</h3>

<form class="" action="{{route('event.store')}}" method="post">
{{ csrf_field() }}
<div class="col-md-4">

<div class="form-group">
  <input type="hidden" name="title" value="-">
  <label for="start_date">Rozpoczęcie wynajmu</label><br>
  <input type="date" name="start_date" class="form-control" value="">
</div>



<div class="form-group">
  <label for="end_date">Koniec wynajmu</label>
  <input type="date" name="end_date" class="form-control" value="">
</div>
<button type="submit" class="btn btn-primary">Zatwierdź</button>
</form>
</div>

</div>
@endsection
