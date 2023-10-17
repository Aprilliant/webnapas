@extends('user.layout.layout')
@section('content')


<div
    class="mt-10 mx-10 flex flex-col items-start justify-center space-y-4 py-8 px-4 sm:flex-row sm:space-y-0 md:justify-between lg:px-0">
    <div class="max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800">Penyakit Paru Obstruktif</h1>
        <p class="mt-2 text-gray-600">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, alias. Quas
            necessitatibus exercitationem praesentium.</p>
    </div>
    <div class="">



        <a href="{{ url('quiz') }}"
            class="flex whitespace-nowrap rounded-lg bg-pink-600 px-6 py-2 font-bold text-white transition hover:translate-y-1">
            Kembali
        </a>



    </div>


</div>

<div class="mx-12">
    <iframe id="embedded-human" frameBorder="0" style="aspect-ratio: 4 / 3; width: 100%" allowFullScreen="true"
        loading="lazy"
        src="https://human.biodigital.com/viewer/?id=5KYb&ui-anatomy-descriptions=true&ui-anatomy-pronunciations=true&ui-anatomy-labels=true&ui-audio=true&ui-chapter-list=false&ui-fullscreen=true&ui-help=true&ui-info=true&ui-label-list=true&ui-layers=true&ui-loader=circle&ui-media-controls=full&ui-menu=true&ui-nav=true&ui-search=true&ui-tools=true&ui-tutorial=false&ui-undo=true&ui-whiteboard=true&initial.summary=true&disable-scroll=false&uaid=LpwR1&paid=o_0fbf3c1d"></iframe>
</div>





@endsection