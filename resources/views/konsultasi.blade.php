@extends('user.layout.layout')
@section('content')






<div
    class="mt-10 mx-10 flex flex-col items-start justify-center space-y-4 py-8 px-4 sm:flex-row sm:space-y-0 md:justify-between lg:px-0">
    <div class="max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800">Konsultasi Dokter Online</h1>
        <p class="mt-2 text-gray-600">Temukan solusi kesehatan Anda dengan mudah bersama dokter terpercaya kami melalui
            layanan chat online.Diskusi masalah
            kesehatan Anda dengan dokter kami secara real-time.</p>
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
                        <a href="{{ url('konsultasi-langsung') }}"
                            class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Konsulasi
                            Langsung</a>
                    </div>
                </li>


            </ol>
        </nav>
    </div>



</div>


<div class="bg-white p-5">
    <div class="border-b mb-5 flex justify-between text-sm">
        <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">

            <a href="#" class="font-semibold inline-block">Rekomendasi Dokter</a>
        </div>
        <a href="#">See All</a>
    </div>
    <div class="grid grid-cols-2 gap-4">




        @foreach($doctors as $dokter)
        <div class="bg-white border rounded  p-4 flex items-center h-48">
            <img class="rounded-full border-2 border-pink-600 w-20 h-20"
                src="{{ asset('storage/users-avatar/' . $dokter->avatar) }}" alt="Dr. Made Monica Yulisina Mutiara">
            <div class="ml-4 mr-auto">
                <h3 class="text-lg font-semibold">{{ $dokter->name }}</h3>
                <p class="text-gray-600">Dokter Paru-paru</p>
                <div class="flex items-center text-gray-600 my-2">
                    <!-- Replace with an actual clock icon -->

                    <span
                        class="bg-pink-100 text-pink-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-pink-900 dark:text-pink-300">99%
                        Like</span>
                    <span
                        class="bg-gray-100 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">3
                        Tahun</span>

                </div>

            </div>
            <button class="bg-red-500 text-white rounded px-4 py-2 mt-14"><a
                    href="chatify/{{ $dokter->id }}">Chat</a></button>
        </div>

        @endforeach







    </div>
</div>














@endsection