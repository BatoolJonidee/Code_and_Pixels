<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Schedules;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $schedule = Schedules::where('emplyee_id', $request->id)
            ->where('date', $request->date)
            ->where('time', $request->time)
            ->first();

        if ($schedule) {
            $schedule->status = 1;
            $schedule->update();

            $reservation = Reservation::create([
                'user_id' => session('user_id'),
                'employee_id' => $request->input('id'),
                'date' => $request->input('date'),
                'time' => $request->input('time'),
            ]);

            if ($reservation) {
                return back()->with('success', 'Session saved successfully.');
            } else {
                return back()->with('error', 'Failed to save session.');
            }
        } else {
            return back()->with('error', 'Schedule not found.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

    public function deleteResUserSide($id)
    {
        $reservation = Reservation::findOrFail($id);
        $schedule = Schedules::where('emplyee_id', $reservation->employee_id)
            ->where('date', $reservation->date)
            ->where('time', $reservation->time)
            ->first();
        $schedule->status = 0;
        $schedule->update();
        if ($schedule) {
            $reservation->delete();
            if ($reservation) {
                return back()->with('success', 'Session deleted successfully.');
            } else {
                return back()->with('error', 'Failed to delete session.');
            }
        } else {
            return back()->with('error', 'Schedule not found.');
        }
    }

    public function changeStatusPhotogpraherSide($id)
    {
        // pending','confirmed','canceled
        $session = Reservation::findOrFail($id);
        if ($session->status == 'confirmed') {
            $session->status = 'pending';
            $session->update();
            if ($session) {
                return back()->with('success', 'Session status updated successfully.');
            } else {
                return back()->with('error', 'Failed to update session status.');
            }
        } elseif ($session->status == 'pending') {
            $session->status = 'confirmed';
            $session->update();
            if ($session) {
                return back()->with('success', 'Session status updated successfully.');
            } else {
                return back()->with('error', 'Failed to update session status.');
            }
        } else {
            $session->status = 'confirmed';
            $session->update();
            if ($session) {
                $schedule = Schedules::where('emplyee_id', $session->employee_id)->where('date', $session->date)
                    ->where('time', $session->time)
                    ->first();
                $schedule->status = 1;
                $schedule->update();
                if ($schedule) {
                    return back()->with('success', 'Session status updated successfully.');
                } else {
                    return back()->with('error', 'Failed to update session status.');
                }
            }
        }
    }


    public function canselSessionPhotographerSide($id)
    {
        $session = Reservation::findOrFail($id);
        $session->status = 'canceled';
        $session->update();
        if ($session) {
            $schedule = Schedules::where('emplyee_id', $session->employee_id)->where('date', $session->date)
                ->where('time', $session->time)
                ->first();
            $schedule->status = 0;
            $schedule->update();
            if ($schedule) {
                return back()->with('success', 'Session canceled successfully.');
            } else {
                return back()->with('error', 'Failed to cancel session.');
            }
        }
    }
}
