@extends('base.base')

@section('content')
<div class="pt-10">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-5 items-center justify-items-center text-center">
        @foreach ($items as $id => $item)
        <div class="text-white">
            <div>
                <img src="{{ asset($item['image']) }}" alt="">
                <h1 class="">{{ $item['name'] }}</h1>
                <a class="rounded-full bg-blue-700" href="{{ route('catalogue.show', ['id' => $id]) }}">Click For Info</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection