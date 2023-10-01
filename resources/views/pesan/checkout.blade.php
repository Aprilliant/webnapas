@extends('user.layout.layout')

@section('content')




<nav class=" flex mt-5 -mb-10 mx-10 aria-label=" Breadcrumb">
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
                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Checkout</span>
            </div>
        </li>
    </ol>
</nav>


<section>
    @if(!empty($pesanan))
    <div class=" max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="mx-10  max-w-4xl">
            <div class="mt-8">

                <ul class="space-y-4">


                    @foreach($pesanan_detail as $pesanan_details)
                    <li class="flex items-center gap-4">
                        <img src="{{ asset('assets/images/obat1.png') }}" alt=""
                            class="h-16 w-16 rounded object-cover" />

                        <div>
                            <h3 class="text-sm text-gray-900">{{ $pesanan_details->barang->nama_barang }}</h3>

                            <dl class="mt-0.5 space-y-px text-[10px] text-gray-600">
                                <div>
                                    <dt class="inline">Harga:</dt>
                                    <dd class="inline">{{ $pesanan_details->barang->harga}}</dd>
                                </div>

                                <div>
                                    <dt class="inline">Total Harga</dt>
                                    <dd class="inline">{{ $pesanan_details->jumlah_harga}}</dd>
                                </div>
                            </dl>
                        </div>

                        <div class="flex flex-1 items-center justify-end gap-2">

                            <label for="Line1Qty" class="sr-only"> Quantity </label>

                            <input type="number" min="1" value="{{ $pesanan_details->jumlah }}" id="Line1Qty"
                                class="h-8 w-12 rounded border-gray-200 bg-gray-50 p-0 text-center text-xs text-gray-600 [-moz-appearance:_textfield] focus:outline-none [&::-webkit-inner-spin-button]:m-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:m-0 [&::-webkit-outer-spin-button]:appearance-none" />

                            <form action="{{ url('checkout') }}/{{ $pesanan_details->id }}" method="POST">
                                @method('delete')
                                @csrf

                                <button type="submit" class="text-gray-600 transition hover:text-red-600">
                                    <span class="sr-only">Remove item</span>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                    </svg>
                                </button>

                            </form>


                        </div>
                    </li>

                    @endforeach



                </ul>

                <div class="mt-8 flex justify-end border-t border-gray-100 pt-8">
                    <div class="w-screen max-w-lg space-y-4">
                        <dl class="space-y-0.5 text-sm text-gray-700">
                            <div class="flex justify-between">
                                <dt>Subtotal</dt>
                                <dd>{{ $pesanan->jumlah_harga }}</dd>
                            </div>

                            <div class="flex justify-between">
                                <dt>VAT</dt>
                                <dd>£25</dd>
                            </div>

                            <div class="flex justify-between">
                                <dt>Discount</dt>
                                <dd>-£20</dd>
                            </div>

                            <div class="flex justify-between !text-base font-medium">
                                <dt>Total</dt>
                                <dd>£200</dd>
                            </div>
                        </dl>

                        <div class="flex justify-end">
                            <span
                                class="inline-flex items-center justify-center rounded-full bg-indigo-100 px-2.5 py-0.5 text-indigo-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="-ms-1 me-1.5 h-4 w-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" />
                                </svg>

                                <p class="whitespace-nowrap text-xs">2 Discounts Applied</p>
                            </span>
                        </div>



                        <div class="flex justify-end">
                            <div class="mt-8">
                                <form action="{{ url('/checkout') }}" method='POST'>
                                    @csrf
                                    <button type="button" onclick="requestCheckout()" id="pay-button"
                                        class="w-full items-center block px-10 py-3.5 text-base font-medium text-center text-blue-600 transition duration-500 ease-in-out transform border-2 border-white shadow-md rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 bg-white">Checkout</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

</section>



@endsection