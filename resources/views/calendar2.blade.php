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
    opacity: 1;
}
</style>
@endsection

@section('content')

<p class="fc-widget-content">fdafdsa</p>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Full Calendar Example</div>

                <div class="panel-body">
                    {!! $calendar->calendar() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script> --}}
{!! $calendar->script() !!}
@endsection
