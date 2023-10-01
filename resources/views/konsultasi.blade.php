@extends('user.layout.layout')
@section('content')


{{-- button role dokter --}}
@role('dokter')
<div class="col-end-7 col-span-2 mt-10">
    <button
        class="mx-5 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button" data-modal-toggle="medium-modal-1">
        + Create Konsultasi
    </button>
</div>
@endrole



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



<div id="medium-modal-1" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-toggle="medium-modal-1">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="py-6 px-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Create Room Konsultasi</h3>
                <form method="POST" action="/konsultasi" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label for="namaDokter"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Nama Dokter</label>
                            <input type="text" id="namaDokter"
                                class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                required autofocus name="namaDokter">

                        </div>
                        <div>
                            <label for="spesialis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Spesialis</label>
                            <input type="text" id="spesialis"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required name="spesialis">
                        </div>


                    </div>

                    <div class="mb-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload
                            Image</label>
                        <img class="w-80 rounded-md img-preview">
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="image" type="file" name="image" onchange="previewImage()">

                    </div>

                    <button type="submit" onclick="swal('Good job!', 'Room Konsultasi Berhasil Dibuat!', 'success')"
                        class=" create inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                        Create Konsultasi
                    </button>









                </form>
            </div>
        </div>
    </div>
</div>



