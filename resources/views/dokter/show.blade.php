@extends('user.layout.layout')
@section('content')


<div
    class="mt-10 mx-10 flex flex-col items-start justify-center space-y-4 py-8 px-4 sm:flex-row sm:space-y-0 md:justify-between lg:px-0">
    <div class="max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800">{{ $doctor->name }}</h1>
        <p class="mt-2 text-gray-600">merupakan Dokter Paru lulusan dari Fakultas Kedokteran Universitas Indonesia. Saat
            ini Dr. {{ $doctor->name }} masih aktif praktik untuk melayani pasien serta memberikan Konsultasi,
            Informasi, dan Edukasi (KIE) medis mengenai penyakit-penyakit paru dan perawatannya.</p>
    </div>


    <div>
        <nav class=" flex   mx-10 aria-label=" Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="/index"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ url('konsultasi') }}"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Konsultasi
                            Chat</a>
                    </div>
                </li>




            </ol>
        </nav>
    </div>



</div>


<div class="   max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

    <div class="border-b mb-5 flex justify-between text-sm">
        <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">

            <a href="#" class="font-semibold inline-block">Buat Janji Temu</a>
        </div>
        <a href="#"></a>
    </div>




    <form action="{{ route('appointment.store') }}" method="POST">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <input type="hidden" name="doctor_id" value="{{ $doctor->id }}">
            <div>

                <label for="schedule_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih
                    Jadwal :</label>
                <select id="schedule_id" name="schedule_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Pilih Jadwal Konsultasi</option>
                    @foreach($schedules as $schedule)
                    <option value="{{ $schedule->id }}"> {{ $schedule->day }} {{ $schedule->time_start }} - {{
                        $schedule->time_end }}</option>
                    @endforeach

                </select>

            </div>
            <div>

                <label for="appointment_date"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                    Janji Temu</label>
                <input type="date" id="appointment_date" name="appointment_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

            </div>



        </div>
        <div class="mb-6">

            <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Keluhan</label>
            <textarea id="catatan" name="catatan" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Silahkan Isi Keluhan.."></textarea>

        </div>

        <div class="flex items-start mb-6">
            <div class="flex items-center h-5">
                <input type="checkbox" value=""
                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                    required>
            </div>
            <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#"
                    class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

    @if(session('alert'))
    <script>
        Swal({
            icon: '{{ session("alert.type") }}',
            title: '{{ session("alert.title") }}',
            text: '{{ session("alert.text") }}',
            timer: 3000,
            showConfirmButton: false,
        });
    </script>
    @endif


</div>



















@endsection