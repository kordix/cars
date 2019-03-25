@extends('layouts.app')

@section('content')
<div class="container">



<div class="col-md-6">

<div id='calendar'></div>
</div>

</div>

@endsection


@section('scripts')
<script defer>
$(document).ready(function(){

  // page is now ready, initialize the calendar...

  $('#calendar').fullCalendar({
    // put your options and callbacks here
      lang:'pl',
      asdf:'dupa',
      events: [
        {
          title: 'All Day Event',
          start: '2019-03-01',
          allDay:true,
          rendering: 'background'
        },
        {
          title: 'Long Event',
          start: '2019-03-07',
          end: '2019-03-10'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2019-03-09T16:00:00'
        },
        {
          groupId: 999,
          title: 'Repeating Event',
          start: '2019-03-16T16:00:00'
        }]
  })

});
</script>

@endsection