<div class="container 2xl:px-52">


    <section class="2xl:py-24 lg:py-20 py-16">
        <div class="container 2xl:px-44">
            <div class=" 2xl:mb-12">
                <div class="grid lg:grid-cols-3 gap-6">

                    <div>
                        <div class="bg-white shadow rounded-md text-center">
                            <img src="https://cilacap.org/wp-content/uploads/2022/08/rumah-sakit-margono-purwokerto.jpg"
                                alt="">
                            <img src="{{ asset('img/img-1.png') }}" alt=""
                                class="rounded-full shadow-md border-4 border-white h-28 mx-auto -mt-14">

                            <div class="p-7">
                                <p class="font-medium text-gray-500">@Aspen</p>
                                <h3 class="text-xl font-bold mb-2">Aspen Curtis</h3>
                                <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt.</p>

                                <div class="flex items-center justify-center gap-4 mt-7">
                                    <a href="#"
                                        class="bg-sky-700 shadow rounded-full flex items-center justify-center h-9 w-9">
                                        <svg class="fill-white h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 124 124" id="linkedin">
                                            <path
                                                d="M102.4 70.7v28.5c0 .7-.6 1.3-1.3 1.3H86.4c-.7 0-1.3-.6-1.3-1.3V72.7c0-7-2.5-11.8-8.8-11.8-4.8 0-7.6 3.2-8.9 6.3-.5 1.1-.6 2.7-.6 4.2v27.8c0 .7-.6 1.3-1.3 1.3H50.9c-.7 0-1.3-.6-1.3-1.3 0-7.1.2-41.4 0-49.4 0-.7.6-1.3 1.3-1.3h14.7c.7 0 1.3.6 1.3 1.3v6.1c0 .1-.1.1-.1.2h.1v-.2c2.3-3.5 6.4-8.6 15.6-8.6 11.4 0 19.9 7.5 19.9 23.4zM24 100.6h14.7c.7 0 1.3-.6 1.3-1.3V49.8c0-.7-.6-1.3-1.3-1.3H24c-.7 0-1.3.6-1.3 1.3v49.5c.1.7.6 1.3 1.3 1.3z">
                                            </path>
                                            <circle cx="30.9" cy="32.7" r="9.3"></circle>
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="bg-sky-500 shadow rounded-full flex items-center justify-center h-9 w-9">
                                        <svg class="fill-white h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            data-name="Layer 1" viewBox="0 0 24 24" id="twitter">
                                            <path
                                                d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="bg-blue-700 shadow rounded-full flex items-center justify-center h-9 w-9">
                                        <svg class="fill-white h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            data-name="Layer 1" viewBox="0 0 24 24" id="facebook">
                                            <path
                                                d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="bg-white shadow rounded-md text-center">
                            <img src="https://cilacap.org/wp-content/uploads/2022/08/rumah-sakit-margono-purwokerto.jpg"
                                alt="">
                            <img src="{{ asset('img/img-1.png') }}" alt=""
                                class="rounded-full shadow-md border-4 border-white h-28 mx-auto -mt-14">

                            <div class="p-7">
                                <p class="font-medium text-gray-500">@Aspen</p>
                                <h3 class="text-xl font-bold mb-2">Aspen Curtis</h3>
                                <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt.</p>

                                <div class="flex items-center justify-center gap-4 mt-7">
                                    <a href="#"
                                        class="bg-sky-700 shadow rounded-full flex items-center justify-center h-9 w-9">
                                        <svg class="fill-white h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 124 124" id="linkedin">
                                            <path
                                                d="M102.4 70.7v28.5c0 .7-.6 1.3-1.3 1.3H86.4c-.7 0-1.3-.6-1.3-1.3V72.7c0-7-2.5-11.8-8.8-11.8-4.8 0-7.6 3.2-8.9 6.3-.5 1.1-.6 2.7-.6 4.2v27.8c0 .7-.6 1.3-1.3 1.3H50.9c-.7 0-1.3-.6-1.3-1.3 0-7.1.2-41.4 0-49.4 0-.7.6-1.3 1.3-1.3h14.7c.7 0 1.3.6 1.3 1.3v6.1c0 .1-.1.1-.1.2h.1v-.2c2.3-3.5 6.4-8.6 15.6-8.6 11.4 0 19.9 7.5 19.9 23.4zM24 100.6h14.7c.7 0 1.3-.6 1.3-1.3V49.8c0-.7-.6-1.3-1.3-1.3H24c-.7 0-1.3.6-1.3 1.3v49.5c.1.7.6 1.3 1.3 1.3z">
                                            </path>
                                            <circle cx="30.9" cy="32.7" r="9.3"></circle>
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="bg-sky-500 shadow rounded-full flex items-center justify-center h-9 w-9">
                                        <svg class="fill-white h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            data-name="Layer 1" viewBox="0 0 24 24" id="twitter">
                                            <path
                                                d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="bg-blue-700 shadow rounded-full flex items-center justify-center h-9 w-9">
                                        <svg class="fill-white h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            data-name="Layer 1" viewBox="0 0 24 24" id="facebook">
                                            <path
                                                d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="bg-white shadow rounded-md text-center">
                            <img src="https://cilacap.org/wp-content/uploads/2022/08/rumah-sakit-margono-purwokerto.jpg"
                                alt="">
                            <img src="{{ asset('img/img-1.png') }}" alt=""
                                class="rounded-full shadow-md border-4 border-white h-28 mx-auto -mt-14">

                            <div class="p-7">
                                <p class="font-medium text-gray-500">@Aspen</p>
                                <h3 class="text-xl font-bold mb-2">Aspen Curtis</h3>
                                <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                    eiusmod tempor incididunt.</p>

                                <div class="flex items-center justify-center gap-4 mt-7">
                                    <a href="#"
                                        class="bg-sky-700 shadow rounded-full flex items-center justify-center h-9 w-9">
                                        <svg class="fill-white h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 124 124" id="linkedin">
                                            <path
                                                d="M102.4 70.7v28.5c0 .7-.6 1.3-1.3 1.3H86.4c-.7 0-1.3-.6-1.3-1.3V72.7c0-7-2.5-11.8-8.8-11.8-4.8 0-7.6 3.2-8.9 6.3-.5 1.1-.6 2.7-.6 4.2v27.8c0 .7-.6 1.3-1.3 1.3H50.9c-.7 0-1.3-.6-1.3-1.3 0-7.1.2-41.4 0-49.4 0-.7.6-1.3 1.3-1.3h14.7c.7 0 1.3.6 1.3 1.3v6.1c0 .1-.1.1-.1.2h.1v-.2c2.3-3.5 6.4-8.6 15.6-8.6 11.4 0 19.9 7.5 19.9 23.4zM24 100.6h14.7c.7 0 1.3-.6 1.3-1.3V49.8c0-.7-.6-1.3-1.3-1.3H24c-.7 0-1.3.6-1.3 1.3v49.5c.1.7.6 1.3 1.3 1.3z">
                                            </path>
                                            <circle cx="30.9" cy="32.7" r="9.3"></circle>
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="bg-sky-500 shadow rounded-full flex items-center justify-center h-9 w-9">
                                        <svg class="fill-white h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            data-name="Layer 1" viewBox="0 0 24 24" id="twitter">
                                            <path
                                                d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="bg-blue-700 shadow rounded-full flex items-center justify-center h-9 w-9">
                                        <svg class="fill-white h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                            data-name="Layer 1" viewBox="0 0 24 24" id="facebook">
                                            <path
                                                d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <div class="mt-14">
        <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-6">


            <div>
                <div class="bg-white shadow rounded-md text-center p-7">
                    <img src="https://cilacap.org/wp-content/uploads/2022/08/rumah-sakit-margono-purwokerto.jpg" alt=""
                        class="rounded-full shadow-md border-4 border-white h-28 mx-auto">

                    <div class="mt-7">
                        <h3 class="text-2xl font-bold mb-0.5">Randy Gouse</h3>
                        <p class="font-medium text-gray-500 mb-4">CEO & Co-Founder</p>
                        <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt.</p>

                        <div class="flex items-center justify-center gap-4 mt-7">
                            <a href="#" class="bg-sky-700 shadow rounded-full flex items-center justify-center h-9 w-9">
                                <svg class="fill-white h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 124"
                                    id="linkedin">
                                    <path
                                        d="M102.4 70.7v28.5c0 .7-.6 1.3-1.3 1.3H86.4c-.7 0-1.3-.6-1.3-1.3V72.7c0-7-2.5-11.8-8.8-11.8-4.8 0-7.6 3.2-8.9 6.3-.5 1.1-.6 2.7-.6 4.2v27.8c0 .7-.6 1.3-1.3 1.3H50.9c-.7 0-1.3-.6-1.3-1.3 0-7.1.2-41.4 0-49.4 0-.7.6-1.3 1.3-1.3h14.7c.7 0 1.3.6 1.3 1.3v6.1c0 .1-.1.1-.1.2h.1v-.2c2.3-3.5 6.4-8.6 15.6-8.6 11.4 0 19.9 7.5 19.9 23.4zM24 100.6h14.7c.7 0 1.3-.6 1.3-1.3V49.8c0-.7-.6-1.3-1.3-1.3H24c-.7 0-1.3.6-1.3 1.3v49.5c.1.7.6 1.3 1.3 1.3z">
                                    </path>
                                    <circle cx="30.9" cy="32.7" r="9.3"></circle>
                                </svg>
                            </a>
                            <a href="#" class="bg-sky-500 shadow rounded-full flex items-center justify-center h-9 w-9">
                                <svg class="fill-white h-5 w-5" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                    viewBox="0 0 24 24" id="twitter">
                                    <path
                                        d="M22,5.8a8.49,8.49,0,0,1-2.36.64,4.13,4.13,0,0,0,1.81-2.27,8.21,8.21,0,0,1-2.61,1,4.1,4.1,0,0,0-7,3.74A11.64,11.64,0,0,1,3.39,4.62a4.16,4.16,0,0,0-.55,2.07A4.09,4.09,0,0,0,4.66,10.1,4.05,4.05,0,0,1,2.8,9.59v.05a4.1,4.1,0,0,0,3.3,4A3.93,3.93,0,0,1,5,13.81a4.9,4.9,0,0,1-.77-.07,4.11,4.11,0,0,0,3.83,2.84A8.22,8.22,0,0,1,3,18.34a7.93,7.93,0,0,1-1-.06,11.57,11.57,0,0,0,6.29,1.85A11.59,11.59,0,0,0,20,8.45c0-.17,0-.35,0-.53A8.43,8.43,0,0,0,22,5.8Z">
                                    </path>
                                </svg>
                            </a>
                            <a href="#"
                                class="bg-blue-700 shadow rounded-full flex items-center justify-center h-9 w-9">
                                <svg class="fill-white h-5 w-5" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"
                                    viewBox="0 0 24 24" id="facebook">
                                    <path
                                        d="M15.12,5.32H17V2.14A26.11,26.11,0,0,0,14.26,2C11.54,2,9.68,3.66,9.68,6.7V9.32H6.61v3.56H9.68V22h3.68V12.88h3.06l.46-3.56H13.36V7.05C13.36,6,13.64,5.32,15.12,5.32Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>

