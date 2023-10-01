@extends('user.layout.layout')
@section('content')

<div
    class=" mx-10 flex flex-col items-start justify-center space-y-4 py-8 px-4 sm:flex-row sm:space-y-0 md:justify-between lg:px-0">
    <div class="max-w-lg">
        <h1 class="text-2xl font-bold text-gray-800">Indeks Kualitas Udara Real-time</h1>
        <p class="mt-2 text-gray-600">Indeks Kualitas Udara (IKU) memberikan informasi mengenai kualitas udara yang
            dihirup oleh manusia dan
            potensi dampaknya terhadap kesehatan dalam jangka pendek. </p>
    </div>

</div>




<div class="ml-16 overflow-hidden">
    <iframe src="https://waqi.info/id/#/c/1.717/103.779/4.9z" width="900" height="400" style="overflow: hidden;"
        scrolling="no"></iframe>
</div>

@endsection