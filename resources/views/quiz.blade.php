@extends('user.layout.layout')
@section('content')


<div
    class="mt-10 mx-10 flex flex-col items-start justify-center space-y-4 py-8 px-4 sm:flex-row sm:space-y-0 md:justify-between lg:px-0">
    <div class="max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800">Inveksi Saluran Pernapasan Akut </h1>
        <p class="mt-2 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, alias. Quas
            necessitatibus exercitationem praesentium.</p>
    </div>
    <div class="">



        <a href="{{ url('checkout') }}"
            class="flex whitespace-nowrap rounded-lg bg-pink-600 px-6 py-2 font-bold text-white transition hover:translate-y-1">
            Filter
        </a>



    </div>


</div>
<section
    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">


    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="{{ url('ashma') }}">
            <img src="https://human.biodigital.com/ws/user/image/v1-0/LpHI3_kqqv9p6d_v1-0.png" alt="Product"
                class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <span class="text-gray-400 mr-3 uppercase text-xs">3D Penyakit</span>
                <p class="text-lg font-bold text-black truncate block capitalize">Penyakit Asma</p>
                <div class="flex items-center -mt-3">
                    <p class="text-sm  text-gray-600 cursor-auto my-3">penyakit yang menyebabkan peradangan
                        dan penyempitan pada saluran napas</p>

                    <div class="ml-auto">

                    </div>
                </div>
            </div>
        </a>



    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="">
            <img src="https://human.biodigital.com/ws/user/image/v1-0/LpMZS_jzo6jivo_v1-0.png" alt="Product"
                class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <span class="text-gray-400 mr-3 uppercase text-xs">3D Penyakit</span>
                <p class="text-lg font-bold text-black truncate block capitalize">Penyakit Paru Obstruktif </p>
                <div class="flex items-center -mt-3">
                    <p class="text-sm  text-gray-600 cursor-auto my-3">penyakit yang mengganggu sistem
                        pernapasan karena organ paru-paru mengalami peradangan</p>

                    <div class="ml-auto">
                        {{-- <button
                            class="px-3 py-2 text-xs font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            View
                        </button> --}}
                    </div>
                </div>
            </div>
        </a>



    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="">
            <img src="https://human.biodigital.com/ws/user/image/v1-0/LpMcG_kj5n6r3k_v1-0.png" alt="Product"
                class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <span class="text-gray-400 mr-3 uppercase text-xs">3D Penyakit</span>
                <p class="text-lg font-bold text-black truncate block capitalize">Bronkitis</p>
                <div class="flex items-center -mt-3">
                    <p class="text-sm  text-gray-600 cursor-auto my-3">peradangan pada saluran bronkus yang
                        menghubungkan trakea ke paru-paru.</p>


                </div>
            </div>
        </a>



    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="">
            <img src="https://human.biodigital.com/ws/user/image/v1-0/LpMaN_jmcbvtyz_v1-0.png" alt="Product"
                class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <span class="text-gray-400 mr-3 uppercase text-xs">3D Penyakit</span>
                <p class="text-lg font-bold text-black truncate block capitalize">Radang Paru-paru</p>
                <div class="flex items-center -mt-3">
                    <p class="text-sm  text-gray-600 cursor-auto my-3">disebabkan oleh berbagai jenis virus.Gejalanya
                        termasuk demam, batuk produktif, dan kesulitan bernapas.</p>


                </div>
            </div>
        </a>



    </div>




    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="">
            <img src="https://human.biodigital.com/ws/user/image/v1-0/LpMdI_khewyiml_v1-0.png" alt="Product"
                class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <span class="text-gray-400 mr-3 uppercase text-xs">3D Penyakit</span>
                <p class="text-lg font-bold text-black truncate block capitalize">Tuberkulosis</p>
                <div class="flex items-center -mt-3">
                    <p class="text-sm  text-gray-600 cursor-auto my-3">Disebabkan oleh bakteri Mycobacterium
                        tuberculosis yang mempengaruhi paru-paru </p>


                </div>
            </div>
        </a>



    </div>


    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="">
            <img src="https://human.biodigital.com/ws/user/image/v1-0/LpMe9_e25z3wi7_v1-0.png" alt="Product"
                class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <span class="text-gray-400 mr-3 uppercase text-xs">3D Penyakit</span>
                <p class="text-lg font-bold text-black truncate block capitalize">COVID-19</p>
                <div class="flex items-center -mt-3">
                    <p class="text-sm  text-gray-600 cursor-auto my-3">Disebabkan oleh virus SARS-CoV-2 dan dapat
                        menyebabkan gejala yang bervariasi</p>


                </div>
            </div>
        </a>



    </div>












</section>






@endsection