</div>


<div class="mx-5 grid grid-cols-1 sm:grid-cols-1 gap-6 md:grid-cols-3 lg:grid-cols-3 mt-10 mb-10">


    @foreach($konsultasi as $konsul)
    <div
        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-end px-4 pt-4">
            @role('dokter')
            {{-- <button id="dropdownButton1" data-dropdown-toggle="dropdown1"
                class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                type="button">
                <span class="sr-only">Open dropdown</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                    </path>
                </svg>
            </button> --}}
            <!-- Dropdown menu -->
            {{-- <div id="dropdown1"
                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2" aria-labelledby="dropdownButton1">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                    </li>
                    <li>
                        <a href="/detail-konsultasi"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Detail</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                    </li>
                </ul>
            </div> --}}

            @if (Auth::user()->id == $konsul->user_id)
            <button
                class="relative inline-flex items-center justify-center pt-1 pr-2 overflow-hidden text-sm font-medium rounded-lg"
                type="button" data-modal-toggle="modalDescription">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    style="fill: #577CFF;transform: ;msFilter:;">
                    <path
                        d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z">
                    </path>
                    <path
                        d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z">
                    </path>
                </svg>

            </button>




            <div id="modalDescription" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="modalDescription">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="py-6 px-6 lg:px-8">
                            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Update Room Konsultasi
                            </h3>
                            <form method="POST" action="/konsultasi/{{ $konsul->id }}" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                    <div>
                                        <label for="namaDokter"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Nama Dokter</label>
                                        <input type="text" id="namaDokter"
                                            class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                            required autofocus name="namaDokter" value="{{ $konsul->namaDokter }}">

                                    </div>
                                    <div>
                                        <label for="spesialis"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            Spesialis</label>
                                        <input type="text" id="spesialis"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            required name="spesialis" value="{{ $konsul->spesialis }}">
                                    </div>


                                </div>

                                <div class="mb-5">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="image">Upload
                                        Image</label>
                                    <input type="hidden" name="oldImage" value="{{ $konsul->image }}">
                                    @if($konsul->image)
                                    <img src="{{asset('storage/'.$konsul->image)}}" class="w-80 rounded-md img-preview"
                                        alt="image">
                                    @else
                                    <img class="w-80 rounded-md img-preview">

                                    @endif
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="image" type="file" name="image" onchange="previewImage()">

                                </div>

                                <button type="submit"
                                    onclick="swal('Good job!', 'Room Konsultasi Berhasil Dibuat!', 'success')"
                                    class=" create inline-flex items-center px-3 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                    Update
                                </button>









                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endrole
        </div>


        <div class="flex mx-10 items-start pb-10">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <img class="w-16 h-16 rounded-full" src="{{ asset('storage/' . $konsul->image) }}" alt="">

                </div>
                <div class="font-medium dark:text-white">
                    <div>{{ $konsul->namaDokter }}</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">{{ $konsul->spesialis }}</div>
                </div>
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">


            </div>



        </div>
        <hr class="bg-slate-700 ">
        <div class=" ml-3 my-3  ">
            <h1 class="text-lg text-gray-700"><span class="text-gray-900 font-bold">28</span> reviews
            </h1>

            <div class="flex justify-between items-center mb-2">
                <div class="inline-flex -mx-px">
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>




                </div>

                <div>
                    <a href="#"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 mx-3  py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Chat</a>

                </div>









            </div>
        </div>







    </div>

    @endforeach

    @role('pengguna')
    @foreach($konsultasis as $konsul)
    <div
        class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="flex justify-end px-4 pt-4">
            @role('dokter')
            <button id="dropdownButton1" data-dropdown-toggle="dropdown1"
                class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5"
                type="button">
                <span class="sr-only">Open dropdown</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                    </path>
                </svg>
            </button>
            <!-- Dropdown menu -->
            <div id="dropdown1"
                class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2" aria-labelledby="dropdownButton1">
                    <li>
                        <a href="#" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
                    </li>
                    <li>
                        <a href="/detail-konsultasi"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Detail</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                    </li>
                </ul>
            </div>
            @endrole
        </div>


        <div class="flex mx-10 items-start pb-10">
            <div class="flex items-center space-x-4">
                <div class="relative">
                    <img class="w-16 h-16 rounded-full" src="{{ asset('storage/' . $konsul->image) }}" alt="">
                    {{-- <img class="w-16 h-16 p-1 rounded-full ring-2 ring-gray-300 dark:ring-gray-500"
                        src="{{ asset('storage/' . $konsul->image) }}" alt="Bordered avatar"> --}}
                </div>
                <div class="font-medium dark:text-white">
                    <div>{{ $konsul->namaDokter }}</div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">{{ $konsul->spesialis }}</div>
                </div>
                <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">


            </div>



        </div>
        <hr class="bg-slate-700 ">
        <div class=" ml-3 my-3  ">
            <h1 class="text-lg text-gray-700"><span class="text-gray-900 font-bold">28</span> reviews
            </h1>

            <div class="flex justify-between items-center mb-2">
                <div class="inline-flex -mx-px">
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>
                    <svg class="w-4 h-4 mx-px fill-current text-green-600" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 14 14">
                        <path
                            d="M6.43 12l-2.36 1.64a1 1 0 0 1-1.53-1.11l.83-2.75a1 1 0 0 0-.35-1.09L.73 6.96a1 1 0 0 1 .59-1.8l2.87-.06a1 1 0 0 0 .92-.67l.95-2.71a1 1 0 0 1 1.88 0l.95 2.71c.13.4.5.66.92.67l2.87.06a1 1 0 0 1 .59 1.8l-2.3 1.73a1 1 0 0 0-.34 1.09l.83 2.75a1 1 0 0 1-1.53 1.1L7.57 12a1 1 0 0 0-1.14 0z" />
                    </svg>




                </div>

                <div>
                    <a id="sendMessage" href="https://wa.me/081919898656?text=Hallo Dok {{ $konsul->namaDokter }}"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 mx-3  py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Chat</a>

                </div>









            </div>
        </div>







    </div>

    @endforeach

    @endrole

    <div id="mediummodal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full ">
        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto ">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="medium-modal-1">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Create Room Konsultasi</h3>
                    <form method="POST" action="/konsultasi" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div>
                                <label for="namaDokter"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Nama Dokter</label>
                                <input type="text" id="namaDokter"
                                    class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                                    required autofocus name="namaDokter">

                            </div>
                            <div>
                                <label for="spesialis"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    Spesialis</label>
                                <input type="text" id="spesialis"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required name="spesialis">
                            </div>


                        </div>

                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="image">Upload
                                Image</label>
                            <img class="w-80 rounded-md img-preview">
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                id="image" type="file" name="image" onchange="previewImage()">

                        </div>

                        <button type="submit" onclick="swal('Good job!', 'Room Konsultasi Berhasil Dibuat!', 'success')"
                            class="mt-5 create inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Publish post
                        </button>









                    </form>
                </div>
            </div>
        </div>
    </div>







