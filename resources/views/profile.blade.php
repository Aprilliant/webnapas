@extends('user.layout.layout')
@section('content')


<div
    class="mt-10 mx-10 flex flex-col items-start justify-center space-y-4 py-8 px-4 sm:flex-row sm:space-y-0 md:justify-between lg:px-0">
    <div class="max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800">Obat Obatan</h1>
        <p class="mt-2 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, alias. Quas
            necessitatibus exercitationem praesentium.</p>
    </div>
    <div class="">
        <?php 
                    $pesanan_utama = \App\Models\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
                    if (!empty($pesanan_utama)) {
                        $notif = \App\Models\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                        
                    }

                   
            ?>



        <a href="{{ url('checkout') }}"
            class="flex whitespace-nowrap rounded-lg bg-pink-600 px-6 py-2 font-bold text-white transition hover:translate-y-1">

            <svg class="w-3.5 mt-1 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 18 21">
                <path
                    d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z" />
                @if(!empty($notif))
                <span class="text-sm mt-1 mr-1 -ml-2 font-bold">{{ $notif }}</span>
                @endif
            </svg>

            Keranjang


        </a>



    </div>


</div>





<section
    class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">

    @foreach($barang as $obat)
    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="{{ url('pesan') }}/{{ $obat->id }}">
            <img src="{{ asset('storage/' . $obat->gambar) }}" alt="Product"
                class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">
                <span class="text-gray-400 mr-3 uppercase text-xs">Brand</span>
                <p class="text-lg font-bold text-black truncate block capitalize">{{ $obat->nama_barang }}</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3"> Rp.{{ $obat->harga }}</p>
                    <del>
                        <p class="text-sm text-gray-600 cursor-auto ml-2">Rp 30.000</p>
                    </del>
                    <div class="ml-auto"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                            <path
                                d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                        </svg></div>
                </div>




            </div>
        </a>
    </div>

    @endforeach


</section>

<div class="mx-10 mt-5">
    {{ $barang->links() }}

</div>






@endsection