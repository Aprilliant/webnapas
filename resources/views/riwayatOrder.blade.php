@extends('user.layout.layout')
@section('content')







<div class="mx-10">


    <div
        class="mt-10  flex flex-col items-start justify-center space-y-4 py-8  sm:flex-row sm:space-y-0 md:justify-between lg:px-0">
        <div class="max-w-lg">
            <h1 class="text-2xl font-bold text-gray-800">Riwayat Order </h1>

        </div>





    </div>





    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Order Id
                </th>
                <th scope="col" class="py-3 px-6">
                    Tanggal
                </th>
                <th scope="col" class="py-3 px-6">
                    Jumlah Harga
                </th>

                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Detail
                </th>
            </tr>
        </thead>
        <tbody>

            @foreach($riwayats as $pesanan)

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $pesanan->id }}
                </th>
                <td class="py-4 px-6">
                    {{ \Carbon\Carbon::parse($pesanan->tanggal)->format('d F Y ') }}

                </td>
                <td class="py-4 px-6">
                    {{ $pesanan->jumlah_harga }}
                </td>
                <td class="py-4 px-6">
                    <span
                        class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{
                        $pesanan->status }}</span>
                </td>
                <td class="py-4 px-6">
                    <div class="flex">
                        <a href="{{ url('riwayatOrder') }} ">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                                    <path
                                        d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3 1.641 0 3-1.358 3-3 0-1.641-1.359-3-3-3z">
                                    </path>
                                    <path
                                        d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316-.105-.316C21.927 11.617 19.633 5 12 5zm0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5-.504 1.158-2.578 5-7.926 5z">
                                    </path>
                                </svg>

                            </span>

                        </a>



                        {{-- <a href="admin-artikel/{{ $post->id }}">


                        </a> --}}

                    </div>



                </td>
            </tr>

            @endforeach



        </tbody>


    </table>


</div>


{{-- <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto my-4 sm:my-10">
    <!-- Grid -->
    <div class="mb-5 pb-5 flex justify-between items-center border-b border-gray-200 dark:border-gray-700">
        <div>
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Invoice</h2>
        </div>
        <!-- Col -->

        <div class="inline-flex gap-x-2">
            <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                href="#">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path
                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                    <path
                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                </svg>
                Invoice PDF
            </a>
            <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                href="#">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16">
                    <path
                        d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                    <path
                        d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                </svg>
                Print
            </a>
        </div>
        <!-- Col -->
    </div>
    <!-- End Grid -->

    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-3">
        <div>
            <div class="grid space-y-3">
                <dl class="grid sm:flex gap-x-3 text-sm">
                    <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                        Billed to:
                    </dt>
                    <dd class="text-gray-800 dark:text-gray-200">
                        <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium"
                            href="#">
                            {{ $pesanan->user->email }}
                        </a>
                    </dd>
                </dl>

                <dl class="grid sm:flex gap-x-3 text-sm">
                    <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                        Billing details:
                    </dt>
                    <dd class="font-medium text-gray-800 dark:text-gray-200">
                        <span class="block font-semibold">{{ $pesanan->user->name }}</span>
                        <address class="not-italic font-normal">
                            {{ $pesanan->user->alamat }},<br>
                            {{ $pesanan->user->phone }}<br>
                        </address>
                    </dd>
                </dl>

                <dl class="grid sm:flex gap-x-3 text-sm">
                    <dt class="min-w-[150px] max-w-[200px] text-gray-500">
                        Shipping details:
                    </dt>
                    <dd class="font-medium text-gray-800 dark:text-gray-200">
                        <span class="block font-semibold">Sara Williams</span>
                        <address class="not-italic font-normal">
                            280 Suzanne Throughway,<br>
                            Breannabury, OR 45801,<br>
                            United States<br>
                        </address>
                    </dd>
                </dl>
            </div>
        </div>
        <!-- Col -->

        <!-- Col -->
    </div>
    <!-- End Grid -->

    <!-- Table -->
    <div class="mt-6 border border-gray-200 p-4 rounded-lg space-y-4 dark:border-gray-700">
        <div class="hidden sm:grid sm:grid-cols-5">
            <div class="sm:col-span-2 text-xs font-medium text-gray-500 uppercase">Item</div>
            <div class="text-left text-xs font-medium text-gray-500 uppercase">Qty</div>
            <div class="text-left text-xs font-medium text-gray-500 uppercase">Rate</div>
            <div class="text-right text-xs font-medium text-gray-500 uppercase">Total</div>
        </div>

        <div class="hidden sm:block border-b border-gray-200 dark:border-gray-700"></div>

        <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
            <div class="col-span-full sm:col-span-2">
                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                <p class="font-medium text-gray-800 dark:text-gray-200">Design UX and UI</p>
            </div>
            <div>
                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                <p class="text-gray-800 dark:text-gray-200">1</p>
            </div>
            <div>
                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                <p class="text-gray-800 dark:text-gray-200">5</p>
            </div>
            <div>
                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                <p class="sm:text-right text-gray-800 dark:text-gray-200">$500</p>
            </div>
        </div>

        <div class="sm:hidden border-b border-gray-200 dark:border-gray-700"></div>

        <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
            <div class="col-span-full sm:col-span-2">
                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                <p class="font-medium text-gray-800 dark:text-gray-200">Web project</p>
            </div>
            <div>
                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                <p class="text-gray-800 dark:text-gray-200">1</p>
            </div>
            <div>
                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                <p class="text-gray-800 dark:text-gray-200">24</p>
            </div>
            <div>
                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                <p class="sm:text-right text-gray-800 dark:text-gray-200">$1250</p>
            </div>
        </div>

        <div class="sm:hidden border-b border-gray-200 dark:border-gray-700"></div>

        <div class="grid grid-cols-3 sm:grid-cols-5 gap-2">
            <div class="col-span-full sm:col-span-2">
                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Item</h5>
                <p class="font-medium text-gray-800 dark:text-gray-200">SEO</p>
            </div>
            <div>
                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Qty</h5>
                <p class="text-gray-800 dark:text-gray-200">1</p>
            </div>
            <div>
                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Rate</h5>
                <p class="text-gray-800 dark:text-gray-200">6</p>
            </div>
            <div>
                <h5 class="sm:hidden text-xs font-medium text-gray-500 uppercase">Amount</h5>
                <p class="sm:text-right text-gray-800 dark:text-gray-200">$2000</p>
            </div>
        </div>
    </div>
    <!-- End Table -->

    <!-- Flex -->
    <div class="mt-8 flex sm:justify-end">
        <div class="w-full max-w-2xl sm:text-right space-y-2">
            <!-- Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-1 gap-3 sm:gap-2">
                <dl class="grid sm:grid-cols-5 gap-x-3 text-sm">
                    <dt class="col-span-3 text-gray-500">Subotal:</dt>
                    <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">$2750.00</dd>
                </dl>

                <dl class="grid sm:grid-cols-5 gap-x-3 text-sm">
                    <dt class="col-span-3 text-gray-500">Total:</dt>
                    <dd class="col-span-2 font-medium text-gray-800 dark:text-gray-200">$2750.00</dd>
                </dl>


            </div>
            <!-- End Grid -->
        </div>
    </div>
    <!-- End Flex -->
</div> --}}


<div class="mt-4 mx-10">
    {{ $riwayats->links() }}

</div>


@endsection