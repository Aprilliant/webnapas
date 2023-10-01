@extends('user.layout.layout')
@section('content')


<nav class="flex mt-5 -mb-10 mx-10 aria-label=" Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
            <a href="/index"
                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
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
                <a href="{{ url('obat-obatan') }}"
                    class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">Obat
                    Obatan</a>
            </div>
        </li>
        <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Pesan</span>
            </div>
        </li>
    </ol>
</nav>


<section class="overflow-hidden bg-white py-11 font-poppins dark:bg-gray-800">
    <div class="max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
        <div class="flex justify-center flex-wrap -mx-4">
            <div class="justify-center w-full mb-8 md:w-1/2 md:mb-0">
                <div class=" sticky top-0 z-50 overflow-hidden ">
                    <div class=" relative mb-6 lg:mb-10 lg:h-2/4 ">
                        <img src="{{ asset('storage/' . $barang->gambar) }}" alt=""
                            class="-object-cover w-full lg:h-full ">
                    </div>
                    <div class="flex-wrap justify-center  hidden md:flex ">
                        <div class="w-1/2 p-2 sm:w-1/4">
                            <a href="#" class="block border border-blue-300 hover:border-blue-300">
                                <img src="{{ asset('assets/images/obat6.jpg') }}" alt=""
                                    class="object-cover w-full lg:h-20">
                            </a>
                        </div>
                        <div class="w-1/2 p-2 sm:w-1/4">
                            <a href="#" class="block border border-transparent hover:border-blue-300">
                                <img src="{{ asset('assets/images/obat6.jpg') }}" alt=""
                                    class="object-cover w-full lg:h-20">
                            </a>
                        </div>
                        <div class="w-1/2 p-2 sm:w-1/4">
                            <a href="#" class="block border border-transparent hover:border-blue-300">
                                <img src="{{ asset('assets/images/obat6.jpg') }}" alt=""
                                    class="object-cover w-full lg:h-20">
                            </a>
                        </div>
                        <div class="w-1/2 p-2 sm:w-1/4">
                            <a href="#" class="block border border-transparent hover:border-blue-300">
                                <img src="{{ asset('assets/images/obat6.jpg') }}" alt=""
                                    class="object-cover w-full lg:h-20">
                            </a>
                        </div>
                    </div>
                    <div class="px-6 pb-6 mt-6 border-t border-gray-300 dark:border-gray-400 ">
                        <div class="flex flex-wrap items-center mt-6">
                            <span class="mr-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="w-4 h-4 text-gray-700 dark:text-gray-400 bi bi-truck" viewBox="0 0 16 16">
                                    <path
                                        d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                                    </path>
                                </svg>
                            </span>
                            <h2 class="text-lg font-bold text-gray-700 dark:text-gray-400">Free Shipping</h2>
                        </div>
                        <div class="mt-2 px-7">
                            <a class="text-sm text-blue-400 dark:text-blue-200" href="#">Get delivery dates</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 md:w-1/2 ">
                <div class="lg:pl-20">
                    <div class="mb-8 ">
                        <h2 class="max-w-xl mb-6 text-2xl font-bold dark:text-gray-400 md:text-4xl">
                            {{ $barang->nama_barang }} Isi 12 Kapsul Gratis Ongkir </h2>
                        <p class="inline-block mb-6 text-4xl font-bold text-gray-700 dark:text-gray-400 ">
                            <span>Rp.{{ $barang->harga }}</span>
                            <span
                                class="text-base font-normal text-gray-500 line-through dark:text-gray-400">Rp.30.000</span>
                        </p>
                        <p class="max-w-md text-gray-700 dark:text-gray-400">
                            Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet
                            Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet Lorem ispum dor amet
                        </p>
                    </div>
                    {{--
                    <div class="p-4 mb-8 border border-gray-300 dark:border-gray-700">
                        <h2 class="mb-4 text-xl font-semibold dark:text-gray-400">Real time <span
                                class="px-2 bg-blue-500 text-gray-50">26</span>
                            visitors right now! </h2>
                        <div class="mb-1 text-xs font-medium text-gray-700 dark:text-gray-400">
                            Hurry up! left 23 in Stock
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5  dark:bg-gray-600">
                            <div class="bg-blue-600 dark:bg-blue-400 h-2.5 rounded-full" style="width:45%;">
                            </div>
                        </div>
                    </div> --}}
                    <div class="mb-8">
                        <h2
                            class="w-16 pb-1 mb-6 text-xl font-semibold border-b border-blue-300 dark:border-gray-600 dark:text-gray-400">
                            Stok</h2>
                        <div>
                            <div class="flex flex-wrap -mx-2 -mb-2">
                                <button
                                    class="px-4 py-2 mb-2 mr-4 font-semibold border rounded-md hover:border-blue-400 dark:border-gray-400 hover:text-blue-600 dark:hover:border-gray-300 dark:text-gray-400">
                                    {{ $barang->stok }}
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="py-6 mb-6 border-t border-b border-gray-200 dark:border-gray-700">
                        <span class="text-base text-gray-600 dark:text-gray-400">Purwokerto,banyumas</span>
                        <p class="mt-2 text-sm text-blue-500 dark:text-blue-200">Dikirim dari Purwokerto
                            <span class="text-gray-600 dark:text-gray-400">
                                Perkiraan 2-3 hari pengiriman
                            </span>
                        </p>
                    </div>

                    <form action="{{ url('pesan') }}/{{ $barang->id }}" method="POST">
                        @csrf
                        <div class="flex flex-wrap items-center mb-6">
                            <div class="mb-4 mr-4 lg:mb-0">
                                <div class="w-28">
                                    <div class="relative flex flex-row w-full h-10 bg-transparent rounded-lg">
                                        <button
                                            class="w-20 h-full text-gray-600 bg-gray-100 border-r rounded-l outline-none cursor-pointer dark:border-gray-700 dark:hover:bg-gray-700 dark:text-gray-400 hover:text-gray-700 dark:bg-gray-900 hover:bg-gray-300">
                                            <span class="m-auto text-2xl font-thin">-</span>
                                        </button>
                                        <input type="text" name="jumlah_pesan"
                                            class="flex items-center w-full font-semibold text-center text-gray-700 placeholder-gray-700 bg-gray-100 outline-none dark:text-gray-400 dark:placeholder-gray-400 dark:bg-gray-900 focus:outline-none text-md hover:text-black"
                                            placeholder="1">
                                        <button
                                            class="w-20 h-full text-gray-600 bg-gray-100 border-l rounded-r outline-none cursor-pointer dark:border-gray-700 dark:hover:bg-gray-700 dark:text-gray-400 dark:bg-gray-900 hover:text-gray-700 hover:bg-gray-300">
                                            <span class="m-auto text-2xl font-thin">+</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 lg:mb-0">
                                <button
                                    class="flex items-center justify-center w-full h-10 p-2 mr-4 text-gray-700 border border-gray-300 lg:w-11 hover:text-gray-50 dark:text-gray-200 dark:border-blue-600 hover:bg-blue-600 hover:border-blue-600 dark:bg-blue-600 dark:hover:bg-blue-500 dark:hover:border-blue-500 dark:hover:text-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class=" bi bi-heart" viewBox="0 0 16 16">
                                        <path
                                            d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <button type="submit"
                                class="text-white -mt-6 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 18 21">
                                    <path
                                        d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                                </svg>
                                Add to cart
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
      let msg = '{{ Session::get('gagal') }}';
      if (msg) {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: msg
        });
      }
    });
</script>




@endsection