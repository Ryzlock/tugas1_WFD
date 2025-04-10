@extends('base.base')

@section('content')
<div class="pt-7">
    <div class="flex flex-col items-center">
        <div class="flex justify-around w-full">
            <div>
                @if ($prevId)
                    <a class="px-4 py-2 bg-gray-600 text-white rounded" href="{{ route('catalogue.show', ['id' => $prevId]) }}">Previous</a> 
                @endif
            </div>
            <div>
                
            </div>
            <div>
                @if ($nextId)
                    <a class="px-4 py-2 bg-gray-600 text-white rounded" href="{{  route('catalogue.show', ['id' => $nextId])  }}">Next</a>
                @endif
            </div>
        </div>
        <div><p class="mt-5 font-bold text-5xl mb-5">{{ $item['name'] }}</p></div>
        <img src="{{ asset($item['image']) }}" alt="">
        <div><p class="text-center text-xl md:text-lg sm:text-base">{{ $item['description'] }}</p></div>
        <button id="order" type="button" class="font-medium bg-blue-800 rounded px-5 py-2 cursor-pointer">Order</button>
    </div>
</div>

<script>
    document.getElementById("order").addEventListener("click", function(event) {
        event.preventDefault();
        alert("Feature is not implemented");
    });
</script>
@endsection