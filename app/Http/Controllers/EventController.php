<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function display()
    {
        $event = Event::create('Jāņi', "24/06/2026");

        return "
            <h1>Event Info</h1>
            <ul>
                <li>Name: {$event->name}</li>
                <li>Date: {$event->date}</li>
            </ul>
        ";
    }
}