</div>









<script>
    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        };
    }
</script>



<script>
    function removeChild(e){
      e.remove()
    }
    

    public int checkAssesment(int n){
      int result = 0;
      for(int i = 0; i*i <n; i++){
        result += i;
      }

      return result;
    }

    function tambahChild(e, id)
    {
      
      let parent = e.parentNode;
      let buyut = parent.parentNode;
      
      
      
      let relativeChild = document.createElement('div');
      relativeChild.className = "relative";
      
      let child1Relative = document.createElement('input');
      child1Relative.className = 'block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
      child1Relative.placeholder = 'qualification';
      child1Relative.name = `requirement[${id}][qualification][]`;
      
      
      let child2Relative = document.createElement('button');
      child2Relative.type = 'button';
      child2Relative.className = 'text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800';
      childIconRelative = document.createElement('i')
      childIconRelative.className = 'bx bxs-minus-circle'
      child2Relative.appendChild(childIconRelative);
      child2Relative.onclick = () =>{
        removeChild(relativeChild);
      }
      
      relativeChild.appendChild(child1Relative)
      relativeChild.appendChild(child2Relative)
      
      buyut.appendChild(relativeChild);
      
    }
    
    
    let count = 0;
    
    function tambah(){
      
      
      let id = ++count;
      let el = document.getElementById('requirement');
      
      let parent = document.createElement('div');
      parent.className = 'flex justify-between gap-x-2 flex-row items-center mb-3';
      
      let parentInput1 = document.createElement('div');
      parentInput1.className = 'basis-[30%]';
      let child1 = document.createElement('input');
      child1.name = `requirement[${id}][role]`;
      child1.className='bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white';
      child1.placeholder = 'role...'
      parentInput1.appendChild(child1)
      
      
      let parentInput2 = document.createElement('div');
      parentInput2.className = 'basis-[40%]';
      
      let relativeChild = document.createElement('div');
      relativeChild.className = "relative";
      
      let child1Relative = document.createElement('input');
      child1Relative.className = 'block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500';
      child1Relative.placeholder = 'qualification';
      child1Relative.name = `requirement[${id}][qualification][]`;
      
      let child2Relative = document.createElement('button');
      child2Relative.type = 'button';
      child2Relative.className = 'text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800';
      childIconRelative = document.createElement('i')
      childIconRelative.className = 'bx bxs-plus-circle'
      child2Relative.appendChild(childIconRelative);
      child2Relative.onclick = (id) =>{
        tambahChild(child2Relative, count);
      }
      
      relativeChild.appendChild(child1Relative)
      relativeChild.appendChild(child2Relative)
      
      
      
      parentInput2.appendChild(relativeChild);
      
      let parentInput3 = document.createElement('div');
      parentInput3.className = 'basis-1/8';
      let button = document.createElement('button');
      button.type = 'button';
      let icon = document.createElement('i');
      icon.className='bx bxs-minus-circle';
      button.appendChild(icon);
      button.onclick = () => {
        remove(button);
      }
      parentInput3.appendChild(button);
      
      let parentInput4 = document.createElement('div');
      parentInput4.className = 'basis-[30%]'
      parentInput4.innerHTML = `<input type="text" name="requirement[${id}][salary]" id="requirement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="salary..." required>`
      
      parent.appendChild(parentInput1)
      parent.appendChild(parentInput4)
      parent.appendChild(parentInput2)
      parent.appendChild(parentInput3)
      
      
      el.appendChild(parent)
    }
    
    function sweatAlert()
    {
      Swal.fire(
      'Create Team Success',
      'You clicked the button!',
      'success'
      )
    }
    
    function remove(e) {
      let parent1 = e.parentNode;
      parent1.parentNode.remove();
    }
    
    
</script>


<script>
    document.getElementById("sendMessage").addEventListener("click", function(){
      window.location.href = "https://wa.me/081919898656?text=Hallo Dok;
    });
</script>

@endsection