<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\appointment;
use Illuminate\Support\Facades\App;

class AppointmentCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $appointment; // Mendefinisikan variabel secara public

    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment; // Memasukkan parameter ke variabel
    }

    public function build() // Menggunakan method build untuk mendefinisikan view dan subject
    {
        return $this->subject('Detail dan Informasi Konsultasi Dokter Anda')
            ->view('antriandokter'); // Menggunakan view yang benar
    }
}
