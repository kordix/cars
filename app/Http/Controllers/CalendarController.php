<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Event;

class CalendarController extends Controller
{
    public function index(){
      return view('calendar');
    }

    public function index2()
  {
      $events = [];
      $data = Event::all();
      if($data->count()) {
          foreach ($data as $key => $value) {
              $events[] = Calendar::event(
                  $value->title,
                  true,
                  new \DateTime($value->start_date),
                  new \DateTime($value->end_date.' +1 day'),
                  null,
                  // Add color and link on event
                [
                    'color' => '#f05050',
                    'rendering' => 'background',
                    'url' => 'pass here url and any route',
                ]
              );
          }
      }
      $calendar = Calendar::addEvents($events);
      $events2 = json_encode($events);
      // dd($events2);
      return view('calendar2', compact('calendar','events2'));
  }
}
