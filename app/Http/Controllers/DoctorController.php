<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\appointment;
use Illuminate\Http\Request;
use App\Models\doctor_schedule;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Mendapatkan ID dari dokter yang saat ini login
        $doctorId = Auth::id();

        // Mendapatkan appointments yang berhubungan dengan dokter tersebut
        $appointments = appointment::with('user') // Memuat relasi user (pasien)
            ->where('doctor_id', $doctorId)
            ->get();

        return view('konsultasi-langsung', [
            'doctors' => User::role('dokter')->with('schedules')->get(),
            'appointments' => $appointments,


        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dokter.show', [
            'doctor' => User::findOrFail($id),
            'schedules' => doctor_schedule::where('doctor_id', $id)->get()
        ]);
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
