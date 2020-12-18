<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Mail;
use App\Mail\Booking;

class EventsController extends Controller
{
    public function day($event)
    {
        if(Event::isValidDate($event)) {
            $all_appointments = Event::where('datetime','LIKE', $event."%")->pluck('datetime');
            
            $appointments = collect();
            foreach($all_appointments as $key) {
                $appointments->push(substr($key, 11,5));
            }

            return view('booking.show', compact('event', 'appointments'));
        } else {
            return abort(404);
        }
    }

    public function create($date)
    {
        if(Event::isValidDateTime(str_replace("&", " ", $date).":00")) {
        	return view('booking.create', compact('date'));
        } else {
            return abort(404);
        }
    }

    public function store($date) 
    {
    	$date = str_replace("&", " ", $date).":00";

    	request()->validate([
    		'first_name' => ['required','min:2', 'max:255'],
    		'last_name' => ['required', 'min:2', 'max:255'],
    		'email' => ['required', 'email']
    	]);

    	$events = Event::where('datetime', $date)->get();
    	if($events->count()) {
    		return back()->with('eventExists', 'This date and time is already booked. Please choose again some of the available dates and time.');
    	} else{
    		Event::create([
	    		'first_name' => request('first_name'),
	    		'last_name' => request('last_name'),
	    		'email' => request('email'),
	    		'datetime' => $date
	    	]);

    		Mail::send(new Booking($date, request('first_name'), request('last_name'), request('email')));

	    	return redirect('/booking')->with('successBooked', 'You are successfully booked an appointment at: '.substr($date, 0,16));
    	}   	
    }

    public function edit($date)
    {
        $date = str_replace("&", " ", $date).":00";

        if(Event::isValidDateTime($date)) {
            $event = Event::where('datetime',$date)->first();
            if(empty($event)) {
                return abort(404);
            } else {
                return view('admin.appointments.edit', compact('date', 'event'));
            }
        } else {
            return abort(404);
        }
    }

    public function update($date) 
    {
        $date = str_replace("&", " ", $date);

        request()->validate([
            'first_name' => ['required', 'min:2', 'max:255'],
            'last_name' => ['required', 'min:2', 'max:255'],
            'email' => ['required', 'email'],
        ]);


        $datetime = request('date').' '.request('time').':00';
        $checkDatetime = Event::where('datetime', $datetime)->get();

        if(count($checkDatetime)) {
            return back()->with('dateReserved', 'Date and time you choose is already booked, please choose some other date or time.');
        } else {
            Event::where('datetime', $date)->update([
                'first_name' => request('first_name'),
                'last_name' => request('last_name'),
                'email' => request('email'),
                'datetime' => $datetime,
            ]);

            return redirect('/admin/booking/'.request('date'))->with('appointmentUpdated', 'Appointment is successfully updated.');
        }
    }

    public function createAdmin($date)
    {
        $testDate = str_replace("&", " ", $date).":00";
        if(Event::isValidDateTime($testDate)) {
            $time = substr($date, 11,15);
            $date = substr($date, 0,10);

            return view('admin.appointments.create', compact('date', 'time'));
        } else {
            return abort(404);
        }
    }

    public function storeAdmin()
    {
        request()->validate([
            'first_name' => ['required', 'min:2', 'max:255'],
            'last_name' => ['required', 'min:2', 'max:255'],
            'email' => ['required', 'email'],
        ]);

        $datetime = request('date').' '.request('time').':00';
        $checkDatetime = Event::where('datetime', $datetime)->get();
        if(count($checkDatetime)) {
            return back()->with('dateReserved', 'Date and time you choose is already booked, please choose some other date or time.');
        } else {
            Event::create([
                'first_name' => request('first_name'),
                'last_name' => request('last_name'),
                'email' => request('email'),
                'datetime' => $datetime,
            ]);

            return redirect('/admin/booking/'.request('date'))->with('appointmentCreated', 'Appointment is successfully created.');
        }

    }

    public function adminDay($event)
    {
        if(Event::isValidDate($event)) {
            $events = Event::where('datetime','LIKE', $event."%")->get();

            $times = collect();
            foreach($events->pluck('datetime') as $key) {
                $times->push(substr($key, 11,5));
            }

            return view('admin.appointments.show', compact('event','events','times'));
        } else {
            return abort(404);
        }
    }

    public function destroy($date) 
    {
        $datetime = str_replace("&", " ", $date).":00";

        Event::where('datetime', $datetime)->delete();

        return redirect('admin/booking/'.substr($date, 0,10))->with('appointmentDelete','Appointment is successfully deleted.');
    }
}
