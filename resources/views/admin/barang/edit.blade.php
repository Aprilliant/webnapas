@extends('admin.layout.layout')
@section('content')

<div>
    <h1 class="mx-10">Edit Barang</h1>
</div>

<div class="mx-10 mt-10">

    <form method="POST" action="{{ route('barang.update',$barang->id) }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="nama_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Nama Barang</label>
                <input type="text" id="nama_barang"
                    class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                    required autofocus name="nama_barang" value="{{ $barang->nama_barang }}">

            </div>
            <div>
                <label for="stok" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Stok Barang</label>
                <input type="text" id="stok"
                    class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required name="stok" value="{{ $barang->stok }}">
            </div>
            <div>
                <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Harga</label>
                <input type="text" id="harga"
                    class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required name="harga" value="{{ $barang->harga }}">
            </div>
            <div>
                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Keterangan</label>
                <input type="text" id="keterangan"
                    class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required name="keterangan" value="{{ $barang->keterangan }}">
            </div>
        </div>

        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="gambar">Upload
                Image</label>
            <input type="hidden" name="oldImage" value="{{ $barang->gambar }}">
            @if($barang->gambar)
            <img src="{{asset('storage/'.$barang->gambar)}}" class="w-80 rounded-md img-preview" alt="image">
            @else
            <img class="w-80 rounded-md img-preview">

            @endif
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="gambar" type="file" name="gambar" onchange="previewImage()">

        </div>





        <button type="submit" onclick="swal('Good job!', 'Obat Berhasil di edit!', 'success')"
            class="mt-5 create inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            edit Barang
        </button>









    </form>
</div>

<script>
    const tittel = document.querySelector('#tittel');
    const slug = document.querySelector('#slug');

    tittel.addEventListener('change', function() {
        fetch('/admin-artikel/CheckSlug?tittel=' + tittel.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    function previewImage() {
        const image = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        };
    }

   
</script>

{{-- <script>
    $('.create').click(function ()){
    swal("Good job!", "You clicked the button!", "success");
    }
</script> --}}


@endsection