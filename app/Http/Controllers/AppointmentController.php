<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\appointment;
use Illuminate\Http\Request;
use App\Models\doctor_schedule;
//use auth login/mengambil yang sedang login
use App\Mail\AppointmentCreated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class AppointmentController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'doctor_id' => 'required|exists:users,id',
            'schedule_id' => 'required|exists:doctor_schedules,id',
            'appointment_date' => 'required|date',
            'catatan' => 'nullable|string',
        ]);



        $doctor_id = $request->doctor_id;
        $schedule_id = $request->schedule_id;
        $appointment_date = Carbon::parse($request->appointment_date);
        $selected_day = $appointment_date->isoFormat('dddd');

        $doctor_schedule = doctor_schedule::where('id', $schedule_id)
            ->where('doctor_id', $doctor_id)
            ->where('day', $selected_day)
            ->first();



        if (!$doctor_schedule) {
            return back()->withErrors('Dokter tidak tersedia pada hari yang Anda pilih atau jadwal tidak valid.');
        }

        $existing_appointments = appointment::where('doctor_id', $doctor_id)
            ->where('appointment_date', $appointment_date)
            ->count();

        if ($existing_appointments >= $doctor_schedule->max_appointments) {
            return back()->with('alert', ['type' => 'error', 'text' => 'Slot untuk hari yang Anda pilih sudah penuh. Silakan pilih hari lain.']);
        }

        $queue_number = $existing_appointments + 1;


        $appointment = new appointment();
        $appointment->doctor_id = $doctor_id;
        $appointment->user_id = Auth::id(); // Asumsikan user sudah login
        $appointment->schedule_id = $schedule_id;
        $appointment->appointment_date = $appointment_date;
        $appointment->catatan = $request->catatan;
        $appointment->status = 'scheduled';
        $appointment->queue_number = $queue_number;
        $appointment->save();

        Mail::to($appointment->user->email)->send(new AppointmentCreated($appointment));

        return redirect('konsultasi-langsung')->with('success', 'Rumah Sakit berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
