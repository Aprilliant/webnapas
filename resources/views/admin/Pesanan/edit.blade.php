@extends('admin.layout.layout')
@section('content')

<div>
    <h1 class="mx-10">Edit Status Orderan</h1>
</div>

<div class="mx-10 mt-10">

    <form method="POST" action="{{ route('pesanan.update',$orderan->id) }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Nama Pembeli</label>
                <input type="text"
                    class="bg-gray-50 border border-gray-300  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                    required autofocus value="{{ $orderan->User->name }}">

            </div>
            <div>
                <label for="tanggal"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                <input type="text" id="tanggal"
                    class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required value="{{ $orderan->tanggal }}">
            </div>
        </div>
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah
                    Harga</label>
                <input type="text"
                    class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required value="{{ $orderan->jumlah_harga }}">
            </div>

            <div>
                <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                <input type="text" id="status"
                    class="bg-gray-50 border  border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required name="status" value="{{ $orderan->status }}">
            </div>
        </div>







        <button type="submit" onclick="swal('Good job!', 'Status Pesanan Sudah Dirubah', 'success')"
            class="mt-5 create inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
            Edit Status Orderan
        </button>









    </form>
</div>




@endsection