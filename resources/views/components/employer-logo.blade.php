@props(['employer', 'width' => 90])
<img class="rounded-xl" src="http://picsum.photos/seed/{{ rand(0, 100000) }}/{{ $width }}" alt="">
{{-- <img src="{{ asset($employer->logo) }}" alt="" class="rounded-xl" width="{{ $width }}"> --}}
