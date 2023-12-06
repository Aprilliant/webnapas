@extends('user.layout.layout')
@section('content')


{{-- button role dokter --}}
{{-- @role('dokter')
<div class="col-end-7 col-span-2 mt-10">
    <button
        class="mx-5 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
        type="button" data-modal-toggle="medium-modal-1">
        + Create Konsultasi
    </button>
</div>
@endrole --}}

@php
$doctorImages = [
'https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
'https://images.unsplash.com/photo-1618498082410-b4aa22193b38?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
'https://plus.unsplash.com/premium_photo-1661551577028-80cfb8e4d236?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
//tambahkan url gambar dokter lainnya sesuai kebutuhan
];
@endphp


@role('pengguna')
<div
    class="mt-10 mx-10 flex flex-col items-start justify-center space-y-4 py-8 px-4 sm:flex-row sm:space-y-0 md:justify-between lg:px-0">
    <div class="max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800">Konsultasi Dokter Langsung</h1>
        <p class="mt-2 text-gray-600">Temukan solusi kesehatan Anda dengan mudah bersama dokter terpercaya kami melalui
            layanan secara Langsung.Diskusi masalah
            kesehatan Anda dengan dokter kami secara Langsung</p>
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

            <a href="#" class="font-semibold inline-block">Rekomendasi Dokter</a>
        </div>
        <a href="#">See All</a>
    </div>


    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

        @foreach($doctors as $doctor)
        @php
        $randomImage = $doctorImages[array_rand($doctorImages)];
        @endphp


        <div class="rounded overflow-hidden shadow-lg flex flex-col">
            <div class="relative"><a href="{{ url('konsultasi-langsung') }}/{{ $doctor->id }}">
                    <img class="w-full" src="{{ asset('storage/users-avatar/' . $doctor->avatar) }}"
                        alt="Sunset in the mountains" style="width: 300px; height: 200px; object-fit: cover;">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </a>
                <a href="{{ url('konsultasi-langsung') }}/{{ $doctor->id }}">
                    <div
                        class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                        Dokter
                    </div>
                </a>
            </div>
            <div class="px-6 py-4 mb-auto">
                <a href="{{ url('konsultasi-langsung') }}/{{ $doctor->id }}"
                    class="font-medium text-lg  hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">{{
                    $doctor->name }}</a>

                @foreach($doctor->schedules as $jadwal)
                <p class="text-gray-500 text-sm">
                    jadwal : {{ $jadwal->day }} {{ $jadwal->time_start }} -
                    {{ $jadwal->time_end }}
                </p>
                @endforeach
            </div>
            <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <svg height="13px" width="13px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span class="ml-1">6 mins ago</span>
                </span>

                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <svg class="h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                        </path>
                    </svg>
                    <span class="ml-1">39 Ulasan</span>
                </span>
            </div>
        </div>
        @endforeach







    </div>

</div>

@endrole




{{-- <div id="medium-modal-1" tabindex="-1"
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
</div> --}}


@role('dokter')

<div class="mx-10">
    <div
        class="mt-10 flex flex-col items-start justify-center space-y-4 py-8  sm:flex-row sm:space-y-0 md:justify-between lg:px-0">
        <div class="max-w-lg">
            <h1 class="text-2xl font-bold text-gray-800">{{ auth()->user()->name }}</h1>
            <p class="mt-2 text-gray-600">Konsultasi mengenai berbagai kondisi dan penyakit paru-paru.
                Pemeriksaan dan diagnosis penyakit paru-paru.
                Edukasi mengenai pencegahan dan pengelolaan penyakit paru-paru.
                Rekomendasi dan rujukan ke layanan kesehatan lain jika diperlukan.</p>
        </div>


        <div>
            <nav class=" flex aria-label=" Breadcrumb">
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
                            <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="{{ url('konsultasi-langsung/create') }}"
                                class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Tambah
                                Jadwal</a>
                        </div>
                    </li>




                </ol>
            </nav>
        </div>



    </div>

    <div class=" border-b mb-5 flex justify-between text-sm">
        <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">

            <a href="#" class="font-semibold inline-block">Daftar Pasien Konsultasi</a>
        </div>
        <a href="#">See All</a>
    </div>

    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="py-3 pl-4">
                                    <div class="flex items-center h-5">
                                        <input id="hs-table-checkbox-all" type="checkbox"
                                            class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                        <label for="hs-table-checkbox-all" class="sr-only">Checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    No Antri</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Nama Pasien</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Hari Kedatangan</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">
                                    Jam Kedatangan</th>
                                <th scope="col"
                                    class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($appointments as $appointment)
                            <tr>

                                <td class="py-3 pl-4">
                                    <div class="flex items-center h-5">
                                        <input id="hs-table-checkbox-1" type="checkbox"
                                            class="border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800">
                                        <label for="hs-table-checkbox-1" class="sr-only">Checkbox</label>
                                    </div>
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-gray-200">
                                    {{ $appointment->queue_number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{
                                    $appointment->user->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{
                                    $appointment->schedule->day }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-gray-200">{{
                                    $appointment->schedule->time_start }} - {{ $appointment->schedule->time_end }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a class="text-blue-500 hover:text-blue-700" href="#">Delete</a>
                                </td>
                            </tr>

                            @endforeach




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>






</div>






@endrole










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