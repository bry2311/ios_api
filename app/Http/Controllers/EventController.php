<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function getEvent($tgl){
        $data = Event::where([
            ['start','<=',$tgl],
            ['end','>=',$tgl]])
            ->orderBy('id', 'desc')
            ->get();
        $send = json_decode($data);
        return $send;
    }
}
